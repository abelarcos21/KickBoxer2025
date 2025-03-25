@extends('layouts.panel')

@section('content')

    <div class="row user">
      <div class="col-md-12">
        <div class="profile">
          <div class="info"><img class="user-img" src="https://randomuser.me/api/portraits/men/1.jpg">
            <h4>{{ auth()->user()->name ?? ''}}</h4>
            <p>Administrador</p>
          </div>
          <div class="cover-image"></div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="tile p-0">
          <ul class="nav flex-column nav-tabs user-tabs">
            <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-bs-toggle="tab">Cambiar Contraseña</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-settings" data-bs-toggle="tab">Actualizar Perfil</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <div class="tab-content">
          <div class="tab-pane active" id="user-timeline">
            <div class="tile user-settings">
                <h4 class="line-head">Configuracion de Contraseña</h4>
                <form>
                  <div class="row mb-4">
                    <div class="col-md-4">
                      <label>Contraseña Anterior</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="col-md-4">
                      <label>Nueva Contraseña</label>
                      <input class="form-control" type="text">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-4 mb-4">
                      <label>Confirmar Contraseña</label>
                      <input class="form-control" type="text">
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-8 col-md-offset-3">
                      <button class="btn btn-primary" type="button"><i class="bi bi-check-circle-fill me-2"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;
                      <a class="btn btn-secondary" href="{{route('home')}}"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                  </div>
                </form>
              </div>
          </div>
          <div class="tab-pane fade" id="user-settings">
            <div class="tile user-settings">
              <h4 class="line-head">Configuracion de Perfil</h4>
              <form>
                <div class="row mb-4">
                  <div class="col-md-4">
                    <label>Primer Nombre</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="col-md-4">
                    <label>Segundo Nombre</label>
                    <input class="form-control" type="text">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 mb-4">
                    <label>Correo</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-8 mb-4">
                    <label>N° Telefono</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-8 mb-4">
                    <label>Telefono de Oficina</label>
                    <input class="form-control" type="text">
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="col-md-8 col-md-offset-3">
                    <button class="btn btn-primary" type="button"><i class="bi bi-check-circle-fill me-2"></i>Actualizar</button>&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-secondary" href="{{route('home')}}"><i class="bi bi-x-circle-fill me-2"></i>Cancelar</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  
@endsection


{{--@section('css')

    <!-- Page specific css-->
    <link rel="stylesheet" href="https://cdn.datatables.net/v/bs5/dt-1.13.4/datatables.min.css">
    
@stop

@section('js')
   
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@stop--}}










