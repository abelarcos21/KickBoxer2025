@extends('layouts.panel')

@section('content')
<div class="container">
    <h1>Crear Nueva Asociación</h1>
    
    <form action="{{ route('asociacion.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
</div>
@endsection