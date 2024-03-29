<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
       </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false" >
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">{{cantidadNotificaciones()}}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
          <span class="dropdown-item dropdown-header">{{cantidadNotificaciones()}} Notificaciones</span>
          <div class="dropdown-divider"></div>
          @php
              $mensajes = mensajesNotificaciones();
          @endphp
          @forelse($mensajes as $mensaje)
          @php
          $mensaje=explode('°', $mensaje);
          @endphp
          <a href="{{route($mensaje[2],$mensaje[3])}}" class="dropdown-item">
            <p><i class="fas fa-envelope mr-2"></i> {{$mensaje[0]}} <span class="float-right text-muted text-sm">Hace {{$mensaje[1]}} horas</span></p>

          </a>
          <div class="dropdown-divider"></div>
          @empty
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> No tienes notificaciones
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          @endforelse
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>

    </ul>
</nav>