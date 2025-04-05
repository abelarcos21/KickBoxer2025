@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Entrenadores</h1>
            <p>Lista de Entrenadores</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
            <li class="breadcrumb-item">inicio</li>
            <li class="breadcrumb-item active"><a href="{{route('entrenador.index')}}">Entrenadores</a></li>
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

                <a class="btn btn-primary" href="{{route('entrenador.create')}}"><i class="bi bi-plus-square me-2"></i>Agregar Nuevo</a>
                <a class="btn btn-success" href="{{route('entrenadores.export')}}"><i class="bi bi-download"></i>Exportar Excel</a>
                <a class="btn btn-secondary" href="{{route('entrenadorPDF')}}"><i class="bi bi-file-earmark-pdf"></i>Reporte PDF</a>
                <a class="btn btn-warning" href="{{route('entrenador.trashed')}}"><i class="bi bi-trash fs-5"></i>Ver Eliminados</a>
            </div>


            <!-- Elementos alineados a la derecha -->
            <div class="d-flex gap-1">
                <form action="{{ route('entrenadores.import') }}" method="POST" enctype="multipart/form-data" class="d-flex gap-2 align-items-center">
                    @csrf

                    <input type="file" name="file" class="form-control w-auto">
                    <button type="submit" class="btn btn-success"><i class="bi bi-file-earmark-text"></i>Importar Datos CSV</button>
                </form>
            </div>


        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
                <form method="GET" action="{{ route('entrenador.index') }}" class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <div class="d-flex flex-wrap gap-2 w-100">
                                <div class="flex-fill">
                                    <label>Curp:</label>
                                    <input type="text" name="curp" class="form-control" value="{{ request('curp') }}">
                                </div>
                                <div class="flex-fill">
                                    <label>Apellido Paterno:</label>
                                    <input type="text" name="apellido_paterno" class="form-control" value="{{ request('apellido_paterno') }}">
                                </div>
                                <div class="flex-fill">
                                    <label>Año de Nacimiento:</label>
                                    <input type="number" name="año_nacimiento" class="form-control" value="{{ request('año_nacimiento') }}">
                                </div>
                                <div class="flex-fill">
                                    <label>Género:</label>
                                    <select name="genero" class="form-select">
                                        <option value="">Todos</option>
                                        <option value="Masculino" {{ request('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                        <option value="Femenino" {{ request('genero') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                    </select>
                                </div>
                                <div class="flex-fill">
                                    <label>Grado Kickboxing:</label>
                                    <input type="text" name="grado_kickboxing" class="form-control" value="{{ request('grado_kickboxing') }}">
                                </div>
                               {{--<div class="d-flex align-items-end">
                                    <button type="submit" class="btn btn-secondary"><i class="bi bi-funnel me-1 fs-5"></i>Filtrar</button>

                                </div>--}}
                                <div class="d-flex align-items-end gap-2">
                                    <button type="submit" class="btn btn-secondary"><i class="bi bi-funnel me-1 fs-5"></i>Filtrar</button>
                                    <a href="{{route('entrenador.index')}}" class="btn btn-secondary"><i class="bi bi-arrow-clockwise fs-5"></i>Limpiar</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

                <table class="table table-hover table-bordered table-striped" id="sampleTable">
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Curp</th>
                    <th>Primer Nombre</th>
                    <th>Segundo Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Año Nacimiento</th>
                    <th>Fecha Nacimiento</th>
                    <th>Edad</th>
                    <th>Genero</th>
                    <th>Nacionalidad</th>
                    <th>Domicilio</th>
                    <th>Colonia</th>
                    <th>Municipio</th>
                    <th>Codigo Postal</th>
                    <th>Estado</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Escolaridad</th>
                    <th>Grado Kickboxing</th>
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($entrenadores as $entrenador)

                        <tr>
                            <td>{{$entrenador->id}}</td>
                            <td>{{$entrenador->curp}}</td>
                            <td>{{$entrenador->primer_nombre}}</td>
                            <td>{{$entrenador->segundo_nombre}}</td>
                            <td>{{$entrenador->apellido_paterno}}</td>
                            <td>{{$entrenador->apellido_materno}}</td>
                            <td>{{$entrenador->año_nacimiento}}</td>
                            <td>{{$entrenador->fecha_nacimiento->format('Y-m-d')}}</td>
                            <td>{{$entrenador->edad}}</td>
                            <td>{{$entrenador->genero}}</td>
                            <td>{{$entrenador->nacionalidad}}</td>
                            <td>{{$entrenador->domicilio}}</td>
                            <td>{{$entrenador->colonia}}</td>
                            <td>{{$entrenador->municipio}}</td>
                            <td>{{$entrenador->codigo_postal}}</td>
                            <td>{{$entrenador->estado}}</td>
                            <td>{{$entrenador->correo}}</td>
                            <td>{{$entrenador->telefono}}</td>
                            <td>{{$entrenador->escolaridad}}</td>
                            <td>{{$entrenador->grado_kickboxing}}</td>
                            <td >
                                <form action="{{ route('entrenador.destroy', $entrenador)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="{{route('entrenador.edit', $entrenador)}}"><i class="bi bi-pencil-square fs-5"></i>Editar</a>
                                        <button onclick="return confirm('¿estas seguro de elimnar el Entrenador?')" class="btn btn-danger btn-sm" type="submit" ><i class="bi bi-trash fs-5"></i>Eliminar</button>
                                    </div>
                                </form>


                            </td>
                        </tr>

                    @empty

                        <span><h5>No hay datos que mostrar</h5></span>

                    @endforelse

                </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    {{--AGREGAR FILTROS AUTOMATICAMENTE AL CAMBIAR DE PÁGINA Retener Filtros en la Paginación:--}}
                    {{ $entrenadores->appends(request()->query())->links('pagination::bootstrap-5') }}

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
