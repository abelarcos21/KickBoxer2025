@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Competencias</h1>
            <p>Lista de Competencias Y Torneos</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">inicio</li>
            <li class="breadcrumb-item active"><a href="{{route('entrenador.index')}}">Competencias</a></li>
        </ul>
    </div>

    {{-- d-flex convierte el contenedor en un flexbox.

        justify-content-end alinea los elementos a la derecha.

        gap-2 agrega un espacio entre elementos.

        w-auto ajusta el ancho del input de archivo para que no se vea muy grande.

    --}}

    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Elementos alineados a la izquierda -->
            <div class="d-flex gap-2">

                <a class="btn btn-primary" href="{{route('torneo.create')}}"><i class="bi bi-plus-square me-2"></i>Agregar Nuevo</a>
                <a class="btn btn-success" href="{{route('entrenadores.export')}}"><i class="bi bi-download"></i>Exportar Excel</a>
                <a class="btn btn-secondary" href="{{route('entrenadorPDF')}}"><i class="bi bi-file-earmark-pdf"></i>Reporte PDF</a>
                <a class="btn btn-warning" href="{{route('entrenador.trashed')}}"><i class="bi bi-trash fs-5"></i>Ver Eliminados</a>
            </div>


            <!-- Elementos alineados a la derecha -->
            {{--<div class="d-flex gap-1">

            </div>--}}


        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="sampleTable">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Poster</th>
                    <th>Fecha</th>
                    <th>Fin Registro</th>
                    <th>Nombre del Torneo</th>
                    <th>Estado de Registro</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($torneos as $torneo)

                        <tr>
                            <td>{{$torneo->id}}</td>
                            <td>
                                @if($torneo->poster)
                                    <img loading="lazy" class="img-thumbnail" src="{{ asset('storage/' . $torneo->poster) }}" width="100px">
                                @else
                                    Sin foto
                                @endif
                            </td>

                            <td>{{$torneo->fecha->format('Y-m-d')}}</td>
                            <td>{{ $torneo->fin_registro ?? 'N/A' }}</td>
                            <td>{{$torneo->nombre_torneo}}</td>
                            <td>
                                <span class="badge bg-{{ $torneo->estado_registro == 'ABIERTO' ? 'primary' : 'danger' }}">
                                    {{ $torneo->estado_registro }}
                                </span>
                            </td>


                            <td>
                                <div class="d-flex gap-2">

                                    <a href="{{ route('torneo.show', $torneo) }}" class="btn btn-success btn-sm d-inline-flex align-items-center">
                                        <i class="bi bi-eye fs-5"></i>
                                        Ver
                                    </a>
                                    <a class="btn btn-primary btn-sm d-inline-flex align-items-center" href="{{route('torneo.edit', $torneo)}}">
                                        <i class="bi bi-pencil-square fs-5"></i>
                                        Editar
                                    </a>
                                    <form action="{{ route('torneo.destroy', $torneo)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="btn-group">
                                            <button onclick="return confirm('¿estas seguro de elimnar el Entrenador?')" class="btn btn-danger btn-sm d-inline-flex align-items-center" type="submit" ><i class="bi bi-trash fs-5"></i>Eliminar</button>
                                        </div>
                                    </form>
                                </div>

                            </td>
                        </tr>

                    @empty

                        <span><h5>No hay datos que mostrar</h5></span>

                    @endforelse

                </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{--AGREGAR FILTROS AUTOMATICAMENTE AL CAMBIAR DE PÁGINA Retener Filtros en la Paginación:--}}
                    {{-- $torneos->appends(request()->query())->links('pagination::bootstrap-5') --}}

                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('css')

    <!-- Page specific css-->
    {{--<link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">--}}

@stop

@section('js')

    <!-- Data table plugin-->
    {{--<script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $('#sampleTable').DataTable();
    </script>--}}


@stop
