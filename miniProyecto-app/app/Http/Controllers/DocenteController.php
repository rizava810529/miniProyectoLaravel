<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /* return Usuario::all(); */

        
        $docente =new Docente();
        return $docente->all(); 
       
    }

    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->correos = $request->correo;
        $docente->fechas = $request->fecha;
        $docente->save();
        return "Registro Guardado Correctamente";
    }
    
    public function show(string $id)
    {
        return Docente::where('id',$id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docente $docente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $docente = Docente::find($id);
        $docente->nombres = $request->nombres;
        $docente->apellidos = $request->apellidos;
        $docente->correos = $request->correo;
        $docente->fechas = $request->fecha;
        $docente->save();
        return $docente;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $docente = Docente::find($id);
        $docente->delete();
        return "Registro Eliminado Correctamente";
    }
}
