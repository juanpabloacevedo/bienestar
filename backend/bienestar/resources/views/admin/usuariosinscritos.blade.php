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
                <h2>Clases Inscritas</h2>
                <div class="row">
                    <div class="bsc col m12 s12"></div>
                    <div><i class="material-icons prefix">search</i><input id="bsc_clase" type="text" placeholder="clase" name="bsc_clase"></div>
                </div>
                <thead style="text-align:center">
                    <tr>
                        <th>nombre</th>
                        <th>cupos disponibles</th>                                                                       
                    </tr>
                </thead>
                <tbody>                            
                    <tr style="text-align:center">                    
                        <td>{{$clase->name}}</td>
                        <td>{{$clase->cupos}}</td>
                        <td>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>nombre</th>
                                    <th>codigo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->codigo}}</td>
                                    <td>                               
                                        <a class="waves-effect waves-light btn"><i class="material-icons">edit</i></a>
                                        <a class="waves-effect waves-light btn red"><i class="material-icons">delete</i></a>
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
