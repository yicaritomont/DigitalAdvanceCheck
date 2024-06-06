<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Factor;
use Illuminate\Http\Request;

class DimensionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dimension = Dimension::all();
        return view("dimension.index", compact("dimension"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dimension = new Dimension;
        $factor = Factor::pluck('name', 'id');
        return view("dimension.create", compact("dimension", "factor"));
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
            'name' => "required|unique:dimension|max:255",
            'description' => "required|max:255",
            'min_range' => "required"       ,
            'max_range' => "required",
        ]);

        $dimension = new Dimension;
        $dimension->name = $request->name;
        $dimension->description = $request->description;
        $dimension->min_range = $request->min_range;
        $dimension->max_range = $request->max_range;       
        $dimension->save();
        
        return redirect()->route('dimension.index')->with('success', 'Dimensión creada correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dimension = Dimension::find($id);
        $factor = Factor::pluck('name', 'id');
        return view('dimension.edit',compact('dimension', 'factor'));
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
            'name'=>'required|max:255|unique:dimension,name,' .$id,     
            'description' => "required|max:255",
            'min_range' => "required"       ,
            'max_range' => "required",
        ], [
            'name.required' => "El nombre es requerido",
            'name.unique'   => "Ya existe una dimensión con este nombre"]);    
        $dimension = Dimension::find($id);
        $dimension->name = $request->name;
        $dimension->description = $request->description;
        $dimension->min_range = $request->min_range;
        $dimension->max_range = $request->max_range;        
        $dimension->save();
        return redirect()->route('dimension.index')->with('success', 'Dimensión actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateStatus($id)
    {
        $dimension = Dimension::find($id);
     
        switch ($dimension->status) {
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
        $dimension->update(["status"=> $newStatus]);
        return redirect()->route('dimension.index')->with('success','Dimensión ' . $text . ' correctamente');
    }
}
