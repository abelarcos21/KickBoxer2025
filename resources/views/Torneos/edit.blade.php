@extends('layouts.panel')

@section('content')
<div class="container">
    <h2 class="mb-4">Editar Torneo</h2>

    <form action="{{ route('torneo.update', $torneo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="poster" class="form-label">URL del Poster</label>
            <input type="text" name="poster" class="form-control" value="{{ old('poster', $torneo->poster) }}">
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha del Torneo</label>
            <input type="date" name="fecha" class="form-control" value="{{ old('fecha', $torneo->fecha) }}" required>
        </div>

        <div class="mb-3">
            <label for="fin_registro" class="form-label">Fin de Registro</label>
            <input type="datetime-local" name="fin_registro" class="form-control" value="{{ old('fin_registro', \Carbon\Carbon::parse($torneo->fin_registro)->format('Y-m-d\TH:i')) }}">
        </div>

        <div class="mb-3">
            <label for="nombre_torneo" class="form-label">Nombre del Torneo</label>
            <input type="text" name="nombre_torneo" class="form-control" value="{{ old('nombre_torneo', $torneo->nombre_torneo) }}" required>
        </div>

        <div class="mb-3">
            <label for="estado_registro" class="form-label">Estado de Registro</label>
            <select name="estado_registro" class="form-select" required>
                <option value="ABIERTO" {{ $torneo->estado_registro == 'ABIERTO' ? 'selected' : '' }}>ABIERTO</option>
                <option value="CERRADO" {{ $torneo->estado_registro == 'CERRADO' ? 'selected' : '' }}>CERRADO</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('torneo.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
