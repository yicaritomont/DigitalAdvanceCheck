<?php

namespace App\Http\Controllers;

use App\Models\Dimension;
use App\Models\Factor;
use Illuminate\Http\Request;

class FactorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factor = Factor::all();
        return view("factor.index", compact("factor"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $factor = new Factor;
        return view("factor.create", compact("factor"));
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
            'name' => "required|unique:factor|max:255",
        ]);

        $factor = new Factor;
        $factor->name = $request->name;
        $factor->save();
        
        return redirect()->route('factor.index')->with('success', 'Factor creada correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factor = Factor::find($id);
        return view('Factor.edit',compact('dimension'));
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
            'name'=>'required|max:255|unique:factor,name,' .$id,  
        ], [
            'name.required' => "El nombre es requerido",
            'name.unique'   => "Ya existe un factor con este nombre"]);    
        $factor = Factor::find($id);
        $factor->name = $request->name;
        $factor->save();
        return redirect()->route('factor.index')->with('success', 'Factor actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateStatus($id)
    {
        $factor = Factor::find($id);
     
        switch ($factor->status) {
            case 1:
                $newStatus = 2;
                $text  = "Inactivado";
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
        $factor->update(["status"=> $newStatus]);
        return redirect()->route('factor.index')->with('success','Factor ' . $text . ' correctamente');
    }
}
