@extends('adminlte::page')

@section('title', 'Editar-Recepcionista')

@section('content_header')
    <h1>EDITAR REGISTROS DE RECEPCIONISTA</h1>
@stop

@section('content')
    <form action="/recepcionistas/{{ $recepcionista->ci}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">CI</label>
            <input id="ci" name="ci" type="number" class="form-control" placeholder="C.I.5465456"
                value="{{ $recepcionista->ci }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Juan"
                value="{{ $recepcionista->nombre }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Zamora"
                value="{{ $recepcionista->apellido }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="ejemplo@gmail.com"
                value="{{ $recepcionista->correo }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <select id="sexo" name="sexo" class="form-select" value="{{ $recepcionista->sexo }}">
                <option selected>Masculino</option>
                <option>Femenino</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" value="{{ $recepcionista->telefono }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Turno</label>
            <input type="text" class="form-control" id="turno" name="turno"
                value="{{ $recepcionista->turno }}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sueldo</label>
            <input type="text" class="form-control" id="sueldo" name="sueldo" placeholder="$2000"
                value="{{ $recepcionista->sueldo }}">
        </div>
        <a href="/recepcionistas" class="btn btn-secundary"> Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
