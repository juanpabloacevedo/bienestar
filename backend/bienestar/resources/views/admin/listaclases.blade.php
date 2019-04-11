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
                    <title>Lista de clases</title>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>clase</th>
                                <th>periodo</th>
                                <th>espacio deportivo</th>
                                <th>cupos</th>
                                <th></th>
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
                            <td><a class="waves-effect waves-light btn modal-trigger" href="javascript:open_users_modal({{$clase->id}})"><i class="material-icons">person_add</i></a></td>
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
<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize.min.css"> 
<script src="materialize.min.js"></script>

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
@endsection

@section('javascript')
<script>
var token = $("meta[name=csrf-token]").attr("content");
var url_subscribe_user = '{!! url("/subscribe_user") !!}';
var current_class=0;

function open_users_modal(class_id){
    current_class = class_id;
    $('#modal1').modal('open');
}

function add_user(user_id){
    $.ajax({
		method: "POST",
		url: url_subscribe_user,
		data: {'class_id':current_class, 'user_id':user_id, '_token': token},
		dataType: "json",
		success:function(data){
            console.log(data);
			alert('success');
            document.getElementById('cupos_clase_'+current_class).innerHTML = data.cupos;
		},
		error:function(error){
            alert(error);
		}
	});
}

</script>
@endsection
