@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Academias</h1>
            <p>Lista de Academias</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">inicio</li>
            <li class="breadcrumb-item active"><a href="{{route('entrenador.index')}}">Academias</a></li>
        </ul>
    </div>
    <div class="tile-title-w-btn">
        <p><a class="btn btn-primary icon-btn" href={{route('academia.create')}}><i class="bi bi-plus-square me-2"></i>Agregar Nuevo	</a></p>
        
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                    <th>Nombre</th>
                    <th>Asociación</th>
                    <th>Correo</th>
                    <th>Calle</th>
                    <th>Estado</th>
                    <th>Colonia</th>
                    <th>Municipio</th>
                    <th>Codigo Postal</th>
                    <th>Telefono</th>
                    <th>Fecha Creación</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($academias as $academia)

                        <tr>
                            <td>{{$academia->nombre}}</td>
                            <td>{{ $academia->asociacion->nombre }}</td>
                            <td>{{$academia->correo}}</td>
                            <td>{{$academia->calle}}</td>
                            <td>{{$academia->estado}}</td>
                            <td>{{$academia->colonia}}</td>
                            <td>{{$academia->municipio}}</td>
                            <td>{{$academia->codigo_postal}}</td>
                            <td>{{$academia->telefono}}</td>
                            <td>{{ $academia->created_at->format('d/m/Y') }}</td>
                           
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

