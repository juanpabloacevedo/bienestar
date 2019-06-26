@extends('admin.layouts.base_cms')

@section('content')
<div class="row">
    <div class="col m12 s12">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <ul>
            <table class="table striped">
                <h2>Lista y estado de usuarios</h2>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Inasistencias</th>
                        <th>Rol</th>
                        <th>Activo</th>
                        <th></th>
                        <th>Editar</th>
                        <th>listar</th>
                        <th>Sancionados</th>
                    </tr>
                </thead>
                <tbody>                            
                    @if($users->count()==0)
                    vacío
                    @endif
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->apellido}}</td>
                        <td>@if(isset($user->asistencias)){{$user->asistencias->count()}}@else 0 @endif</td>
                        <td>{{$user->rol->name}}</td>

                       <td>
                            <p onchange="change_status_activo({{$user->id}})">
                              <label>
                                <input type="checkbox" @if($user->activo) checked @endif >
                                <span>Activo</span>
                            </label>
                        </p>
                    </td>                       
                        <td>                               
                            <td>
                             <form class="form-horizontal" method="POST" action="{{ route('edituserg') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" value="{{$user->id}}" name="iduser">
                                            <i class="material-icons red-text">edit</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </td>
                       
                    <td> <form class="form-horizontal" method="POST" action="{{ route('usuarioactual') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" value="{{$user->id}}" name="iduser">
                                    <i class="material-icons">list</i>
                                </button>
                            </div>
                        </div>
                    </form></td>
                </td>
                <td>
                    <div class="switch" onchange="change_status({{$user->id}})">
                        <label>
                            <input type="checkbox" @if($user->sancionado) checked @endif >
                            <span class="lever"></span>
                        </label>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$users->render()}}
</ul>
</div>
</div>
<a class="btn-floating btn-large waves-effect waves-light blue pulse fixed" href="{{ url('/registeradmin') }}"><i class="material-icons">add</i></a>
<form method="POST" action="{{ route('importcsv') }}" files="true" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="file-field input-field">
      <div class="btn">
        <span><i class="large material-icons">unarchive</i></span>
        <input type="file" name="filecsv">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text" placeholder="Upload one or more files">
    </div>
</div>
<button class="btn waves-effect waves-light orange" type="submit" name="action">Cargar
    <i class="material-icons right">check</i>
</button>
</form>



@endsection

@section('javascript')
<script>
     //variables
     var token              = $("meta[name=csrf-token]").attr("content");
     var url_change_user_status = '{!! url("/change_user_status") !!}';
     var url_change_user_status_activo= '{!! url("/change_user_status_activo") !!}';


     function change_status(user_id){
        $.ajax({
            method: "POST",
            url: url_change_user_status,
            data: { 'user_id':user_id, '_token': token},
            dataType: "json",
            success:function(data){
                console.log(data);
                M.toast({html: 'usuario '+data.name+' '+data.sancionado})
            },
            error:function(error){
                console.log(error);
            }
        });
    }
    function change_status_activo(user_id){
        $.ajax({
            method: "POST",
            url: url_change_user_status_activo,
            data: { 'user_id':user_id, '_token': token},
            dataType: "json",
            success:function(data){
                console.log(data);
                M.toast({html: 'usuario '+data.name+' '+data.activo})
            },
            error:function(error){
                console.log(error);
            }
        });
    }

</script>
@endsection

