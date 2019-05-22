<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<div class="container" id="header">
  <div class="row">
    <div class="col-md-12">
      <br/>
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
          </div>
          <img src="../../dist/img/persona.png" class="img img-fluid" alt="Persona" style="width: 10%;">

          <div class="card-body">
            <div class="row text-center align-items-center justify-content-center">
              <div class="col-md-6">
                <form method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

              <div class="form-group">
                <label for="user">Usuario</label>
                <input type="email" class="form-control" id="email" placeholder="Usuario">
              </div>
                  <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña">
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
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

<script src="js/bootstrap.js" type="text/javascript"></script>

</html>
