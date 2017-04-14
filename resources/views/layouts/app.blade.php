<!DOCTYPE html>
  <html lang="es">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home @yield('title')</title>
      {!!Html::style('assets/css/bootstrap.css')!!}
      {!!Html::style('assets/css/estilos.css')!!}
      {!!Html::style('assets/css/font-awesome.css')!!}
      {!!Html::script('assets/js/jquery.js')!!}
      <style>
          body {
              font-family: 'Arial';
          }
          .fa-btn {
              margin-right: 6px;
          }
      </style>
    </head>
<body id="app-layout">
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <a class="navbar-brand" href="{{ url('/home') }}"> <img src="{{ asset('assets/css/imagenes/fondo//logo.png') }}" alt="Here Logo"/> </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{ url('/home') }}">Home</a></li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Clientes<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/cliente/create')}}">Registrar clientes</a></li>
                      <div class="divider">
                  </div>
                  <li><a href="{{ url('/cliente')}}">Listar clientes</a></li>
                      <div class="divider">
                </ul>
        </li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Proveedores<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/proveedor/create')}}">Registrar Proveedores</a></li>
                      <div class="divider">
                  </div>
                  <li><a href="{{ url('/proveedor')}}">Listar Proveedores</a></li>
                      <div class="divider">
                </ul>
        </li>
        <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Productos<span class="caret"></span></a>   
                <ul class="dropdown-menu" role="menu">
                 <li><a href="{{ url('/categoria/create')}}">Registrar Categoria</a></li>
                  <div class="divider"></div>
                  <li><a href="{{ url('/producto/create')}}">Registrar Productos</a></li>
                    <div class="divider"></div>
                  <li><a href="{{ url('/producto')}}">Listar Productos</a></li>
                      <div class="divider">
                </ul>
        </li>
        <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Ventas<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="{{ url('/ventas/create')}}">Realizar Ventas</a></li>
                     <div class="divider"></div>
                 <li><a href="{{ url('/producto')}}">Listar Ventas</a></li>
                     <div class="divider"></div>
               </ul>
        </li>
        <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Factura<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="">Realizar Factura</a></li>
                     <div class="divider"></div>
                 <li><a href="">Listar Facturas</a></li>
                     <div class="divider"></div>
               </ul>
        </li>
        <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes<span class="caret"></span></a>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="" class="fa fa-external-link-square"> Ventas</a></li>
                     <div class="divider"></div>
                 <li><a href="" class="fa fa-external-link-square"> Facturas</a></li>
                     <div class="divider"></div>
               </ul>
        </li>
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('usuarios/usuarios')}}" class="fa fa-user"> Registrar Usuarios</a></li>
                    <div class="divider"></div>
              </ul>
        </li>   
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
            @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                          <div class="divider"></div>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                     </li>
                @endif
        </li>
      </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>        
</div>
</nav><!-- /.navbar-->  
      <div class="container">
        @yield('content')
      </div> <!-- /container -->
    
      
      <footer class="footer">
        <center>
           <smal>Derechos reservados</small>
        </center>
      </footer>
      {!!Html::script('assets/js/jquery.js')!!}
    	{!!Html::script('assets/js/bootstrap.min.js')!!}
      </body>
  </html>
