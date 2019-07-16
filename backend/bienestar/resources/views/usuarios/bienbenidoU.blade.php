@extends('usuarios.layouts.base_usu')
@section('content')

<body>

<div class="card-body text-center align-content-center align-items-center">
  <div class="card-title text-center">


    <br/>
    <h3>Bienvenido Gimnasio virtual USTA TUNJA</h3>
  </div>


  <br/>


  <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('img/Gimnasios_USTA_Tunja.jpg')}}" class="d-block w-100 img img-fluid align-items-center" alt="GYM">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/Gimnasio_al_Patio_USTA_Tunja.jpg')}}" class="d-block w-100 img img-fluid align-items-center" alt="GYM">
      </div>
      <div class="carousel-item">
        <img src="{{asset('img/Logo_2019_Universidad_Santo_Tomas.png')}}" class="d-block w-100 img img-fluid align-items-center" alt="GYM">
      </div>
    </div>
  </div>
  <br/>


  <div class="col-md-12 align-self-md-center card card-body  align-self-md-center">
    <p>Contenido  </p>
  </div>


  <div class="card-body">
    <div class="row text-center align-items-center justify-content-center">
    </div>
  </div>
</div>


</body>


</html>

@endsection