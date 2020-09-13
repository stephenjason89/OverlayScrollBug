@extends('layouts.default')

@section('content')
    <div id="vue">
        <router-view></router-view>
    </div>

    <script src="{{ asset('js/globals.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
@endsection
