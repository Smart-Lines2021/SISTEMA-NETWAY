<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">{{auth()->user()->name}}</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->

      <li class="nav-header">Etiqueta Divisora</li>
      @role('Administrador')
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-users-cog"></i>
          <p>
            Control de Usuarios
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('admin.usuarios.index')}}" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Usuarios</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.roles.index')}}" class="nav-link">
              <i class="fas fa-user-tag"></i>
              <p>Roles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.permisos.index')}}" class="nav-link">
              <i class="fas fa-unlock-alt"></i>
              <p>Permisos</p>
            </a>
          </li>
        </ul>
      </li>
      @endrole
      <li class="nav-item menu-is-opening">
        <a href="#" class="nav-link">
          <i class="nav-icon far fa-plus-square"></i>
          <p>
            Catálogos
            <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview" style="display: none;">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Administrativo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.departamentos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Departamentos</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Ubicación Geográfica
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.paises.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paises</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.estados.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Estados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.municipios.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Municipios</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Productos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('rh.productos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.tipo_productos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo de Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.categorias_productos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorías de Productos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.marcas.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Marcas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Proveedores y vehiculos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.tipo_vehiculos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo de Vehiculos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.gasolinerias.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gasolineras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.categorias_proveedores.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Categorías de Proveedores</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.colores.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Colores</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li> {{-- Cierra catalogos --}}

      {{--Comienza--}}
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fas fa-users"></i>
          <p>
            Recursos humanos

          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('admin.personas.index')}}" class="nav-link">
              <i class="fas fa-id-badge"></i>
              <p>Empleados</p>
            </a>
          </li>


        </ul>
      </li> {{--Cierre de RH--}}


      {{--Flotillas--}}
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fas fa-truck"></i>
          <p>
            Flotillas

          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('rh.vehiculos.index')}}" class="nav-link">
              <i class="fas fa-truck-moving"></i>
              <p>
                Vehículos
              </p>
            </a>
          </li>


        </ul>
      </li> {{--Cierre de Flotillas--}}

       {{--Proveedores--}}
       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="fas fa-store"></i>
          <p>
            Proveedores
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('rh.proveedores.index')}}" class="nav-link">
              <i class="fas fa-store"></i>
              <p>
                Proveedores
              </p>
            </a>
          </li>


        </ul>
      </li> {{--Cierre de clientes--}}


       {{--Clientes--}}
       <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="far fa-address-book"></i>
          <p>
            Clientes

          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('rh.clientes.index')}}" class="nav-link">
              <i class="far fa-address-book"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>


        </ul>
      </li> {{--Cierre de clientes--}}

      <li class="nav-item">
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
          <i class="nav-icon fa fa-sign-out-alt"></i>
          <p>Cerrar Sesión</p>
        </a>
      </li>





    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>