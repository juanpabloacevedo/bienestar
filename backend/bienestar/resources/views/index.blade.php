@extends('layouts.apps')

@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Title</title>



</head>

<body>
<div class="container" id="header">
  <div class="row">
    <div class="">

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
            <a class="nav-link" href="{{ route('login') }}">Login</a>
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
                <img src="{{asset('img/Gimnasio_al_Patio_USTA_Tunja.jpg')}}" style="width: 25%" class="d-block w-100"  alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/Gimnasio_al_Patio_USTA_Tunja.jpg')}}" alt="Second slide">
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

</body>

<script src="{{asset('js/bootstrap.js')}}" type="text/javascript"></script>

</html>
@endsection