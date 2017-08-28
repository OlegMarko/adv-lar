@extends('layouts.test')

@section('content')
    <br>

    @if (session('event'))
        <p class="alert alert-success">{!! session('event') !!}</p>
    @endif

    <div class="col-sm-offset-2 col-sm-8">
        <a href="{{ url('/event/run') }}" class="btn btn-primary">Run event</a>
    </div>
@endsection
