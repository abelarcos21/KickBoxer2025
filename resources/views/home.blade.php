@extends('layouts.panel')

@section('content')
  <div class="app-title">
    <div>
      <h1><i class="bi bi-speedometer"></i> Dashboard</h1>
      <p>Asociacion Estatal de Kickboxing Campeche 2025</p>
    </div>
    
    <ul class="app-breadcrumb breadcrumb">
      <img 
      src="{{ asset('images/1000865765.png') }}" 
      alt="Logo" 
      class="img-fluid" width="135">
      <img 
      src="{{ asset('images/logofenakibmexico2025.webp') }}" 
      alt="Logo" 
      class="img-fluid" width="135">
      <img 
      src="{{ asset('images/WAKO_mexico.webp') }}" 
      alt="Logo" 
      class="img-fluid" width="135">
      
    </ul>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
        <div class="info">
          <h4>Deportistas</h4>
          <p><b>no definido</b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon bi bi-heart fs-1"></i>
        <div class="info">
          <h4>Jueces</h4>
          <p><b>{{ $jueces->count()}}</b></p>
        </div>
      </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon"><i class="icon bi bi-star fs-1"></i>
        <div class="info">
          <h4>Entrenadores</h4>
          <p><b>{{ $entrenadores->count()}}</b></p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
        <div class="info">
          <h4>Academias</h4>
          <p><b>{{ $academias->count()}}</b></p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
        <div class="info">
          <h4>Asociaciones</h4>
          <p><b>{{ $asociaciones->count()}}</b></p>
        </div>
      </div>
    </div>


  </div>
  
@endsection
