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
            @if($clases->count()>0)
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
                                    <form method="GET" action="{{ route('deleteclassuser',['user_id'=>$user->id, 'class_id'=>$clase->id_clase]) }}" >
                                        {{ csrf_field() }}
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
                @else
                <div>El Usuario ya no tiene Clases inscritas, se redireccionara a la ventana de administracion de usuarios</div>
                <script type="text/javascript">
                history.back();
                </script>
                @endif

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
