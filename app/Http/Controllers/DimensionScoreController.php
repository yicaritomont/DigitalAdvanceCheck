<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DimensionPoint;
use App\Models\Dimension;
use App\Models\MadurityLevel;



class DimensionScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dimensionScore = DimensionPoint::all();
        return view("dimensionScore.index", compact("dimensionScore"));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dimensionScore = new DimensionPoint;
        $dimension = Dimension::pluck('name', 'id');
        $nivel = MadurityLevel::pluck('name', 'id');
        return view("dimensionScore.create", compact("dimension", "nivel", "dimensionScore"));
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
            'min_score' => "required", 
            'max_score' => "required", 
            'recomendations' => "required",
            'remark' => "required",
            'best_practice' => "required",
            'congrats' => "required",
            'conclusions' => "required",
            'madurity_level_id' => "required",
        ]);

        $dimensionScore = new DimensionPoint;
        $dimensionScore->min_score = (int)$request->min_score;
        $dimensionScore->max_score = (int)$request->max_score;
        $dimensionScore->recomendations = $request->recomendations;
        $dimensionScore->remark = $request->remark;
        $dimensionScore->best_practice = $request-> best_practice;
        $dimensionScore->congrats = $request->congrats;
        $dimensionScore->conclusions = $request->conclusions;
        $dimensionScore->madurity_level_id = $request->madurity_level_id;     
        $dimensionScore->save();
        
        return redirect()->route('dimensionScore.index')->with('success', 'Puntaje relacionado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dimensionScore = DimensionPoint::find($id);
        $dimension = Dimension::pluck('name', 'id');
        $nivel = MadurityLevel::pluck('name', 'id');
        return view('dimensionScore.edit',compact("dimension", "nivel", "dimensionScore"));
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([        
            'min_score' => "required", 
            'max_score' => "required", 
            'recomendations' => "required",
            'remark' => "required",
            'best_practice' => "required",
            'congrats' => "required",
            'conclusions' => "required",
            'madurity_level_id' => "required",
        ]);

        $dimensionScore = DimensionPoint::find($id);
        $dimensionScore->min_score = (int)$request->min_score;
        $dimensionScore->max_score = (int)$request->max_score;
        $dimensionScore->recomendations = $request->recomendations;
        $dimensionScore->remark = $request->remark;
        $dimensionScore->best_practice = $request-> best_practice;
        $dimensionScore->congrats = $request->congrats;
        $dimensionScore->conclusions = $request->conclusions;
        $dimensionScore->madurity_level_id = $request->madurity_level_id;    
        $dimensionScore->save();
        
        return redirect()->route('dimensionScore.index')->with('success', 'Puntaje Actualizado correctamente');
    }
}
