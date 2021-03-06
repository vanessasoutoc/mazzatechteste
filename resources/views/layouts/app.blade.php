<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Agenda Doctor</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
    type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.1/css/bootstrap-toggle.min.css">

    <link href="http://blackrockdigital.github.io/startbootstrap-simple-sidebar/css/simple-sidebar.css"
    rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{mix('css/all.css')}}">

    @yield('css')

    <style type="text/css">
        .sidebar-nav li.active > a,
        .sidebar-nav li > a:focus {
            text-decoration: none;
            color: #fff;
            background: rgba(255, 255, 255, 0.2);
        }

        .header {
            width: 100%;
            background: #e7e7e7;
            color: #fff;
            height: 50px;

        }
    </style>
</head>
<body id="app-layout">

    @if (Auth::guest())
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                Agenda Doctor
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            @if(Auth::check() && Auth::user())
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
            </ul>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/login') }}">Entrar</a></li>
                <li><a href="{{ url('/register') }}">Registrar</a></li>
            </ul>
        </div>
    </div>
</nav>
@else
<div id="wrapper" class="">
    <!-- Sidebar -->
    @include('layouts.sidebar')


    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{url('home')}}">Agenda Doctor</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
         <li>
             <a href="#menu-toggle"

             class="" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
         </a>
     </li>
 </ul>

 <ul class="nav navbar-nav navbar-right">

    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Agendamentos <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="{{url('appointments')}}">Ver Todos</a></li>
        <li><a href="{{url('appointments/create')}}">Novo Agendamento</a></li>
    </ul>

</li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Médicos <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="{{url('doctors')}}">Ver Todos</a></li>
        <li><a href="{{url('doctors/create')}}">Novo Agendamento</a></li>
    </ul>

</li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pacientes <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="{{url('patients')}}">Ver Todos</a></li>
        <li><a href="{{url('patients/create')}}">Novo Agendamento</a></li>
    </ul>

</li>
<li>
    <a href="{{ url('/logout') }}"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>
</ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


    {{-- <header class="header">
        <a href="#menu-toggle"
           style="margin-top: 8px;margin-left: 5px;background-color: #E7E7E7;border-color: #E7E7E7"
           class="btn btn-default" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i>
        </a>
        

        <span class="pull-right" style="margin-right: 10px;margin-top: 15px">

       
            <a href="{{ url('/logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair
            </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </span>
    </header> --}}
</div>
@endif

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container">

        <div class="row">
            @if (config('infyom.laravel_generator.add_on.menu.enabled') and !Auth::guest())
            <div class="col-md-10 col-md-offset-2">
                @yield('content')
            </div>
            @else
            <div class="col-md-12">
                @yield('content')
            </div>
            @endif
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->

<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.1/js/bootstrap-toggle.min.js"></script>
<script type="text/javascript" src="{{mix('js/all.js')}}"></script>

<script>

    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });

</script>

@yield('scripts')

</body>
</html>