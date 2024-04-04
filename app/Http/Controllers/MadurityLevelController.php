<?php

namespace App\Http\Controllers;

use App\Models\MadurityLevel;
use Illuminate\Http\Request;

class MadurityLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $madurityLevel = MadurityLevel::all();
        return view("madurityLevel.index", compact("madurityLevel"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $madurityLevel = new MadurityLevel;
        return view("madurityLevel.create", compact("madurityLevel"));
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
            'name' => "required|unique:madurity_level|max:255",
            'description' => "required|max:255"
        ]);

        $madurityLevel = new MadurityLevel;
        $madurityLevel->name = $request->name;
        $madurityLevel->description = $request->description;
        $madurityLevel->save();
        
        return redirect()->route('madurityLevel.index')->with('success', 'Nivel de madurez creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $madurityLevel = MadurityLevel::find($id);
        return view('madurityLevel.edit',compact('madurityLevel'));
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
            'name'=>'required|max:255|unique:madurity_level,name,' .$id,     
            'description' => "required|max:255"       
        ], [
            'name.required' => "El nombre es requerido",
            'name.unique'   => "Ya existe un nivel con este nombre"]);    
        $madurityLevel = MadurityLevel::find($id);
        $madurityLevel->name = $request->name;
        $madurityLevel->description = $request->description;
        $madurityLevel->save();
        return redirect()->route('madurityLevel.index')->with('success', 'Nivel de madurez actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function UpdateStatus($id)
    {
        $madurityLevel = MadurityLevel::find($id);
     
        switch ($madurityLevel->status) {
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
        $madurityLevel->update(["status"=> $newStatus]);
        return redirect()->route('madurityLevel.index')->with('success','Nivel de madurez ' . $text . ' correctamente');
    }
}
