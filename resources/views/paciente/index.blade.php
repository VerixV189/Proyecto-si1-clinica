@extends('adminlte::page')

@section('title', 'Pacientes')

@section('content_header')
    <h1>Lista de Pacientes</h1>
@stop

@section('content')

<a href="pacientes/create" class="btn btn-primary mb-3">REGISTRAR PACIENTE</a>

<table id="pacientes" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
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
                <form action="{{route('pacientes.destroy',$paciente->ci)}}" method="POST">
                    <a href="/pacientes/{{$paciente->ci}}/editar" class="btn btn-info">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>                    
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script>
    $(document).ready(function(){
        $('pacientes').DataTable({
            "lengthMenu":[[1, 10, 50, -1], [5, 10, 50, "All"]]
        });
    });
</script>
@stop