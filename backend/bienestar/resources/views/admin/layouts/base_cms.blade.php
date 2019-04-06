<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>CMS - Gimnasio virtual</title>

	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<!--Principal-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/base-cms.css') }}">
</head>

<body id="app">

	<!-- Top Nav -->
	<ul id="slide-out" class="sidenav" style="width:250px">
		<li>
			<div class="user-view">
				<div class="background">
					<img src="{{asset('img/usta_logo.png')}}" style="width: 100%;
					height: 100%;
					margin-left: auto;
					margin-right: auto;
					display: block;">
				</div>
				<a href="#user"><img class="circle" src="{{asset('img/no_photo.png')}}"></a>

				  <ul>
					<li><a href="#name"><span class="white-text name">{{Auth::user()->name}} {{Auth::user()->apellido}}</span></a></li>
					<li><a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a></li>
				</ul>
			</div>
		</li>
		<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
		<li><a href="#!">Second Link</a></li>
		<li><div class="divider"></div></li>
		<li><a class="subheader">Subheader</a></li>
		<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
		<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
	</ul>


	<main>
		<nav>
			<div style="background-image: url({{ asset('kubycks/public/media/system/header.png') }});">
				<div class="nav-wrapper cst-nav-wrapper">
					<a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons color-blue">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="{{ url('/indexuser') }}">Usuarios</a></li>
						<li><a href="{{ url('/home') }}">Home</a></li>
						<li><a href="collapsible.html">JavaScript</a></li>
						<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>

						<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
						<li><a class="dropdown-trigger cst-admin-trigger color-blue bold" href="#!" data-target="dropdown-admin">{{Auth::user()->name}} {{Auth::user()->apellido}}</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</main>




		<h2>{{Auth::user()->name}} {{Auth::user()->apellido}}</h2>
		<section class="row flex">
			<aside class="col left-menu hide-on-med-and-down h-100">
				<ul id="slide-out-fxd" class="sidenav sidenav-fixed">
					<li><a href="{{ url('/indexuser') }}">Usuarios</a></li>
					<li><a href="{{ url('/indexespaciosdeportivos') }}">Espacios deportivos</a></li>
					<li><a href="#">Clases</a></li>
					<li><a href="#">Reservas</a></li>
					<li><a href="#">Inasistencias</a></li>
				</ul>
			</aside>
			<article class="cst-content w-100">
				<!--blque hueco donde ira el contenido proveniente de una seccion-->
				@yield('content')
			</article>
		</section>
		<footer class="page-footer">
          <div class="container">
            <div class="row">
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
	<!--JQuery
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	 <!-- Compiled and minified CSS -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!--Project asset va directamente a la raiz de public-->
	<script src="{{ asset('js/main.js') }}"></script>


	@yield('javascript')

</body>
</html>
