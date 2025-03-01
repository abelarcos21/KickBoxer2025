@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Deportistas</h1>
            <p>Lista de Atletas</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">inicio</li>
            <li class="breadcrumb-item active"><a href="{{route('afiliacion.index')}}">Deportistas</a></li>
        </ul>
    </div>
    <div class="tile-title-w-btn">
        <p><a class="btn btn-primary icon-btn" href={{route('afiliacion.create')}}><i class="bi bi-plus-square me-2"></i>Nueva Afiliacion	</a></p>
        
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="sampleTable">
                <thead>
                    <tr>
                    <th>Folio</th>
                    <th>Nombre Solicitante</th>
                    <th>Curp</th>
                    <th>Sexo</th>
                    <th>Fecha Nacimiento</th>
                    <th>Telefono Movil</th>
                    <th>Correo</th>
                    <th>Nombre Academia</th>
                    <th>Calle</th>
                    <th>N° Exterior</th>
                    <th>Colonia</th>
                    <th>Municipio</th>
                    <th>Codigo Postal</th>
                    <th>Red Social</th>
                   
                    </tr>
                </thead>
                <tbody>

                    @forelse ($afiliaciones as $afiliacion)

                        <tr>
                            <td>{{$afiliacion->folio}}</td>
                            <td>{{$afiliacion->nombre_solicitante}}</td>
                            <td>{{$afiliacion->curp}}</td>
                            <td>{{$afiliacion->sexo}}</td>
                            <td>{{$afiliacion->fecha_nacimiento}}</td>
                            <td>{{$afiliacion->telefono_movil}}</td>
                            <td>{{$afiliacion->email}}</td>
                            <td>{{$afiliacion->nombre_escuela}}</td>
                            <td>{{$afiliacion->calle}}</td>
                            <td>{{$afiliacion->numero_exterior}}</td>
                            <td>{{$afiliacion->colonia}}</td>
                            <td>{{$afiliacion->municipio}}</td>
                            <td>{{$afiliacion->codigo_postal}}</td>
                            <td>{{$afiliacion->red_social}}</td>
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