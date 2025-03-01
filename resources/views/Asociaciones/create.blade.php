@extends('layouts.panel')

@section('content')

<div class="app-title">
    <div>
      <h1><i class="bi bi-ui-checks"></i> Registrar Nueva Asociacion</h1>
      <p>Crear Nuevo</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item">Inicio</li>
      <li class="breadcrumb-item"><a href="{{route('entrenador.index')}}">Asociaciones</a></li>
    </ul>
  </div>

  <div class="col-md-10">
    <div class="tile">
      <h3 class="tile-title">Nueva Asociacion</h3>
      <div class="tile-body">
        <form class="row" action="{{route('asociacion.store')}}" method="POST">
            @csrf
          <div class="mb-3 col-md-6">
            <label class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre" placeholder="Ingrese el Nombre" required>
          </div>
          
          <div class="mb-3 col-md-4 align-self-end">
            <a href="{{ route('asociacion.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
            <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @endsection
    