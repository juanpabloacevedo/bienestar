@extends('layouts.apps')
@section('content')

  </br>

<div class="container col-md-12" id="login">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-body text-center align-content-center align-items-center">
          <div class="card-title text-center">


            <br/>
            <h3> Registro Ingreso al Gimnasio</h3>
          </div>
          <img src="{{asset('img/registro.png')}}" class="img img-fluid" alt="Registro" style="width: 15%;">

          <div class="card-body">
            <div class="row text-center align-items-center justify-content-center">
              <div class="col-md-6">
                <form>
                  <div class="form-group">
                    <label >Sede</label>
                    <select class="custom-select">
                      <option value="Campus Centro Historico">Campus Centro Historico</option>
                      <option value="Campus Av Universitaria">Campus Av Universitaria</option>

                    </select>
                  </div>
                  <div class="form-group">
                    <label for="doc">Identificacion</label>
                    <div></div>
                    <input type="text" class="form-control" id="doc" placeholder="Identificacion">
                  </div>

                  <div class="form-group">
                    <br/>
                      <a href="bienbenidoS.html"class="btn btn-success">
                        Registrar ingreso
                      </a>

                  </div>
                </form>
              </div>
            </div>


            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<br>
@endsection