<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($question)
    {
        $answer = new Answer;
        $question = Question::find($question);
        return view("answer.create", compact("answer", "question"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([     
            'option' => "required",
            'points' => "required",
            'question_id' => "required",
        ]);
        $answer = new Answer;
        $answer->option = $request->option;
        $answer->points = $request->points;
        $answer->question_id = $request->question_id;
        $answer->status = 1;       
        $answer->save();
        
        return redirect()->route('answer.addAnswer', ['question_id'=> $request->question_id])->with('success', 'Respuesta asociada Correctamente, Continúe asociando.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($question)
    {
        $answers = Answer::where('question_id',$question)->get();
        $question= Question::find($question);
        return view("answer.list", compact("answers", "question"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateStatus($id)
    {
        $answer = Answer::find($id);
     
        switch ($answer->status) {
            case 1:
                $newStatus = 2;
                $text  = "Inactivada";
                break;
            case 2:
                $newStatus = 1;
                $text = "Activada";
                break;
            default:
                $status = 1;
                $text = "Activada";
                break;
        }
        $answer->update(["status"=> $newStatus]);
        return redirect()->route("answer.listAnswer", ['question_id'=> $answer->question_id])->with('success','Respuesta ' . $text . ' correctamente');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $answer = Answer::find($id);
        return view("answer.edit", compact("answer"));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validateData = $request->validate([     
            'option' => "required",
            'points' => "required",
            'question_id' => "required",
        ]);
        $answer = Answer::find($id);
        $answer->option = $request->option;
        $answer->points = $request->points;
        $answer->question_id = $request->question_id;
        $answer->status = 1;       
        $answer->save();
        
        return redirect()->route("answer.listAnswer", ['question_id'=> $answer->question_id])->with('success','Respuesta  actualizada correctamente');
       
    }
}
