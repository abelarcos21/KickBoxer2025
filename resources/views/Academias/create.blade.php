{{--@extends('layouts.panel')

@section('content')

    <div class="app-title">
        <div>
        <h1><i class="bi bi-ui-checks"></i> Registrar Nueva Academia</h1>
        <p>Academias</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="{{route('academia.index')}}">Academias</a></li>
        </ul>
    </div>

    <div class="container">
        
        
        <form action="{{ route('academia.store') }}" method="POST">
            @csrf

            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Información Básica
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nombre" class="form-label">Nombre de la Academia <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required maxlength="255">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="correo" class="form-label">Correo Electrónico <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="correo" name="correo" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Dirección
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-6 mb-3">
                            <label for="calle" class="form-label">Calle <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="calle" name="calle" required>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="numero_exterior" class="form-label">Número Exterior <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="numero_exterior" name="numero_exterior" required>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="numero_interior" class="form-label">Número Interior</label>
                            <input type="text" class="form-control" id="numero_interior" name="numero_interior">
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-2 mb-3">
                            <label for="codigo_postal" class="form-label">Código Postal <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" 
                                pattern="[0-9]{5}" title="5 dígitos" required maxlength="5">
                        </div>
                        
                        <div class="col-md-4 mb-3">
                            <label for="estado" class="form-label">Estado <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="estado" name="estado" required>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="municipio" class="form-label">Municipio <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="municipio" name="municipio" required>
                        </div>
                        
                        <div class="col-md-3 mb-3">
                            <label for="colonia" class="form-label">Colonia <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="colonia" name="colonia" required>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    Contacto y Enlaces
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="telefono" class="form-label">Teléfono <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="telefono" name="telefono" 
                                pattern="[0-9]{10}" title="10 dígitos" required maxlength="10">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="link_web_red_social" class="form-label">Sitio Web/Red Social</label>
                            <input type="url" class="form-control" id="link_web_red_social" name="link_web_red_social">
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="link_google_maps" class="form-label">Enlace Google Maps</label>
                            <input type="url" class="form-control" id="link_google_maps" name="link_google_maps">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('academia.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Guardar Academia</button>
            </div>
        </form>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const cpInput = document.getElementById('codigo_postal');
                
                cpInput.addEventListener('input', function(e) {
                    const cp = e.target.value.replace(/\D/g, '');
                    e.target.value = cp;
                    
                    if (cp.length === 5) {
                        fetch(`/api/codigos-postales/${cp}`)
                            .then(response => response.json())
                            .then(data => {
                                if (data.data.length > 0) {
                                    document.getElementById('estado').value = data.data[0].estado;
                                    document.getElementById('municipio').value = data.data[0].municipio;
                                    document.getElementById('colonia').value = data.data[0].colonia;
                                }
                            });
                    }
                });
            });
        </script>
    @endpush

@endsection--}}


@extends('layouts.panel')

@section('content')
<div class="container">
    <h1>Crear Nueva Academia</h1>
    
    <form action="{{ route('academia.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="association_id">Asociación:</label>
            <select name="association_id" class="form-control" required>
                @foreach($asociaciones as $asociacion)
                <option value="{{ $asociacion->id }}">{{ $asociacion->nombre }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Guardar</button>
    </form>
</div>
@endsection
 
