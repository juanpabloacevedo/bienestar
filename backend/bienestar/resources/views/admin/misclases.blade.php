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
            <h2>Mi lista de clases</h2>
            <div class="row">
                    <div class="bsc col m12 s12"></div>
                    <div><i class="material-icons prefix">search</i><input id="bsc_clase" type="text" placeholder="clase" name="bsc_clase"></div>
            </div>
                <thead style="text-align:center; background-color:blue">
                    <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>numero de clases</th>
                    <th>clase</th>                                                                      
                    </tr>
                </thead>
                <tbody>                            
                <tr style="text-align:center; background-color:yellow">                    
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->apellido}}</td>
                <td>{{$user->clases->count()}}</td>
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
