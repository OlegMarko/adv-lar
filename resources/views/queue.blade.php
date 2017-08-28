@extends('layouts.test')

@section('content')
    <br>

    @if (session('queue'))
        <p class="alert alert-success">{!! session('queue') !!}</p>
    @endif

    <div class="col-sm-offset-2 col-sm-8">
        <a href="{{ url('/queue/run') }}" class="btn btn-primary">Send mail (queue)</a>
    </div>
@endsection
