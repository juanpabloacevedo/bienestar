<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Juan Sebastian Ulloa">
	<meta name="description" content="Reservas de turnos de uso de espacios deportivos en a universidad Santo Tomas">
	<meta name="keywords" content="Gimnasio, USTA, usta,usta tunja,usta deportes,universidad santo tomas,bienestar universitario">
	<link rel="icon" href="{{asset('css/boostrap.css')}}">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Gimnasio virtual</title>



</head>

<body class="front"id="app">
<div class="container" id="header">
	<div class="row">
		<div class="col-md-12">

			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<a class="navbar-brand" href="#"><img src="../../dist/img/Logo_2019_Universidad_Santo_Tomas.png"class="img img-fluid" alt="logo" style="width: 25%"></a>

				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item active  ">
							<a class="nav-link" href="#"> UstaTunja </a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="#">Administrador</a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="login.html">logout</a>
						</li>


					</ul>
				</div>
			</nav>
			<br/>
		</div>
	</div>
</div>
<div class="container" id="login">
	<div class="row">
		<div class="col-md-3 card form-group">
			<div class="text-center align-content-center align-items-center">

				<ul class="nav flex-column ">
					<br/>
					<li class="nav-item form-control form-group">
						<a class="nav-link" href="actividadesAdmin.html">Actividades</a>
					</li>
					<li class="nav-item form-control form-group">
						<a class="nav-link" href="clasesAdmin.html">Clases</a>
					</li>

					<br class="nav-item ">
					<select class="form-control form-group">
						<option>Otros</option>
					</select>

					</li>

				</ul>
			</div>

		</div>
		<div class="col-md-9">
			<div class="card">
				@
			</div>
		</div>
	</div>
</div>
<div class="container" id="footer">
	<div class="row">
		<div class="col-md-12">
			</br>
			<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
				<div class="col-md-4"><h6 class="text-left text-white" >Universiad Santo Tomás  © 2019 <p> Facultad Ingenería de Sistemas </h6></div>
				<div class="col-md-4"><h6 class="text-center text-white" >Juan Pablo Acebedo <p>Juan Sebatian Ulloa</h6></div>
				<div class="col-md-4"><h6 class="text-right text-white" >Gimnasio Virtual <p> Línea gratuita nacional: 01-8000-932340 </h6></div>



			</nav>

		</div>
	</div>
</div>
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
		<li><a href="{{ url('/indexespaciosdeportivos') }}">Espacios deportivos</a></li>
		<li><a href="{{ url('/indexclases') }}">Clases</a></li>
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
					<li><a href="{{ url('/indexclases') }}">Clases</a></li>
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
	 <!-- Materialize icons -->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<!--Project asset va directamente a la raiz de public-->
	<script src="{{ asset('js/main.js') }}"></script>


	@yield('javascript')

</body>
</html>
