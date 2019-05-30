@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet" href="/../bienestar/public/css/bootstrap.css">
</head>

<body>
<div class="container" id="header">
  <div class="row">
    <div class="col-md-12">

      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="http://www.ustatunja.edu.co"><img src="/../bienestar/public/img/Logo_2019_Universidad_Santo_Tomas.png"class="img img-fluid" alt="logo" style="width: 25%"></a>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active  ">
              <a class="nav-link" href="http://www.ustatunja.edu.co/areas-bienestar-universitario "> Bienestar </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Usuario</a>
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
            <a class="nav-link" href="usuarios/login.blade.php">Login</a>
          </li>
          <li class="nav-item form-control form-group">
            <a class="nav-link" href="#">Registro</a>
          </li>

          <li class="nav-item form-control form-group">
            <a class="nav-link" href="#">Otros</a>
          </li>



          </li>

        </ul>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-body text-center align-content-center align-items-center">
          <div class="card-title text-center">


            <br/>
            <h3> Gimnasio virtual USTA TUNJA</h3>
          </div>


          <br/>



          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../../public/img/Gimnasio_al_Patio_USTA_Tunja.jpg" class="d-block w-100"  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../../public/img/Gimnasio_al_Patio_USTA_Tunja.jpg" alt="Second slide">
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br/>


          <div class="col-md-12 align-self-md-center card card-body  align-self-md-center">
            <h7>  El  espacio deportivo de gimnasio en la Universidad Santo Tomás seccional Tunja,<p> pretende cambiar las dinamicas del uso
              de los sitios deportivos, como lo es el gym ,para esto  se crea este espacio.<p>En esta Plataforma Web se podran  generar reservas, como
              para el uso de las distintas actividades que promociona el departamento de Bienestar Universitario</h7>
          </div>

          <div class="card-body">
            <div class="row text-center align-items-center justify-content-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
</body>

<script src="../../public/dist/js/bootstrap.js" type="text/javascript"></script>

</html>
