<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Roles::all();
        return view("roles.index", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = new Roles;
        return view("roles.create", compact("roles"));
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
            'name' => "required|unique:roles|max:255"
        ]);
        Roles::create($validateData);
        
        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Roles::find($id);
        return view('roles.edit',compact('roles'));
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
            'name'=>'required|max:255|unique:roles,name,' .$id,            
        ], [
            'name.required' => "El nombre es requerido",
            'name.unique'   => "Ya existe un rol con este nombre"]);    
        $roles = Roles::find($id)->update($request->all());
        return redirect()->route('roles.index')->with('success', 'Rol actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function rolUpdateStatus($id)
    {
        $roles = Roles::find($id);
     
        switch ($roles->status) {
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
        $roles->update(["status"=> $newStatus]);
        return redirect()->route('roles.index')->with('success','Rol ' . $text . ' correctamente');
    }
}
