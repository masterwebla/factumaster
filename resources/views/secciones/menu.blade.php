<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">FactuMaster</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        @if (Auth::guest())
          <li><a href="{{ route('login') }}">Acceso</a></li>
          <li><a href="{{ route('register') }}">Registro</a></li>
        @else
          <li><a href="{{route('clientes.index')}}">Clientes <span class="sr-only">(current)</span></a></li>
          <li><a href="{{route('facturas.index')}}">Facturas</a></li>
          <li><a href="{{route('productos.index')}}">Productos</a></li>
          <li><a href="{{route('perfiles.index')}}">Perfiles</a></li>
          <li><a href="#">Formas de Pago</a></li>
          <li><a href="{{route('carrito')}}"><i class="fa fa-shopping-cart"></i></a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" data-toggle="modal" data-target="#modal-usuario">Mis Datos</a></li>
              <li>
                <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                    Cerrar Sesion
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>