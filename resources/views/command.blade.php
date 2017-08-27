@extends('layouts.test')

@section('content')
    <br>

    @if (session('validation'))
        <p class="alert alert-success">{!! session('validation') !!}</p>
    @endif

    <div class="col-sm-offset-2 col-sm-8">
        <a href="{{ url('/artisan-command/run/test') }}" class="btn btn-primary">Run Command</a>
    </div>
@endsection
