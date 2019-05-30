<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gymnasio Virtual') }}</title>
    <link rel="icon" href="{{asset('img/system/ustaIcon.ico')}}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="
        height: 60px;
        padding: 10px">
         <a class="navbar-brand" href="http://www.ustatunja.edu.co"><img src="{{asset('img/Logo_2019_Universidad_Santo_Tomas.png')}}"class="img img-fluid" alt="logo" style="width: 25%"></a>

            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"><a>logout</a></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Gymnasio Virtual
                    </a>
                    
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                        @if(Auth::user()->isAdmin())
                        <li> <a class="navbar-brand" style="background:blue darken-2;" href="{{ url('/admin') }}">
                        Administracion</a></li>
                        @else<a class="navbar-brand" style="background:blue darken-2;" href="{{ url('/user') }}">
                        Usuario</a>
                        @endif
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
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

    @yield('content')
</div>
<footer class="jpa-color-base">
    <div class="container jpa-color-base" >
        <div class="row jpa-color-base">
            <div class="col l6 s12">
                <h5 class="white-text">Gimnasio virtual</h5>
                <p class="grey-text text-lighten-4">Gimnasio virtual version de prueba</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2019 Juan Pablo Acevedo Torres
            <a class="grey-text text-lighten-4 right" href="http://www.ustatunja.edu.co">Universidad Santo Tomas Tunja</a>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!--Project asset va directamente a la raiz de public-->
<script src="{{ asset('js/main.js') }}"></script>


@yield('javascript')

</body>
</html>


