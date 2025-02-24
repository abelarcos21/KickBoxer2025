@extends('layouts.form')

@section('content')

<section class="material-half-bg">
    <div class="cover"></div>
    
  </section>
  <section class="login-content">
    
    <img 
    src="{{ asset('images/1000865765.png') }}" 
    alt="Logo" 
    class="img-fluid" width="150">
    <div class="logo">
      <h1>Asociacion Estatal De KickBoxing  2025
      </h1>
    </div>

    <div class="col-md-6">
        <div class="tile">
          <h3 class="tile-title">Registrarse</h3>
          <div class="tile-body">
            <form class="form-horizontal" method="POST" action="{{route('register')}}">
                @csrf
              <div class="mb-3 row">
                <label class="form-label col-md-3">Nombre</label>
                <div class="col-md-8">
                  <input id="name" type="text" placeholder="Ingrese Nombre Completo" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <label class="form-label col-md-3">Correo</label>
                <div class="col-md-8">
                  <input id="email" type="email" placeholder="Ingrese su Correo" class="form-control col-md-8 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <label class="form-label col-md-3">Contraseña</label>
                <div class="col-md-8">
                  <input id="password" type="password" placeholder="Ingrese su Contraseña" class="form-control col-md-8 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
              </div>
              <div class="mb-3 row">
                <label class="form-label col-md-3">Confirmar Contraseña</label>
                <div class="col-md-8">
                  <input id="password-confirm" type="password" placeholder="Confirme su Contraseña" class="form-control col-md-8" name="password_confirmation" required autocomplete="new-password">
                </div>
              </div>
              <div class="mb-3 row">
                <div class="col-md-8 col-md-offset-3">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Acepto los terminos y condiciones
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="tile-footer">
                <div class="row">
                  <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-check-circle-fill me-2"></i>Registrarse</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="{{route('login')}}"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
  </section>
 
@endsection
