<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* return Usuario::all(); */

        
        $alumno =new Alumno();
        return $alumno->all(); 
       
    }

    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $alumno = new Alumno();
        $alumno->nombres = $request->nombres;
        $alumno->apellidos = $request->apellidos;
        $alumno->correos = $request->correo;
        $alumno->fechas = $request->fecha;
        $alumno->save();
        return "Registro Guardado Correctamente";
    }
    
    public function show(string $id)
    {
        return Alumno::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alumno $alumno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->nombres = $request->nombres;
        $alumno->apellidos = $request->apellidos;
        $alumno->correos = $request->correo;
        $alumno->fechas = $request->fecha;
        $alumno->save();
        return $alumno;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();
        return "Registro Eliminado Correctamente";
    }
}
