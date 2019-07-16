@extends('layouts.apps')
@section('content')
<body>

<div class="container" id="header">
  <div class="row">
    <div class="col-md-12">
      <br/>
      <br/>
    </div>
  </div>
</div>
<div class="container col-md-12" id="login">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="card">
        <div class="card-body text-center align-content-center align-items-center">
          <div class="card-title text-center">


            <br/>
            <h3>Acceso a plataforma</h3>
               @if($errors->any())
    <h5 style="color:red; text-transform: uppercase;">{{$errors->first()}}</h5>
@endif
          </div>
          <img src="{{asset('img/system/baseline-person-24px.svg')}}" class="img img-fluid" alt="Persona" style="width: 10%;">

          <div class="card-body">
            <div class="row text-center align-items-center justify-content-center">
              <div class="col-md-6">
                <form method="POST" >
                  {{ csrf_field() }}
              
              <div class="form-group">

                <label for="email">Usuario</label>
                <input id="email" type="email" class="form-control"  name="email" placeholder="E-mail">
              </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <a href="{{url('/register')}}">Registrarse</a>
                    <label class="form-check-label" for="defaultCheck1">
                      No cerrar sesion
                    </label>
                  </div>
                  <div class="form-group">
                    <br/>
                    <button type="submit" class="btn btn-success">
                      Entrar
                    </button>
                  </div>
                </form>
            </div>
              </div>
            </div>
            <div class="row text-center align-items-center justify-content-center">
              <div class="col-md-6">
                <a href="#" class="page-link">
                  Olvido su contraseña?
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</div>
</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--<script src="js/bootstrap.js" type="text/javascript"></script>-->

</html>
@endsection