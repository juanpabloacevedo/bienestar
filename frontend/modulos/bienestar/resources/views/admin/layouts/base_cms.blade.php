<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Juan Pablo Acevedo Torres">
	<meta name="description" content="Reservas de turnos de uso de espacios deportivos en la universidad Santo Tomas">
	<meta name="keywords" content="Gimnasio, USTA, usta,usta tunja,usta deportes,universidad santo tomas">
	<link rel="icon" href="{{asset('img/system/ustaIcon.ico')}}">

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
					<li><a class="navbar-brand" href="{{ url('changepass') }}">
								<i class="material-icons" style="width: 100%">vpn_key</i>
							</a></li>
				</ul>
			</div>
		</li>
		<li ><a href="{{url('/indexuser') }}">Administrar Usuarios</a></li>
		<li ><a href="{{url('/indexespdep') }}">Actividades</a></li>
		<li ><a href="{{url('/indexclases') }}">Clases</a></li>
		<li ><a href="{{url('/indexsedes')}}">Sedes</a></li>
		<li ><a href="{{url('/indexperiodo')}}">Periodos</a></li>
		<li ><a href="{{url('/indexespacio')}}">Espacios</a></li>
		<li ><a href="{{url('/indexreserva')}}">Reserva</a></li>
		<li><a href="{{ URL::previous() }}"><i class="material-icons red-text">arrow_back</i> Atrás</a></li>
		<li><a class="subheader">Subheader</a></li>
		<li><a href="http://www.ustatunja.edu.co">Usta Tunja</a></li>
		<li><a href="https://plataformalms.ustatunja.edu.co/login/index.php">Campus Virtual</a></li>
		<li><a class="navbar-brand" href="{{ url('/') }}">
			<i class="material-icons">home</i>
		</a></li>
		<li clss="{{request()->routeIs('admin')?'active':''}}"><a href="{{ url('/admin') }}">Administrador</a></li>


		<li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
		<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>
	</ul>


	<main>
		<nav class="jpa-color-base" style="height:100px">

			<div >
				<div class="nav-wrapper cst-nav-wrapper">

					<a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons color-blue">menu</i></a>
					<ul id="nav-mobile " class="right hide-on-med-and-down">
						<li><a href="http://www.ustatunja.edu.co">Usta Tunja</a></li>
						<li><a href="https://plataformalms.ustatunja.edu.co/login/index.php">Campus Virtual</a></li>
						<li clss="{{request()->routeIs('admin')?'active':''}}"><a href="{{ url('/admin') }}">{{Auth::user()->rol->name}}</a></li>
						<li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
						<li><a class="navbar-brand" href="{{ url('changepass') }}">
								<i class="material-icons" style="width: 100%">vpn_key</i>
							</a></li>
						<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</ul>
					<ul style="height: 80px">
						<li>
							<a class="navbar-brand" href="{{ url('/') }}">
								<i class="material-icons">home</i>
							</a>							
						</li>						
						<li>
							<img src="{{asset('img/logoUsta.png')}}" style="
							height:80px;
							margin-left: auto;
							margin-right: auto;
							display: block;">
						</div>	
					</li>
				</ul>					
			</div>
		</div>
	</nav>
</main>




<h2>{{Auth::user()->name}}</h2>
<section class="row flex">
	<aside class="col left-menu hide-on-med-and-down h-100">
		<ul id="slide-out-fxd" class="sidenav sidenav-fixed collapsible">
			<li class="list-color">
				<div class="collapsible-header" onclick="M.toast({html: 'Lista y registro de usuarios'})"><i class="material-icons">group</i>Usuarios</div>
				<div class="collapsible-body"><a href="{{ url('/indexuser') }}">Administrar Usuarios</a></div>
			</li >
			<li class="list-color">
				<div class="collapsible-header" onclick="M.toast({html: 'Lista y registro de actividades de gymnasio y deportivas'})"><i class="material-icons">directions_bike</i>Actividades</div>
				<div class="collapsible-body"><a href="{{ url('/indexespdep') }}">Administrar Actividades</a></div>
			</li>
			<li class="list-color">
				<div class="collapsible-header" onclick="M.toast({html: 'Lista y registro de ubicaciones o sedes de la universidad'})"><i class="material-icons">place</i>Sedes</div>
				<div class="collapsible-body"><a href="{{url('/indexsedes')}}">Administrar Sedes</a></div>
			</li>
			<li class="list-color">
				<div class="collapsible-header" onclick="M.toast({html: 'Lista y registro de Gymnasios'})"><i class="material-icons">fitness_center</i>Espacios deportivos</div>
				<div class="collapsible-body"><a href="{{url('/indexespacio')}}">Espacios</a></div>
			</li>
			<li class="list-color">
				<div class="collapsible-header" onclick="M.toast({html: 'Lista y registro de clases'})"><i class="material-icons">list</i>Clases</div>
				<div class="collapsible-body"><a href="{{url('/indexclases') }}">Administrar Clases</a></div>
			</li>
			<li class="list-color">
				<div class="collapsible-header" onclick="M.toast({html: 'Lista y registro de periodos academicos'})"><i class="material-icons">date_range</i>Periodos Academicos</div>
				<div class="collapsible-body"><a href="{{url('/indexperiodo')}}">Administrar Periodos</a></div>
			</li>
			<li class="list-color">
				<div class="collapsible-header" onclick="M.toast({html: 'Lista y asignacion de fecha,hora y epsacios a clases ya creadas'})"><i class="material-icons">timelapse</i>Reservas</div>
				<div class="collapsible-body list-color"><a href="{{url('/indexreserva')}}">Administrar Reservas</a></div>
			</li>
			<li><a href="{{ URL::previous() }}"><i class="material-icons red-text">arrow_back</i> Atrás</a></li>
		</ul>
	</aside>
	<article class="cst-content w-100">
		<!--blque hueco donde ira el contenido proveniente de una seccion-->
		@yield('content')
	</article>
</section>

<footer class="jpa-color-base">
	<div class="container jpa-color-base" >
		<div class="row jpa-color-base">
			<div class="col l6 s12">
				<h5 class="white-text">Gimnasio virtual</h5>
				<p class="grey-text text-lighten-4">Gimnasio virtual version de prueba</p>
				<p>Version 0.9.8 26-06-2019</p>
			</div>
		</div>
	</div>

	<div class="footer-copyright">
		<div class="container">
			© 2019 Juan Pablo Acevedo Torres-Juan Sebastian Ulloa
			<a class="grey-text text-lighten-4 right" href="http://www.ustatunja.edu.co">Universidad Santo Tomas Tunja</a>
		</div>
	</div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!--Project asset va directamente a la raiz de public-->
<script src="{{ asset('js/main.js') }}"></script>


@yield('javascript')

</body>
</html>
