@extends('layouts.layout')

@section('title','Talleres')

@section('content')

<section class="container py-5 mt-5">
    <h2 class="mb-4 text-center">Talleres</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('images/ingles.avif')}}" class="card-img-top" alt="Imagen del taller de inglés" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Taller de Inglés</h5>
                    <p class="card-text">Sumérgete en el idioma inglés con nuestro taller diseñado para mejorar tus habilidades de comunicación oral y escrita. Desde principiantes hasta hablantes avanzados, este taller ofrece un ambiente interactivo y dinámico para aprender y perfeccionar el idioma inglés.</p>
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('images/liderazgo.jpg')}}" class="card-img-top" alt="Imagen del taller de liderazgo" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Taller de Liderazgo</h5>
                    <p class="card-text">Explora los principios fundamentales del liderazgo y desarrolla tus habilidades para influir positivamente en los demás. Este taller te brinda las herramientas y estrategias necesarias para liderar con eficacia en diversos contextos, desde el trabajo en equipo hasta la gestión de proyectos.</p>
                    
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('images/teatro.jpg')}}" class="card-img-top" alt="Imagen del taller de teatro" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">Taller de Teatro</h5>
                    <p class="card-text">Sumérgete en el emocionante mundo del teatro y descubre tu voz artística mientras exploras la expresión creativa, la improvisación y la actuación. Este taller ofrece una experiencia única para desarrollar confianza, expresión personal y habilidades de comunicación en un entorno colaborativo y estimulante.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

@endsection