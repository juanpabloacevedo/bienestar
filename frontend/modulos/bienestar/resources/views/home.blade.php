@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Gimnasio Virtual</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Actualmente estas logueado como: 
                    {{Auth::user()->rol->name}}
                    <div class="title m-b-md">
                    <h2>{{Auth::user()->name}}</h2>
                    Gimnasio USTA Version 0.0000000001
                    <a href="http://www.ustatunja.edu.co/"><img src="{{asset('img/cedeUsta.png')}}" style="width:100%"></a>
                </div>
                 </div>
                 </div>
        </div>
    </div>
</div>
@endsection
