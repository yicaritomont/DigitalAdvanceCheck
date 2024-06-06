<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Form;
use Illuminate\Http\Request;

class FormsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Form::all();
        return view("forms.index", compact("forms"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = new Form;
        $dimension = Dimension::pluck('name', 'id');
        return view("forms.create", compact("form", "dimension"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validateData = $request->validate([            
            'title' => "required|unique:form|max:255",
            'description' => "required",
            'dimension_id' => "required",
        ]);

       $form = new Form;
       $form->title = $request->title;
       $form->description = $request->description;
       $form->dimension_id = $request->dimension_id;
       $form->status = 1;       
       $form->save();
        
        return redirect()->route('form.index')->with('success', 'Formulario creado correctamente');
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = Form::find($id);
        $dimension = Dimension::pluck('name', 'id');
        return view("forms.edit", compact("form", "dimension"));        
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
         //
         $validateData = $request->validate([            
            'title' => "required",
            'description' => "required",
            'dimension_id' => "required",
        ]);

       $form = Form::find($id);
       $form->title = $request->title;
       $form->description = $request->description;
       $form->dimension_id = $request->dimension_id;
       $form->status = 1;       
       $form->save();
        
       return redirect()->route('form.index')->with('success', 'Formulario creado correctamente');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateStatus($id)
    {
        $form = Form::find($id);
     
        switch ($form->status) {
            case 1:
                $newStatus = 2;
                $text  = "Inactivo";
                break;
            case 2:
                $newStatus = 1;
                $text = "Activado";
                break;
            default:
                $status = 1;
                $text = "Activado";
                break;
        }
        $form->update(["status"=> $newStatus]);
        return redirect()->route('form.index')->with('success','Formulario ' . $text . ' correctamente');
    }
}
