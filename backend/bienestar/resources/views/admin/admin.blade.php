@extends('admin.layouts.base_cms')

@section('content')
<div class="row">
    <div class="col m12 s12">
        <div>Gimnasio Virtual</div>
        <h1>Modulo de Administrador</h1>
        <div>
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
                <a href="http://www.ustatunja.edu.co/">
                    <img src="{{asset('img/cedecentro.jpg')}}" style="width:100%">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
