<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Form;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view("questions.index", compact("questions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question = new Question;
        $form = Form::pluck('title', 'id');
        return view("questions.create", compact("form", "question"));
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
            'statement' => "required|unique:question|max:255",
            'form_id' => "required",
            'help_information' => "required",
        ]);
        $question = new Question;
        $question->statement = $request->statement;
        $question->form_id = $request->form_id;
        $question->help_information = $request->help_information;
        $question->status = 1;       
        $question->save();
        
        return redirect()->route('question.index')->with('success', 'Pregunta creada correctamente');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $form = Form::pluck('title', 'id');
        return view("questions.edit", compact("question", "form"));    
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validateData = $request->validate([            
            'statement' => "required|max:255",
            'form_id' => "required",
            'help_information' => "required",
        ]);
        $question = Question::find($id);
        $question->statement = $request->statement;
        $question->form_id = $request->form_id;
        $question->help_information = $request->help_information;
        $question->status = 1;       
        $question->save();
        
        return redirect()->route('question.index')->with('success', 'Pregunta Actualizada correctamente');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateStatus($id)
    {
        $question = Question::find($id);
     
        switch ($question->status) {
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
        $question->update(["status"=> $newStatus]);
        return redirect()->route('question.index')->with('success','Pregunta ' . $text . ' correctamente');
    }
}
