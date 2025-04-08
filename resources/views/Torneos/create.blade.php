@extends('layouts.panel')

@section('content')
<div class="container">
    <h2 class="mb-4">Crear Torneo</h2>

    <form action="{{ route('torneo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="poster" class="form-label">Poster</label>
            <input type="file" name="poster" class="form-control" value="{{ old('poster') }}">
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha del Torneo</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha') }}" required>
        </div>

        <div class="mb-3">
            <label for="fin_registro" class="form-label">Fin de Registro</label>
            <input type="datetime-local" name="fin_registro" class="form-control" value="{{ old('fin_registro') }}">
        </div>

        <div class="mb-3">
            <label for="nombre_torneo" class="form-label">Nombre del Torneo</label>
            <input type="text" name="nombre_torneo" class="form-control" value="{{ old('nombre_torneo') }}" required>
        </div>

        <div class="mb-3">
            <label for="estado_registro" class="form-label">Estado de Registro</label>
            <select name="estado_registro" class="form-select" required>
                <option value="ABIERTO" {{ old('estado_registro') == 'ABIERTO' ? 'selected' : '' }}>ABIERTO</option>
                <option value="CERRADO" {{ old('estado_registro') == 'CERRADO' ? 'selected' : '' }}>CERRADO</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('torneo.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
