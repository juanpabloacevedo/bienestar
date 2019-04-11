@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col m12 s12">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div clas=row>
            <div class="col s12 m112 l12 xl12">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus dolorem dignissimos, quisquam aliquid molestiae minus ex consequuntur animi adipisci. Cumque sequi eligendi fugit, sed architecto omnis quae exercitationem. Eum, totam.</p>
            </div>
        </div>
      </div>    
</div>
@endsection
