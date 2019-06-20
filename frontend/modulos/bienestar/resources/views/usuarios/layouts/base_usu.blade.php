<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Juan Sebastian Ulloa">
	<meta name="description" content="Reservas de turnos de uso de espacios deportivos en a universidad Santo Tomas">
	<meta name="keywords" content="Gimnasio, USTA, usta,usta tunja,usta deportes,universidad santo tomas,bienestar universitario">
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Gimnasio virtual</title>



</head>

<body class="front"id="app">
	<!-- Top Nav -->
	<div class="container" id="header">
		<div class="row">
			<div class="col-md-12">

				<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
					<a class="navbar-brand" href="http://www.ustatunja.edu.co"><img src="{{asset('img/Logo_2019_Universidad_Santo_Tomas.png')}}"class="img img-fluid" alt="logo" style="width: 25%"></a>

					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<ul class="navbar-nav">
							<li class="nav-item active  ">
								<a class="nav-link" href="http://www.ustatunja.edu.co/areas-bienestar-universitario "> Bienestar </a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="Usuarios.html">Usuario</a>
							</li>
							<li><a class="navbar-brand" href="{{ url('changepass') }}">
								<i class="material-icons" style="width: 100%">vpn_key</i>
							</a></li>
							<li class="nav-item active"><a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
							<li class="nav-item active">
								<a class="nav-link" href="#!" data-target="dropdown-admin">{{Auth::user()->name}} {{Auth::user()->apellido}}</a>
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
							<a class="nav-link" href="{{ url('/actividades') }}">Actividades</a>
						</li>
						<li class="nav-item form-control form-group">
							<a class="nav-link" href="{{ url('/registro') }}">Registrar</a>
						</li>

						<li class="nav-item ">
							<select class="form-control form-group">
								<option>Otros </option>
							</select>


						</li>

					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					@yield('content')
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
					<div class="col-md-4"><h6 class="text-center text-white" >Juan Pablo Acevedo <p>Juan Sebatian Ulloa</h6></div>
						<div class="col-md-4"><h6 class="text-right text-white" >Gimnasio Virtual <p> Línea gratuita nacional: 01-8000-932340 </h6></div>



						</nav>

					</div>
				</div>
			</div>
	<!--JQuery
		<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>

		<script src="{{ asset('js/main.js') }}"></script>


		@yield('javascript')

	</body>
	</html>
