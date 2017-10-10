<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Museo de Historia</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="theme-color" content="#1b5a6b">
    
    <link rel="icon" href="{{URL::asset('Images/mphoto.png')}}" sizes="32x32">
    <link href="{{URL::asset('css/prism.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/ghpages-materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <style media="screen">
      .waves-effect.waves-sbx .waves-ripple {background-color: rgba(2, 86, 156, 1);}
      body {display: flex;min-height: 100vh;flex-direction: column;}
      main {flex: 1 0 auto;}
    </style>
</head>

<body class="white">
  <header>



    <ul id="dropdown1" class="dropdown-content">
     @guest
      <li><a href="{{ route('login') }}">Ingresar</a></li>
      @else
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                          Salir
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
          </li>
      @endguest


    </ul>


          

    <nav class="top-nav light-blue darken-4">
      <div class="container">
        <div class="nav-wrapper center"><a class="page-title" href="#">
        <img src="{{URL::asset('Images/logo.png')}}" width="330" height="130" alt=""></a>
        <ul class="right" style="margin-top:30px;">
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i style="font-size:30px;" class=" material-icons right">expand_more</i></a></li>
        </ul>
        </div>
      </div>
    </nav>
    <div class="container ">
      <a href="#" data-activates="nav-mobile" class="button-collapse top-nav full hide-on-large-only">
      <i class="material-icons">menu</i>
      </a>
    </div>

    <ul id="nav-mobile" class="side-nav fixed">
      <li class="logo"><a id="logo-container" href="" class="brand-logo">
          <img src="{{URL::asset('Images/sbx.jpg')}}" style="margin-top:-25px;" width="110" height="110" alt=""></a>
      </li>
      <li class="search">
        <div class="search-wrapper card">
        <input id="search"><i class="material-icons">search</i>
        <div class="search-results"></div>
        </div>
      </li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion"><br>
          <li class="bold"><a class="collapsible-header waves-effect waves-sbx"><i class="medium material-icons  blue-grey-text text-darken-4">account_balance</i>Piezas</a>
            <div class="collapsible-body">
            <ul>
            <li><a class="waves-effect waves-sbx" href="{{route('Pieza.index')}}">   Inventario         </a></li>
            <li><a class="waves-effect waves-sbx" href="{{route('Pieza.create')}}">   Nueva Adquisicion  </a></li>
            <li><a class="waves-effect waves-sbx" href="/Pieza/show">    Editar pieza       </a></li>
            <li><a class="waves-effect waves-sbx" href="{{route('TipoPieza.index')}}"> Tipo de Pieza      </a></li>
            <li><a class="waves-effect waves-sbx" href="{{route('Genero.index')}}">    Genero      </a></li>
            <li><a class="waves-effect waves-sbx" href="{{route('Adquisiciones.index')}}">    Adquisiciones     </a></li>
            <li><a class="waves-effect waves-sbx" href="{{route('TipoAdquisicion.index')}}">    Tipo de adquisiciones     </a></li>
       
            </ul>
            </div>
          </li>
          <div class="divider"></div>
          <li class="bold"><a class="collapsible-header waves-effect waves-sbx"><i class="medium material-icons blue-grey-text text-darken-4">android</i>Asistente</a>
              <div class="collapsible-body">
                <ul>
                  <li><a class="waves-effect waves-sbx" href="{{route('Asistente.index')}}">Listar</a></li>


                </ul>
              </div>
            </li>
         
            <div class="divider"></div>

            <li class="bold"><a class="collapsible-header waves-effect waves-sbx"><i class="medium material-icons blue-grey-text text-darken-4">book</i>Libros</a>
              <div class="collapsible-body">
                <ul>
                  <li><a class="waves-effect waves-sbx" href="{{route('Libro.create')}}">Nuevo libro</a></li>
                  <li><a class="waves-effect waves-sbx" href="{{route('Libro.index')}}">Listado de libros</a></li>
                    <li><a class="waves-effect waves-sbx" href="{{route('Libro.show',0)}}">Editar libros</a></li>
                  <li><a class="waves-effect waves-sbx" href="{{route('Editorial.index')}}">Editoriales</a></li>
                  <li><a class="waves-effect waves-sbx" href="{{route('Autor.index')}}">Autores</a></li>
                  <li><a class="waves-effect waves-sbx" href="{{route('Categoria.index')}}">Categorias</a></li>
                </ul>
              </div>
            </li>
            <div class="divider"></div>
            
        <li class="bold"><a class="collapsible-header waves-effect waves-sbx"><i class="medium material-icons blue-grey-text text-darken-4">account_circle</i>Personal</a>
        <div class="collapsible-body">
          <ul>
          <li><a class="waves-effect waves-sbx" href="{{route('Empleado.index')}}">Empleados     </a></li>
          <li><a class="waves-effect waves-sbx" href="{{route('Empleado.create')}}">Nuevo empleado </a></li>
          </ul>
        </div>
      </li>
      <div class="divider"></div>

      <li class="bold"><a class="collapsible-header  waves-effect waves-sbx"><i class="medium material-icons  blue-grey-text text-darken-4">theaters</i>Boletos</a>
        <div class="collapsible-body">
          <ul>
          <li><a class="waves-effect waves-sbx" href="{{url('/tarifas')}}">Tarifas</a></li>
          <li><a class="waves-effect waves-sbx" href="{{url('/visitantes')}}">Categorias</a></li>
          <li><a class="waves-effect waves-sbx" href="{{url('/rangos')}}">Rangos</a></li>
         
          </ul>
        </div>
      </li>
      <div class="divider"></div>

      <li class="bold"><a class="collapsible-header  waves-effect waves-sbx"><i class="medium material-icons  blue-grey-text text-darken-4">insert_chart</i>Estadisticas</a>
        <div class="collapsible-body">
          <ul>
          <li><a class="waves-effect waves-sbx" href="badges.html">Ventas</a></li>
          <li><a class="waves-effect waves-sbx" href="badges.html">Piezas</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
</ul>
</header>

<main>

  <div class="row">
    <div class="col s12 m9 l10">
      <div class="section scrollspy">
        
        @yield('content')

      </div>
    </div>

    <div class="col hide-on-small-only m3 l2">
      <div class="toc-wrapper">
        <div style="height: 1px;">
          
          @yield('sections')
          
        </div>
      </div>
    </div>
  </div>
</main>

<footer class="page-footer light-blue darken-4">
  <div class="footer-copyright">
    <div class="container  light-blue darken-4">
      © 2017 Museo de historia de Quetzaltenango.
      <a class="grey-text text-lighten-4 right" href="">All rights reserved.</a>
    </div>
  </div>
</footer>

    <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.timeago.min.js')}}"></script>
    <script src="{{URL::asset('js/prism.js')}}"></script>
    <script src="{{URL::asset('jade/lunr.min.js')}}"></script>
    <script src="{{URL::asset('jade/search.js')}}"></script>
    <script src="{{URL::asset('bin/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
</body>
    <!--  Scripts-->
   

</html>
