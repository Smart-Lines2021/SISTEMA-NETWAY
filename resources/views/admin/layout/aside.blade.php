<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{ asset('assets/dist/img/logo.png')}}" alt="Logo de Netway"
            class="brand-image img-circle elevation-3" style="opacity: .8; background-color: white">
        <span class="brand-text font-weight-light">NetWay</span>
    </a>

    @include('admin.layout.slider')
    <!-- /.sidebar -->
</aside>