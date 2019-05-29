@extends('admin.layouts.base_cms')

@section('content')
<div class="row">
    <div class="col m12 s12">
        <div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div>                
                <ul>
                    <table class="pagination table striped">
                        <h2>Clases</h2>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>clase</th>
                                <th>periodo</th>
                                <th>espacio deportivo</th>
                                <th>cupos</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @if($clases->count()==0)
                            vacío 
                            @endif
                            @foreach($clases as $clase)
                            <tr>
                                <td>{{$clase->id}}</td>
                                <td>{{$clase->name}}</td>
                                <!--verficar segundo nivel para saltar a tercer nivel-->
                                <td>@if(isset($clase->periodo)) {{$clase->periodo->name}} @endif</td>
                                <td>@if(isset($clase->espaciodeportivo)) {{$clase->espaciodeportivo->name}} @endif</td>
                                <td id="cupos_clase_{{$clase->id}}">{{$clase->cupos}}</td>
                                <td>
                                    <a class="waves-effect waves-light btn modal-trigger" href="javascript:open_users_modal({{$clase->id}})"><i class="material-icons">person_add</i></a>                                 
                                    <a class="waves-effect waves-light btn"><i class="material-icons">edit</i></a>
                                    <a class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
                                    <form class="form-horizontal" method="POST" action="{{ route('claseactual') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-4">
                                                <button type="submit" class="btn btn-primary" value="{{$clase->id}}" name="idclase">
                                                    <i class="material-icons">list</i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registerclase') }}"><i class="material-icons">add</i></a>
                </ul>                   
            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal Trigger -->
<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Clases</h4>
    <form class="form-horizontal" >
        <!-- csrf token a nivel global-->
        {{ csrf_field() }}
        <ul class="collection">
            @foreach($users as $user)
            <li class="collection-item avatar">
                <img src="{{asset('img/no_photo.png')}}" alt="" class="circle">
                <span class="title">{{$user->name}}</span>
                <p>{{$user->rol->name}}
                    <br>
                    {{$user->codigo}}
                </p>
                <a class="secondary-content" href="javascript:add_user({{$user->id}})"><i class="material-icons">person_add</i></a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
    </div>
</div>


<div id="modal2" class="modal">
  <div class="modal-content">
    <h4>Reservas</h4>
    <form class="form-horizontal" method="POST" action="{{ route('registerreserva') }}">
        <!-- csrf token a nivel global-->
        {{ csrf_field() }}
        <div class="form-group">
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Nombre</label>
                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" required>
                </div>
            </div>
            <label for="id_espacio" class="col-md-4 control-label">Espacio</label>
            <div class="col-md-6">                            
                <select id="id_espacio"  name="id_espacio">
                    @foreach($espacios as $espacio)
                    <option value="{{$espacio->id}}">{{$espacio->nombre_espacio}}</option>  
                    @endforeach                          
                </select>
            </div>
            <div class="form-group">
                <label for="id_clase" class="col-md-4 control-label">Clase</label>
                <div class="col-md-6">                            
                    <select id="id_clase"  name="id_clase"><select>
                    </div>
                    <div class="form-group">
                        <label for="inicio_dia" class="col-md-4 control-label">inicio</label>
                        <div class="col-md-6">
                            <input type="text" class="datepicker" name="incio_dia">
                            <input type="text" class="timepicker" name="incio_hora">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fin_dia" class="col-md-4 control-label">fin</label>
                        <div class="col-md-6">
                            <input type="text"  class="datepicker" name="fin_dia" format="yyyy-mm-dd">
                            <input type="text"  class="timepicker" name="fin_hora">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Registrar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </ul>
    </div>
    <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Aceptar</a>
    </div>
</div>
@endsection

@section('javascript')
<script>
    var token              = $("meta[name=csrf-token]").attr("content");
    var url_subscribe_user = '{!! url("/subscribe_user") !!}';
</script>
<script src="{{ asset('js/class.js') }}"></script>
@endsection
