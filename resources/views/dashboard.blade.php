@extends('base')
@section('main')
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Welcome <i>{{ ucfirst(Auth()->user()->name) }}</i> to Reddit clone!</h1>
        </div>
      </section>
@endsection