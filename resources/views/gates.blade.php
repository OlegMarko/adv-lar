@extends('layouts.test')

@section('content')
    <br>

    @if (session('gates'))
        <p class="alert alert-success">{!! session('gates') !!}</p>
    @endif

    <div class="col-sm-offset-2 col-sm-8">
        <a href="{{ url('/gates/test') }}" class="btn btn-primary">Test Gates</a>
    </div>
@endsection
