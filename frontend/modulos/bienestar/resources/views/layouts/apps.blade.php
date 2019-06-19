<!DOCTYPE html>
<head lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Gymnasio Virtual') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="  col-md-12 ">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">


            <div class="collapse navbar-collapse " id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class=" ">
                        <a class="navbar-brand" href="http://www.ustatunja.edu.co"><img src="{{asset('img/Logo_2019_Universidad_Santo_Tomas.png')}}" alt="logo" style="width: 25%"></a>
                    </li>
                    <li class="nav-item active ">
                        <a class="nav-link" href="http://www.ustatunja.edu.co/areas-bienestar-universitario "> Bienestar </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Usuario</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('logout') }}">logout</a>
                    </li>


                </ul>

            </div>
            <div class="container">
                <div class="navbar-header">

                       <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            @if(Auth::user()->isAdmin())
                                <li> <a class="navbar-brand"  href="{{ url('/admin') }}">
                                        Administracion</a></li>
                            @elseif(Auth::user()->isInstructor())<a class="navbar-brand"  href="{{ url('/instructor') }}">
                                   Instructor</a>
                               @else
                                   <a class="navbar-brand"  href="{{ url('/user') }}">
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


</div>


        @yield('content')

    <div class="container" id="footer">
        <div class="row">
            <div class="col-md-12">
                </br>
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="col-md-4"><h6 class="text-left text-white" >Universiad Santo Tomás 2019 <p> Facultad Ingenería de Sistemas </h6></div>
                    <div class="col-md-4"><h6 class="text-center text-white" >Juan Pablo Acebedo <p>Juan Sebatian Ulloa</h6></div>
                    <div class="col-md-4"><h6 class="text-right text-white" >Gimnasio Virtual</h6></div>



                </nav>
                <br/>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script src="{{ asset('js/app.js') }}"></script>

<!--Project asset va directamente a la raiz de public-->
<script src="{{ asset('js/main.js') }}"></script>


@yield('javascript')

</body>
</head>
</html>


