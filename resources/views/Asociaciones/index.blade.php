@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Asociaciones</h1>
            <p>Lista de Asociaciones</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">inicio</li>
            <li class="breadcrumb-item active"><a href="{{route('entrenador.index')}}">Asociaciones</a></li>
        </ul>
    </div>
    <div class="tile-title-w-btn">
        <p><a class="btn btn-primary icon-btn" href={{route('asociacion.create')}}><i class="bi bi-plus-square me-2"></i>Agregar Nuevo	</a></p>
        
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="sampleTable">
                <thead>
                    <tr>
                    <th>#ID</th>
                    <th>Nombre</th>
                    <th>N° Academias</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($asociaciones as $asociacion)

                        <tr>
                            <td>{{ $asociacion->id }}</td>
                            <td>{{ $asociacion->nombre }}</td>
                            <td><span class="badge bg-primary rounded-pill">{{ $asociacion->academias->count() }}</span></td>
                            <td>
                                <a href="{{ route('asociacion.show', $asociacion) }}" class="btn btn-primary"><i class="bi bi-eye"></i>Ver Academias</a>
                            </td>
                           
                        </tr>
                        
                    @empty

                        <span>no hay datos que mostrar</span>
                        
                    @endforelse
                        
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('css')

    <!-- Page specific css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
    
@stop

@section('js')
   
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@stop
