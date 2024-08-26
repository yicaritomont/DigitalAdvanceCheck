<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Answer;
use App\Models\Dimension;
use App\Models\Attempt;
use App\Models\Question;
use App\Models\AnsweredUser;
use App\Models\MadurityLevel;
use App\Models\DimensionPoint;
use App\Rules\ContainsAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConstructFormController extends Controller
{
    //
    protected $questions;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Validar si existe un intento previo del usuario en sesión.
        $user = Auth::user();
        $hasAttempt = Attempt::where('user_id',$user->id)->where('completed',0)->first();
        if(!empty($hasAttempt)){
            $attemptsCount = Attempt::where('user_id', $user->id)->where('completed', 1)->count();
            if($attemptsCount < 3){
                $result = $this->constructForm($hasAttempt);  
            }
            else{
                return redirect('startForm.index')->with('status', 'Ya ha completado sus 3 intentos.');
            }
        }
        else{
           $result = $this->constructForm();  
        }
        return view("medition.index", compact("result"));
    }

    /**
     * Function to construct form, if exist an attempt merge the answer saved whith the others question
     */
    public function constructForm($attemp=""){
        // Armar los formularios por DIMENSIONES
        $dimension = Dimension::where('status', 1)->get();
        $result = [];
        foreach ($dimension as $keyDimension => $valueDimension) {
            $result[$valueDimension->id] = [
                'dimension_id' => $valueDimension->id,
                'dimension' => $valueDimension->name,
                'description' => $valueDimension->description,
                'factor' => $valueDimension->factor->name,
                'answerAnswered' => $this->howManyAnswersByDimension($valueDimension->id, $attemp),
            ];
            // Ahora consulte el formulario para esta dimension 
            $formByDimension = Form::where('dimension_id', $valueDimension->id)->where('status', 1)->get();
            if( !$formByDimension->isEmpty()) {
                $result[$valueDimension->id]['forms'] = [
                    'form_id' => $formByDimension[0]->id,
                    'form_name' => $formByDimension[0]->title,
                    'form_description' => $formByDimension[0]->description,
                ];
                // Ahora consulta las preguntas para ese formulario. 
                $questions = $formByDimension[0]->preguntas()->where('status', 1)->get();
                if( !$questions->isEmpty()){
                    foreach ($questions as $keyQuestion => $valueQuestion) {
                        $result[$valueDimension->id]['forms']['questions'][$valueQuestion->id] = [
                            'question_id' => $valueQuestion->id,
                            'question' => $valueQuestion->statement,
                            'helpText' => $valueQuestion->help_information,
                        ];
                        // Ahora traigo las respuestas 
                        $answers = Answer::where('question_id', $valueQuestion->id)->where('status',1)->get();
                        if(!$answers->isEmpty()){
                            foreach ($answers as $keyAnswer => $valueAnswer) {
                                $result[$valueDimension->id]['forms']['questions'][$valueQuestion->id]['answers'][$keyAnswer] = [
                                    'answer_id' => $valueAnswer->id,
                                    'option' => $valueAnswer->option,
                                    'points' => $valueAnswer->points,
                                    'selected' => $this->howIsSelectedAnswer($valueQuestion->id, $attemp),
                                ];
                            }
                        }
                        else {
                            $result[$valueDimension->id]['forms']['questions'][$valueQuestion->id]['answers'] = [];
                        }
                    }
                }
                else {
                    $result[$valueDimension->id]['forms']['questions'] = [];
                }
            }
            else {
                $result[$valueDimension->id]['forms'] = [];
            }
        }  
        return $result;
    }

    /**
     * Función para contar por dimensión la cantidad de preguntas previamente almacenadas
     */
    public function howManyAnswersByDimension($dimensionId, $attemp) {
        $attemp_id = 0;
        if(!empty($attemp) && isset($attemp->id)) {
            $attemp_id = $attemp->id;
        }
        $count = AnsweredUser::whereHas('question', function ($query) use ($dimensionId) {
            $query->whereHas('form', function ($query) use ($dimensionId) {
                $query->where('dimension_id', $dimensionId);
            });
        })->where('attemp_id', $attemp_id)->count();
        return $count;
    }

    /**
     * Functión para traer información de preguntas almacenadas segun el intento
     */
    public function howIsSelectedAnswer($question, $attemp) {
        if(!empty($attemp) && isset($attemp->id)) {
            $howIs = AnsweredUser::where('user_id', Auth::user()->id)->where('question_id', $question)->where('attemp_id', $attemp->id)->first();
            if(!empty($howIs)){
                return $howIs->answer_id;
            }
        }
        return "";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Convierte todas las llaves en el request a un solo array bajo 'answers'
        $data = $request->all();
        $flattenedAnswers = [];

        foreach ($data as $key => $value) {
            if (strpos($key, 'answers') !== false) {
                $flattenedAnswers[$key] = $value;
            }
        }

        $request->merge(['flattenedAnswers' => $flattenedAnswers]);

       
        $request->validate([
            'flattenedAnswers' => ['required', new ContainsAnswer],
        ], [
            'flattenedAnswers.required' => 'Debe seleccionar al menos una respuesta para almacenar el intento.'
        ]);
       
        // Gestionar el intento.
        $attempt = $this->attemptInfo();
        // Almacenar las respuestas 
        $this->storeAnswers($attempt, $request->input('flattenedAnswers'));
        return redirect('startForm')->with('success', 'Se han almacenado las respuestas correctamente!');
    }


    /**
     * Function to get infromation about attempt.
     */
    public function attemptInfo() {
        // Consulta si existe un intento para el usuario.
        $attempt = Attempt::where('user_id', auth()->user()->id)->where('completed', 0)->first();
        $numberAttemp = Attempt::where('user_id', auth()->user()->id)->where('completed', 1)->count();
        if ($numberAttemp <=0) {
            $intent = 1;
        }
        else{
            $intent = $numberAttemp+1;
        }
        if(empty($attempt)){
            $attempt = new Attempt();
            $attempt->user_id = auth()->user()->id;
            $attempt->attemp_number = $intent;
            $attempt->completed = 0;
            $attempt->save();
        }
        return $attempt;
    }
    
    /**
     * Function to record answer array.
     */
    public function storeAnswers($attempt, $answers){
        $howmanyanswers= Question::where('status',1)->count();
        $numSaved= 0;
        // Antes de almacenar las preguntas elimine TODAS las existentes
        $deleteExistingAnswer= AnsweredUser::where('user_id',Auth::user()->id)->where('attemp_id',$attempt->id)->delete();
        foreach ($answers as $key => $value) {
            $pices = explode("_",$value[0]);
            $saveAnswer = new AnsweredUser();
            $saveAnswer->user_id = Auth::user()->id;
            $saveAnswer->question_id = $pices[1];
            $saveAnswer->answer_id = $pices[2];
            $saveAnswer->attemp_id = $attempt->id;
            $saveAnswer->save();
            $numSaved++;
        }

        if($howmanyanswers == $numSaved) {
            $attempt->completed = 1;
            $attempt->save();
        }
        return redirect('startForm')->with('success', 'Se han almacenado las respuestas correctamente!');

    }

    /**
     * Fuinción para consultar los posobles resultados de las mediciones SOLO PUNTAJES 
     */
    public function showResults() {
        
        $attemps = Attempt::where('user_id', Auth::user()->id)->where('completed',1)->get();
        
        // Por intento terminado, consulte las respuestas dadas por el usuario y obtenga el points... VAYA SUMANDO! 
        $results = [];
        foreach ($attemps as $attemp) {
            $score = 0;
            $answers = AnsweredUser::where('user_id', Auth::user()->id)->where('attemp_id',$attemp->id)->get();
            
           
            foreach ($answers as $answer) {
                $score+= $answer->anwser->points;
                $dimensionScore = DB::table('attemps as a')
                    ->join('answered_user as b', 'a.id', '=', 'b.attemp_id')
                    ->join('answer as c', 'b.answer_id', '=', 'c.id')
                    ->join('question as d', 'c.question_id', '=', 'd.id')
                    ->join('form as e', 'd.form_id', '=', 'e.id')
                    ->join('dimension as f', 'e.dimension_id', '=', 'f.id')
                    ->select('a.id', 'f.name','f.max_range', DB::raw('SUM(c.points) as total_points'))
                    ->where('a.user_id', $attemp->user_id)
                    ->where('a.completed', 1)
                    ->where('a.id', $attemp->id)
                    ->groupBy('a.id', 'f.id')
                    ->get()->toArray();
            }
            $level = MadurityLevel::where('min_range', '<=', $score)
                ->where('max_range', '>=', $score)
                ->first();
            $result[$attemp->id] = [
                'TotalScore' => $score,
                'DimensionScore' => $dimensionScore,
                'Level' => $level,
            ];
        }
        return view("medition.show", compact('result'));
    }

    /**
     * Function to construct the recomendations information. 
     */
    public function showRecomendations(){
        $attemps = Attempt::where('user_id', Auth::user()->id)->where('completed',1)->get();
        
        // Por intento terminado, consulte las respuestas dadas por el usuario y obtenga el points... VAYA SUMANDO! 
        $results = [];
        foreach ($attemps as $attemp) {
            $score = 0;
            $answers = AnsweredUser::where('user_id', Auth::user()->id)->where('attemp_id',$attemp->id)->get();
           
            foreach ($answers as $answer) {
                $score+= $answer->anwser->points;                
            }
            $level = MadurityLevel::where('min_range', '<=', $score)
                ->where('max_range', '>=', $score)
                ->first();
            $recomendations = DimensionPoint::where('madurity_level_id',$level->id)->first();
            $result[$attemp->id] = [
                'TotalScore' => $score,
                'Level' => $level,
                'Recomendations' => $recomendations,
            ];
        }
    
        return view("medition.recomendations", compact('result'));
    }

    public function showResume($attemp_id){
        $attemps = Attempt::where('id',$attemp_id)->first();
        
        // Por intento terminado, consulte las respuestas dadas por el usuario y obtenga el points... VAYA SUMANDO! 
        $results = [];
            $score = 0;
            $answers = AnsweredUser::where('attemp_id',$attemp_id)->get();
            foreach ($answers as $answer) {
                $score+= $answer->anwser->points;
                $dimensionScore = DB::table('attemps as a')
                    ->join('answered_user as b', 'a.id', '=', 'b.attemp_id')
                    ->join('answer as c', 'b.answer_id', '=', 'c.id')
                    ->join('question as d', 'c.question_id', '=', 'd.id')
                    ->join('form as e', 'd.form_id', '=', 'e.id')
                    ->join('dimension as f', 'e.dimension_id', '=', 'f.id')
                    ->select('a.id', 'f.name','f.max_range', DB::raw('SUM(c.points) as total_points'))
                    ->where('a.user_id', $attemps->user_id)
                    ->where('a.completed', 1)
                    ->where('a.id', $attemp_id)
                    ->groupBy('a.id', 'f.id')
                    ->get()->toArray();
            }
            $level = MadurityLevel::where('min_range', '<=', $score)
                ->where('max_range', '>=', $score)
                ->first();
            $recomendations = DimensionPoint::where('madurity_level_id',$level->id)->first();
            $result[$attemp_id] = [
                'TotalScore' => $score,
                'DimensionScore' => $dimensionScore,
                'Level' => $level,
                'Recomendations' => $recomendations,
                'Info' => $attemps->user,
            ];

        return view("medition.resume", compact('result'));
    }


}