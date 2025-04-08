    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://randomuser.me/api/portraits/men/1.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-name">{{ auth()->user()->name ?? ''}}</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="{{route('home')}}"><i class="app-menu__icon bi bi-speedometer"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="{{route('afiliacion.create')}}"><i class="app-menu__icon bi bi-ui-checks"></i><span class="app-menu__label">Solicitud de Afiliacion 2025</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Deportistas</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">

            <li><a class="treeview-item" href="{{route('afiliacion.index')}}"><i class="icon bi bi-ui-checks"></i> Lista Atletas</a></li>

          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Entrenadores</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('entrenador.index')}}"><i class="icon bi bi-ui-checks"></i> Lista Entrenadores</a></li>

          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Jueces</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('juez.index')}}"><i class="icon bi bi-ui-checks"></i> Lista de Jueces</a></li>

          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-buildings"></i><span class="app-menu__label">Academias</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('academia.index')}}"><i class="icon bi bi-ui-checks"></i> Lista de Academias</a></li>

          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-buildings"></i><span class="app-menu__label">Asociaciones</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('asociacion.index')}}"><i class="icon bi bi-ui-checks"></i> Lista de Asociaciones</a></li>

          </ul>
        </li>
        <li><a class="app-menu__item" href="{{route('home')}}"><i class="bi bi-bank me-2 fs-5"></i><span class="app-menu__label">Club</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Competencias</span><i class="treeview-indicator bi bi-chevron-right"></i></a>
            <ul class="treeview-menu">
              <li><a class="treeview-item" href="{{route('torneo.index')}}"><i class="icon bi bi-ui-checks"></i> Lista Competencias y Torneos</a></li>

            </ul>
        </li>
        <li><a class="app-menu__item" href="{{route('home')}}"><i class="app-menu__icon bi bi-people"></i><span class="app-menu__label">Divisiones Llenas</span></a></li>
        <li><a class="app-menu__item" href="{{route('home')}}"><i class="bi bi-gear me-2 fs-5"></i><span class="app-menu__label">Configuracion</span></a></li>

      </ul>
    </aside>
