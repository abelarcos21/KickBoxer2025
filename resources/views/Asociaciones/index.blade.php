@extends('layouts.panel')

@section('content')
<div class="container">
    <h1>Asociaciones</h1>
    <a href="{{ route('asociacion.create') }}" class="btn btn-primary mb-3">Nueva Asociación</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Nombre</th>
                <th>N° Academias</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($asociaciones as $asociacion)
            <tr>
                <td>{{ $asociacion->id }}</td>
                <td>{{ $asociacion->nombre }}</td>
                <td>{{ $asociacion->academias->count() }}</td>
                <td>
                    <a href="{{ route('asociacion.show', $asociacion) }}" class="btn btn-info">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection