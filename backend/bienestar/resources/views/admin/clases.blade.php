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
                    {{$title}}
                    <table class="table striped">
                    <title>Lista de clases</title>
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>cupos</th>
                                <th>inasistencias</th>
                                <th>rol</th>
                                <th>estado</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            @if($clases->count()==0)
                            vacío
                            @endif
                            @foreach($clases as $clase)
                            <tr>
                            <td>{{$clase->id}}</td>
                            <td>{{$clase->cupos}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                   
                    </ul>                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
