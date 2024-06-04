@extends('layouts.layout')

@section('title','Inicio')
@push('styles')
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endpush

@section('content')
<div class="container-fluid background-image d-flex align-items-center justify-content-center" style="background-color: rgba(255, 255, 255, 0.5);">
    <div class="text-white text-center ">
        <h1 class="display-1">Bienvenido a Academia Newton</h1>
        <p class="lead">Tu mejor opción para ingresar a la universidad</p>
    </div>
</div>
@endsection