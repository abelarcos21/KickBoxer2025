@extends('layouts.panel')

@section('content')

<div class="app-title">
    <div>
      <h1><i class="bi bi-ui-checks"></i> Entrenadores</h1>
      <p>Lista Entrenadores</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
      <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
      <li class="breadcrumb-item">Inicio</li>
      <li class="breadcrumb-item"><a href="{{route('entrenador.index')}}">Entrenadores</a></li>
    </ul>
  </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">Registro de Entrenador</h4>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('entrenador.store') }}" enctype="multipart/form-data">
                            @csrf

                            <!-- Sección 1: Información Personal -->
                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">Información Personal</h5>

                                <div class="row g-3">
                                    <!-- CURP -->
                                    <div class="col-md-6">
                                        <label for="curp" class="form-label">CURP <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('curp') is-invalid @enderror"
                                            id="curp"
                                            name="curp"
                                            value="{{ old('curp') }}"
                                            maxlength="18"
                                            required>
                                        @error('curp')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Imagen -->
                                    <div class="col-md-6">
                                        <label for="imagen" class="form-label">Imagen <span class="text-danger">*</span></label>
                                        <input type="file"
                                            class="form-control @error('imagen') is-invalid @enderror"
                                            id="imagen"
                                            name="imagen"
                                            value="{{ old('imagen') }}"
                                            required>
                                        @error('imagen')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Fecha de Nacimiento -->
                                    <div class="col-md-6">
                                        <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento <span class="text-danger">*</span></label>
                                        <input type="date"
                                            class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                                            id="fecha_nacimiento"
                                            name="fecha_nacimiento"
                                            value="{{ old('fecha_nacimiento') }}"
                                            required>
                                        @error('fecha_nacimiento')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Nombres -->
                                    <div class="col-md-4">
                                        <label for="primer_nombre" class="form-label">Primer Nombre <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('primer_nombre') is-invalid @enderror"
                                            id="primer_nombre"
                                            name="primer_nombre"
                                            value="{{ old('primer_nombre') }}"
                                            required>
                                        @error('primer_nombre')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="segundo_nombre" class="form-label">Segundo Nombre</label>
                                        <input type="text"
                                            class="form-control @error('segundo_nombre') is-invalid @enderror"
                                            id="segundo_nombre"
                                            name="segundo_nombre"
                                            value="{{ old('segundo_nombre') }}">
                                        @error('segundo_nombre')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Apellidos -->
                                    <div class="col-md-4">
                                        <label for="apellido_paterno" class="form-label">Apellido Paterno <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('apellido_paterno') is-invalid @enderror"
                                            id="apellido_paterno"
                                            name="apellido_paterno"
                                            value="{{ old('apellido_paterno') }}"
                                            required>
                                        @error('apellido_paterno')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="apellido_materno" class="form-label">Apellido Materno <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('apellido_materno') is-invalid @enderror"
                                            id="apellido_materno"
                                            name="apellido_materno"
                                            value="{{ old('apellido_materno') }}"
                                            required>
                                        @error('apellido_materno')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
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
                                        <label for="nacionalidad" class="form-label">Nacionalidad <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('nacionalidad') is-invalid @enderror"
                                            id="nacionalidad"
                                            name="nacionalidad"
                                            value="{{ old('nacionalidad') }}"
                                            required>
                                        @error('nacionalidad')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Sección 2: Domicilio -->
                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">Domicilio</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="domicilio" class="form-label">Domicilio <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('domicilio') is-invalid @enderror"
                                            id="domicilio"
                                            name="domicilio"
                                            value="{{ old('domicilio') }}"
                                            required>
                                        @error('domicilio')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="colonia" class="form-label">Colonia <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('colonia') is-invalid @enderror"
                                            id="colonia"
                                            name="colonia"
                                            value="{{ old('colonia') }}"
                                            required>
                                        @error('colonia')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="municipio" class="form-label">Municipio <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('municipio') is-invalid @enderror"
                                            id="municipio"
                                            name="municipio"
                                            value="{{ old('municipio') }}"
                                            required>
                                        @error('municipio')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="codigo_postal" class="form-label">Código Postal <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('codigo_postal') is-invalid @enderror"
                                            id="codigo_postal"
                                            name="codigo_postal"
                                            value="{{ old('codigo_postal') }}"
                                            maxlength="5"
                                            required>
                                        @error('codigo_postal')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-4">
                                        <label for="estado" class="form-label">Estado <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('estado') is-invalid @enderror"
                                            id="estado"
                                            name="estado"
                                            value="{{ old('estado') }}"
                                            required>
                                        @error('estado')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <!-- Sección 3: Contacto y Educación -->
                            <div class="mb-4">
                                <h5 class="border-bottom pb-2">Contacto y Educación</h5>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="correo" class="form-label">Correo Electrónico <span class="text-danger">*</span></label>
                                        <input type="email"
                                            class="form-control @error('correo') is-invalid @enderror"
                                            id="correo"
                                            name="correo"
                                            value="{{ old('correo') }}"
                                            required>
                                        @error('correo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="telefono" class="form-label">Teléfono <span class="text-danger">*</span></label>
                                        <input type="tel"
                                            class="form-control @error('telefono') is-invalid @enderror"
                                            id="telefono"
                                            name="telefono"
                                            value="{{ old('telefono') }}"
                                            maxlength="10"
                                            required>
                                        @error('telefono')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="escolaridad" class="form-label">Escolaridad <span class="text-danger">*</span></label>
                                        <input type="text"
                                            class="form-control @error('escolaridad') is-invalid @enderror"
                                            id="escolaridad"
                                            name="escolaridad"
                                            value="{{ old('escolaridad') }}"
                                            required>
                                        @error('escolaridad')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="grado_kickboxing" class="form-label">Grado de Kickboxing</label>
                                        <input type="text"
                                            class="form-control @error('grado_kickboxing') is-invalid @enderror"
                                            id="grado_kickboxing"
                                            name="grado_kickboxing"
                                            value="{{ old('grado_kickboxing') }}">
                                        @error('grado_kickboxing')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('entrenador.index') }}" class="btn btn-secondary"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                                <button type="submit" class="btn btn-primary"><i class="bi bi-check-circle-fill me-2"></i>Guardar Entrenador</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

