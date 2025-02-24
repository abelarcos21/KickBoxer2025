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
    <div class="login-box">
      <form class="login-form" method="POST" action="{{ route('login')}}">
        @csrf
        <h3 class="login-head"><i class="bi bi-person me-2"></i>Iniciar Sesion</h3>
        <div class="mb-3">
          <label class="form-label">Correo Electronico</label>
          <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="email" placeholder="Correo Electronico" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" placeholder="Contraseña">
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="mb-3">
          <div class="utility">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="label-text" for="remember">Recordar Sesion</span>
              </label>
            </div>
            @if (Route::has('password.request'))
              <p class="semibold-text mb-2"><a href="{{ route('password.request') }}" data-toggle="flip">Olvidaste tu Contraseña ?</a></p>
            @endif
          </div>
        </div>
        <div class="mb-3 btn-container d-grid">
          <button type="submit" class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESION</button>
        </div>
      </form>
      <form class="forget-form" action="index.html">
        <h3 class="login-head"><i class="bi bi-person-lock me-2"></i>Olvidaste tu Contraseña ?</h3>
        <div class="mb-3">
          <label class="form-label">CORREO</label>
          <input class="form-control" type="text" placeholder="Correo Electronico">
        </div>
        <div class="mb-3 btn-container d-grid">
          <button class="btn btn-primary btn-block"><i class="bi bi-unlock me-2 fs-5"></i>Restablecer Contraseña</button>
        </div>
        <div class="mb-3 mt-3">
          <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="bi bi-chevron-left me-1"></i> Regresar a Login</a></p>
        </div>
      </form>
    </div>
  </section>
  <!-- Essential javascripts for application to work-->
  <script src="js/jquery-3.7.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript">
    // Login Page Flipbox control
    $('.login-content [data-toggle="flip"]').click(function() {
        $('.login-box').toggleClass('flipped');
        return false;
    });
  </script>
@endsection
