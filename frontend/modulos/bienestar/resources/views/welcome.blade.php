@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
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
            <a class="nav-link" href="actividades.html">Actividades</a>
          </li>
          <li class="nav-item form-control form-group">
            <a class="nav-link" href="#">Clases</a>
          </li>

          <li class="nav-item form-control form-group">
            <a class="nav-link" href="#">Reserva</a>
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
        <div class="card-body text-center align-content-center align-items-center">
          <div class="card-title text-center">


            <br/>
            <h3>Bienvenido Gimnacio virtual USTA TUNJA</h3>
          </div>


          <br/>


          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{asset('img/Gimnasios_USTA_Tunja.jpg')}}" style="width:100px" alt="GYM">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/Gimnasio_al_Patio_USTA_Tunja.jpg')}}" style="width:100px" class="d-block w-100 img img-fluid align-items-center" alt="GYM">
              </div>
              <div class="carousel-item">
                <img src="{{asset('img/Logo_2019_Universidad_Santo_Tomas.png')}}" style="width:100px"class="d-block w-100 img img-fluid align-items-center" alt="GYM">
              </div>
            </div>
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
@endsection