@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{--<section class="material-half-bg">
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
      <form class="login-form" action="index.html">
        <h3 class="login-head"><i class="bi bi-person me-2"></i>Iniciar Sesion</h3>
        <div class="mb-3">
          <label class="form-label">Correo Electronico</label>
          <input class="form-control" type="text" placeholder="Correo Electronico" autofocus>
        </div>
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input class="form-control" type="password" placeholder="Contraseña">
        </div>
        <div class="mb-3">
          <div class="utility">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"><span class="label-text">Recordar Sesion</span>
              </label>
            </div>
            <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Olvidaste tu Contraseña ?</a></p>
          </div>
        </div>
        <div class="mb-3 btn-container d-grid">
          <button class="btn btn-primary btn-block"><i class="bi bi-box-arrow-in-right me-2 fs-5"></i>INICIAR SESION</button>
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
  </script>--}}
@endsection
