@extends('layouts.panel')

@section('content')
    <div class="app-title">
        <div>
        <h1><i class="bi bi-ui-checks"></i> Solicitud De Afiliacion 2025</h1>
        <p>Federacion Nacional De Kick Boxing & Wako Mexico</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item">Inicio</li>
        <li class="breadcrumb-item"><a href="{{route('entrenador.index')}}">Solicitud</a></li>
        </ul>
    </div>

    <div class="container mt-5">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white text-center">
                <h4>Registro de Afiliación</h4>
            </div>

            <div class="card-body">
                <form method="POST" action="{{ route('afiliacion.store') }}" class="needs-validation" novalidate>
                    @csrf

                    <!-- Sección: Datos del Solicitante -->
                    <fieldset class="mb-5">
                        <legend class="h4 mb-4 border-bottom pb-2">Datos del Solicitante</legend>
                        
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label for="fecha_nacimiento" class="form-label">Fecha Solicitud</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" 
                                    value="{{ old('fecha_nacimiento') }}" required>
                            </div>

                            <!-- Asociaciones-->
                            <div class="col-md-6">
                                <label for="asociacion_id">Asociación:</label>
                                <select name="asociacion_id" class="form-control" required>
                                    @foreach($asociaciones as $asociacion)
                                    <option value="{{ $asociacion->id }}">{{ $asociacion->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label for="nombre_solicitante" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="nombre_solicitante" name="nombre_solicitante" 
                                    value="{{ old('nombre_solicitante') }}" required>
                                @error('nombre_solicitante')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="curp" class="form-label">Curp</label>
                                <input type="text" class="form-control" id="curp" name="curp" 
                                    pattern="[A-Z0-9]{18}" value="{{ old('curp') }}" required>
                                <div class="form-text">Ejemplo: FUGASG900HCCNLDO1</div>
                            </div>

                            <!-- Género y Nacionalidad -->
                            <div class="col-md-4">
                                <label for="genero" class="form-label">Género <span class="text-danger">*</span></label>
                                <select class="form-select @error('genero') is-invalid @enderror" 
                                        id="genero" 
                                        name="genero" 
                                        required>
                                    <option value="">Seleccione...</option>
                                    <option value="Masculino" {{ old('genero') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                    <option value="Femenino" {{ old('genero') == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                                    <option value="Otro" {{ old('genero') == 'Otro' ? 'selected' : '' }}>Otro</option>
                                </select>
                                @error('genero')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" 
                                    value="{{ old('fecha_nacimiento') }}" required>
                            </div>

                            <div class="col-md-4">
                                <label for="telefono_movil" class="form-label">Teléfono Móvil</label>
                                <input type="tel" class="form-control" id="telefono_movil" name="telefono_movil" 
                                    pattern="[0-9]{10}" value="{{ old('telefono_movil') }}" required>
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" 
                                    value="{{ old('email') }}" required>
                            </div>
                        </div>
                    </fieldset>

                    <!-- Sección: Datos de la Escuela -->
                    <fieldset class="mb-5">
                        <legend class="h4 mb-4 border-bottom pb-2">Datos de la Escuela/Academia</legend>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="nombre_escuela" class="form-label">Nombre de la Academia</label>
                                <input type="text" class="form-control" id="nombre_escuela" name="nombre_escuela" 
                                    value="{{ old('nombre_escuela') }}" required>
                            </div>

                            <div class="col-md-6">
                                <label for="calle" class="form-label">Calle</label>
                                <input type="text" class="form-control" id="calle" name="calle" 
                                    value="{{ old('calle') }}" required>
                            </div>

                            <div class="col-md-3">
                                <label for="numero_exterior" class="form-label">Número Exterior</label>
                                <input type="text" class="form-control" id="numero_exterior" name="numero_exterior" 
                                    value="{{ old('numero_exterior') }}" required>
                            </div>

                            <div class="col-md-3">
                                <label for="colonia" class="form-label">Colonia</label>
                                <input type="text" class="form-control" id="colonia" name="colonia" 
                                    value="{{ old('colonia') }}" required>
                            </div>

                            <div class="col-md-3">
                                <label for="municipio" class="form-label">Municipio</label>
                                <input type="text" class="form-control" id="municipio" name="municipio" 
                                    value="{{ old('municipio') }}" required>
                            </div>

                            <div class="col-md-3">
                                <label for="codigo_postal" class="form-label">Código Postal</label>
                                <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" 
                                    pattern="[0-9]{5}" value="{{ old('codigo_postal') }}" required>
                            </div>

                            <div class="col-md-6">
                                <label for="red_social" class="form-label">Enlace Red Social</label>
                                <input type="url" class="form-control" id="red_social" name="red_social" 
                                    value="{{ old('red_social') }}" placeholder="https://...">
                            </div>
                        </div>
                    </fieldset>

                    

                    <!-- Aviso de Privacidad -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="aviso_privacidad" name="aviso_privacidad" required>
                        <label class="form-check-label" for="aviso_privacidad">
                            Acepto el aviso de privacidad y los términos del acuerdo
                        </label>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="bi bi-send-check me-2"></i>Enviar Solicitud
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
// Validación de Bootstrap
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})()
</script>
@endpush



