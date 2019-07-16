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
                <a class="secondary-content" href="javascript:add_user({{$user->id}})">
                    @if($clase->users()->where('users.id',$user->id)->count()===0)
                    <i class="material-icons">person_add</i>@else <i class="material-icons red background:white" >delete</i>@endif
                </a>
            </li>
            @endforeach
        </ul>
    </div>
    <div class="modal-footer">
        <div class=row>
            <p style="text-align: justify;">Solo se podran inscribir usuarios que esten activos y actualmente no tengan sanción, si el usuario a inscribir no aparece, verificar el estado del usuario</p>
        </div>
        
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
