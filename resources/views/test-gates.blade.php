@extends('layouts.test')

@section('content')
    <br>

    @if (session('gates'))
        <p class="alert alert-success">{!! session('gates') !!}</p>
    @endif

    <div class="col-sm-offset-2 col-sm-8">
        @can('subscribe-only', auth()->user())
            <h1>This page is only for subscribers</h1>

            <a href="{{ asset('/gates/un-subscribe') }}" class="btn btn-danger">UnSubscribe</a>
        @endcan

        {{-- OR --}}

        @unless($gate)
            <h1>Your aren't a subscribe, subscribe now</h1>

            <a href="{{ asset('/gates/subscribe') }}" class="btn btn-success">Subscribe</a>
        @endunless
    </div>
@endsection
