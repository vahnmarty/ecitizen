@extends('layouts.guest')

@section('header')
<header class="text-center">
    <h1 class="text-3xl font-bold text-red-700">Error 403: Forbidden</h1>
</header>
@endsection

@section('content')
<div class="bg-white">
    <div class="wrapper">
        {{ __($exception->getMessage() ?: 'Forbidden') }}
    </div>
</div>
@endsection
