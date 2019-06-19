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
                <thead style="text-align:center; background-color:blue">
                    <tr>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>codigo</th>
                                                                                              
                    </tr>
                </thead>
                <tbody>                            
                    <tr style="text-align:center; background-color:yellow">                    
                        <td>{{$user->name}}</td>
                        <td>{{$user->apellido}}</td>
                        <td>{{$user->codigo}}</td>
                        <td>
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>clase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clases as $clase)
                                <tr>
                                    <td>{{$clase->id}}</td>
                                    <td>{{$clase->name}}</td>
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
