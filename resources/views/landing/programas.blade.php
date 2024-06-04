@extends('layouts.layout')

@section('title','Programas')

@section('top-menu')
    Programas de estudio
@endsection

@section('content')

<section class="container py-5 mt-5">
    <h2 class="mb-4 text-center">Programas Educativos</h2>
    <div class="row">
        <div class="col-md-4">
            <img src="{{asset('images/programas.jpg')}}" alt="imagen" class="img-fluid">
        </div>
        <div class="col-md-8">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                @if ($programas)
                    @foreach ($programas as $item)
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item['titulo'] }}</h5>
                                    {{-- <p class="card-text">{{ $item['descripcion'] }}</p> --}}
                                    
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-text">No existe ningún programa que mostrar aquí</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection