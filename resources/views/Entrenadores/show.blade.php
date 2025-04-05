@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
            <h1><i class="bi bi-table"></i> Entrenadores</h1>
            <p>Ver Datos Entrenador</p>
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

                <a class="btn btn-primary" href="{{route('entrenador.index')}}"><i class="bi bi-reply fs-5"></i>Volver</a>

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
                            <div class="d-flex gap-2">
                                {{--<a class="btn btn-success btn-sm" href="{{route('entrenador.edit', $entrenador)}}"><i class="bi bi-eye fs-5"></i>Ver</a>--}}
                                <a class="btn btn-primary btn-sm" href="{{route('entrenador.edit', $entrenador)}}"><i class="bi bi-pencil-square fs-5"></i>Editar</a>
                                <form action="{{ route('entrenador.destroy', $entrenador)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-group">

                                        <button onclick="return confirm('¿estas seguro de elimnar el Entrenador?')" class="btn btn-danger btn-sm" type="submit" ><i class="bi bi-trash fs-5"></i>Eliminar</button>
                                    </div>
                                </form>
                            </div>

                        </td>
                    </tr>

                </tbody>
                </table>

                {{--<div class="d-flex justify-content-center">--}}
                    {{--AGREGAR FILTROS AUTOMATICAMENTE AL CAMBIAR DE PÁGINA Retener Filtros en la Paginación:--}}
                    {{-- $entrenadores->appends(request()->query())->links('pagination::bootstrap-5') --}}

                {{--</div>--}}
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
