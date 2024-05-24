<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view("paciente.index")->with("pacientes", $pacientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("paciente.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pacientes = new Paciente();

        $pacientes->ci = $request->get('ci');
        $pacientes->nombre = $request->get('nombre');
        $pacientes->apellido = $request->get('apellido');
        $pacientes->email = $request->get('email');
        $pacientes->sexo = $request->get('sexo');
        $pacientes->telefono = $request->get('telefono');
        $pacientes->fechaNacimiento = $request->get('fechaNacimiento');
        $pacientes->direccion = $request->get('direccion');

        $pacientes->save();

        return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}