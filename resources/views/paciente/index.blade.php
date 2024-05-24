@extends('layouts.vistapadre');

@section('contenidoPrincipal')
    <a href="paciente/create" class="btn btn-primary">CREAR</a>

    <table class="table table-primary table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">CI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Email</th>
                <th scope="col">Sexo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col">Direccion</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                <td>{{$paciente->ci}}</td>
                <td>{{$paciente->nombre}}</td>
                <td>{{$paciente->apellido}}</td>
                <td>{{$paciente->correo}}</td>
                <td>{{$paciente->sexo}}</td>
                <td>{{$paciente->telefono}}</td>
                <td>{{$paciente->fechanacimiento}}</td>
                <td>{{$paciente->direccion}}</td>
                <td>
                    <a href="/articulos/{{$paciente->ci}}/editar" class="btn btn-info">Editar</a>
                    <button class="btn btn-danger">Borrar</button>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
@endsection
