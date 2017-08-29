@extends('layouts.test')

@section('content')
    <br>

    <div class="col-sm-offset-2 col-sm-8">
        <h1 class="title">Listen Broadcast</h1>
    </div>

    <div id="app"></div>
@endsection

@push('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@push('script')
    <script src="{{ asset('/js/app.js') }}"></script>
@endpush
