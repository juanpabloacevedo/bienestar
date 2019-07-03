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
                <h2>Clases Inscritas por {{$user->name}} {{$user->apellido}}</h2>
                <div class="row">
                    <div class="bsc col m12 s12"></div>
                    <div><i class="material-icons prefix">search</i><input id="bsc_clase" type="text" placeholder="clase" name="bsc_clase"></div>
                </div>
                <thead >

                </thead>
                <tbody>                            
                    <tr style="">                    
                        <td>
                            <thead>
                                <tr>                                    
                                    <th>id</th>
                                    <th>clase</th>
                                    <th>espacio deportivo</th>
                                    <th>espacio</th>
                                    <th>sede</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clases as $clase)
                                <td>{{$clase->id_clase}}</td>
                                <td>{{$clase->name}}</td>
                                <td>{{$clase->espaciodeportivo->name}}</td>
                                <td>{{$clase->espacio->nombre_espacio}}</td>
                                <td>{{$clase->espacio->sede->name}}</td>

                                <td>
                                    <form method="POST" action="{{ route('deleteclassuser') }}" >
                                        {{ csrf_field() }}
                                        <div class="form-group" style="display: none">
                                            <label for="user_id" class="col-md-4 control-label">usuario</label>
                                            <div class="col-md-6">
                                                <input id="user_id" type="number" class="form-control" value="{{$user->id}}" name="user_id" required>
                                            </div>
                                        </div>
                                        <div class="form-group" style="display: none">
                                            <label for="clas_id" class="col-md-4 control-label">clase</label>
                                            <div class="col-md-6">
                                                <input id="clas_id" type="number" class="form-control" value="{{$clase->id_clase}}" name="clas_id" required>
                                            </div>
                                        </div>
                                        <button class="waves-effect waves-light btn red" type="submit" name="action">
                                            <i class="material-icons right">delete</i>
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </td>
                    <td>
                    </tbody>    
                </table>


            </ul>
        </div>
    </div>
    @endsection
    @section('javascript')
    <script>
     //variables
     var token              = $("meta[name=csrf-token]").attr("content");
     var url_delete_class_user = '{!! url("/delete_class_user") !!}';
     var url_change_user_status_activo= '{!! url("/change_user_status_activo") !!}';


     function deleteClassUser(clase_id,user_id){
        $.ajax({
            method: "POST",
            url: url_delete_class_user,
            data: { 'clase_id':clase_id,'user_id':user_id,'_token': token},
            dataType: "json",
            success:function(data){
                console.log(data);
                M.toast({html: 'clase eliminada'})
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
