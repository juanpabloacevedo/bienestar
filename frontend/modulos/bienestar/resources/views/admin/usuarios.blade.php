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
                        <th>inasistencias</th>
                        <th>rol</th>
                        <th>estado</th>
                        <th></th>
                        <th></th>
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
                        <td>@if($user->activo==true)<i class="material-icons green-text">sentiment_very_satisfied</i> @else
                            <i class="material-icons red-text">sentiment_very_dissatisfied</i>
                        @endif</td>

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
                        <td>                               
                            <a class="waves-effect waves-light btn"><i class="material-icons">edit</i></a>
                            <td> <form class="form-horizontal" method="POST" action="{{ route('destroyuser') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary" value="{{$user->id}}" name="iduser">
                                            <i class="material-icons red-text">block</i>
                                        </button>
                                    </div>
                                </div>
                            </form></td>
                        </td>
                        <td>
                            <div class="switch" onchange="change_status({{$user->id}})">
                                <label>
                                    con sancion
                                    <input type="checkbox" @if($user->activo) checked @endif >
                                    <span class="lever"></span>
                                    sin sancion
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


     function change_status(user_id){
        $.ajax({
            method: "POST",
            url: url_change_user_status,
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

