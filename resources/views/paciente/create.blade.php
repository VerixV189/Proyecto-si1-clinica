@extends('layouts.vistapadre')

@section('contenidoPrincipal')
    <h2>CREAR REGISTROS DE PACIENTES</h2>

    <form action="/pacientes" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">CI</label>
            <input id="ci" name="ci" type="number" class="form-control" placeholder="C.I.5465456" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Juan" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellido</label>
            <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Zamora" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" placeholder="ejemplo@gmail.com" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <select id="sexo" name="sexo" class="form-select" tabindex="5">
                <option selected>Masculino</option>
                <option>Femenino</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" tabindex="6">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" tabindex="7">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="1234 Marical scz" tabindex="8">
        </div>
        <a href="/pacientes" class="btn btn-secundary"> Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
