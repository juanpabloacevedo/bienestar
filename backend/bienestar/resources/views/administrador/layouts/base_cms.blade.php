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
	<link rel="stylesheet" type="text/css" href="{{ asset('kubycks/public/css/base-cms.css') }}">
</head>

<body id="app">

	<!-- Top Nav -->
	<ul id="slide-out" class="sidenav" style="width:250px">
		<li><div class="user-view">
			<div class="background">
				<img src="{{asset('img/usta_logo.png')}}" style="width: 100%;
    height: 100%;
    margin-left: auto;
    margin-right: auto;
    display: block;">
			</div>
			<a href="#user"><img class="circle" src="{{asset('img/no_photo.png')}}"></a>
			<a href="#name"><span class="white-text name">{{Auth::user()->name}} {{Auth::user()->apellido}}</span></a>
			<a href="#email"><span class="white-text email">{{Auth::user()->email}}</span></a>
		</div></li>
		<li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
		<li><a href="#!">Second Link</a></li>
		<li><div class="divider"></div></li>
		<li><a class="subheader">Subheader</a></li>
		<li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
	</ul>
	

	<main>
		<nav>
			<div style="background-image: url({{ asset('kubycks/public/media/system/header.png') }});">
				<div class="nav-wrapper cst-nav-wrapper">
					<a href="#" data-target="slide-out" class="sidenav-trigger hide-on-large-only"><i class="material-icons color-blue">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="sass.html">Sass</a></li>
						<li><a href="badges.html">Components</a></li>
						<li><a href="collapsible.html">JavaScript</a></li>
						<li><a class="dropdown-trigger cst-admin-trigger color-blue bold" href="#!" data-target="dropdown-admin">{{Auth::user()->name}} {{Auth::user()->apellido}}</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<!--Content Block-->
		<div class="col s12 m12 l9 cst-container">
			<div class="panel panel-primary">
				<div class="panel-body">
					@yield('content')
				</div>
			</div>
		</div>
	</main>


	<audio controls id="audio" style="display: none;">
		<source src="{{ asset('kubycks/public/multimedia/notification.mp3') }}" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>
<!--JQuery
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--Materialize-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<!--Project asset va directamente a la raiz de public-->
	<script src="{{ asset('js/main.js') }}"></script>

	
	@yield('javascript')

</body>
</html>
