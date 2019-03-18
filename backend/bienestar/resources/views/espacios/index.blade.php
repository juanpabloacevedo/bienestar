@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Espacios</div>

                <div class="panel-body">
                    @if (isset($espacios))
                        <div class="alert alert-success">
                            @foreach($espacios as $espacio)
                            <div>{{$espacio->id}}</div>
                            <div>{{$espacio->name}}</div>
                            <div>{{$espacio->email}}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
