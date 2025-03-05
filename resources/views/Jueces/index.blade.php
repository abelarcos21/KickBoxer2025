@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
        <h1><i class="bi bi-table"></i> Jueces</h1>
        <p>Lista de Jueces</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item">inicio</li>
        <li class="breadcrumb-item active"><a href="{{route('entrenador.index')}}">Jueces</a></li>
        </ul>
    </div>
    <div class="tile-title-w-btn">
        <p><a class="btn btn-primary icon-btn" href={{route('juez.create')}}><i class="bi bi-plus-square me-2"></i>Agregar Nuevo	</a></p>
        
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
                    <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($jueces as $juez)

                        <tr>
                            <td>{{$juez->curp}}</td>
                            <td>{{$juez->primer_nombre}}</td>
                            <td>{{$juez->segundo_nombre}}</td>
                            <td>{{$juez->apellido_paterno}}</td>
                            <td>{{$juez->apellido_materno}}</td>
                            <td>{{$juez->año_nacimiento}}</td>
                            <td>{{$juez->fecha_nacimiento}}</td>
                            <td>{{$juez->edad}}</td>
                            <td>{{$juez->genero}}</td>
                            <td>{{$juez->nacionalidad}}</td>
                            <td>{{$juez->domicilio}}</td>
                            <td>{{$juez->colonia}}</td>
                            <td>{{$juez->municipio}}</td>
                            <td>{{$juez->codigo_postal}}</td>
                            <td>{{$juez->estado}}</td>
                            <td>{{$juez->correo}}</td>
                            <td>{{$juez->telefono}}</td>
                            <td>{{$juez->escolaridad}}</td>
                            <td>
                                <form action="{{ route('juez.destroy', $juez)}}" method="POST">
                                    @csrf 
                                    @method('DELETE')
                                    <div class="btn-group">
                                        <a class="btn btn-primary btn-sm" href="{{route('juez.edit', $juez)}}"><i class="bi bi-pencil-square fs-5"></i>Editar</a>
                                        <button onclick="return confirm('¿estas seguro de elimnar el Juez?')" class="btn btn-danger btn-sm" type="submit" ><i class="bi bi-trash fs-5"></i>Eliminar</button>
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