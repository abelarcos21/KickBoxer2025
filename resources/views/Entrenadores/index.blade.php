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
    <div class="tile-title-w-btn">
        <p><a class="btn btn-primary icon-btn" href={{route('entrenador.create')}}><i class="bi bi-plus-square me-2"></i>Agregar Nuevo	</a></p>
        
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-striped" id="sampleTable">
                <thead>
                    <tr>
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
                            <td>{{$entrenador->curp}}</td>
                            <td>{{$entrenador->primer_nombre}}</td>
                            <td>{{$entrenador->segundo_nombre}}</td>
                            <td>{{$entrenador->apellido_paterno}}</td>
                            <td>{{$entrenador->apellido_materno}}</td>
                            <td>{{$entrenador->año_nacimiento}}</td>
                            <td>{{$entrenador->fecha_nacimiento}}</td>
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