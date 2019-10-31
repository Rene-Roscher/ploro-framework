@extends('layouts.homepage')

@section('content')
    <div class="title m-b-md">
        {{ env('APP_NAME') }}
    </div>

    <div class="links">
        {{ 'Framework was loaded in '.RENDERTIME.' seconds YEAH :>' }}
    </div>

    {{ env('APP_NAME') }}

    @foo

@endsection