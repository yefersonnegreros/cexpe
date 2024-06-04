@extends('layouts.layout')

@section('title','Asesoramiento')

@section('content')

<section id="projects" class="py-5 mt-5">
    <div class="container">
        <h2 class="text-center mb-5">Asesoramiento Académico Personalizado</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-bar-chart display-4"></i>
                        </div>
                        <h5 class="card-title">Evaluación Individualizada</h5>
                        <p class="card-text">
                            Comenzamos cada proceso de asesoramiento con una evaluación exhaustiva de tus fortalezas, 
                            debilidades y metas académicas. Esto nos permite entender tus necesidades específicas y 
                            diseñar un plan de acción personalizado.
                        </p>                  
                        <a href="{{ route('contacto' )}}" class="btn btn-primary">Ver detalles</a>      
                        {{-- <a href="{{ route('proyectos.detalle', ['id' => 'ecommerce']) }}" class="btn btn-primary">Ver detalles</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-bullseye  display-4"></i>
                        </div>
                        <h5 class="card-title">Planificación Estratégica</h5>
                        <p class="card-text">
                            Basándonos en los resultados de la evaluación inicial, nuestro equipo de asesores 
                            expertos trabajará contigo para desarrollar un plan de estudio estratégico que 
                            se ajuste a tu estilo de aprendizaje, horario y objetivos académicos.
                        </p>
                        {{-- <a href="{{ route('proyectos.detalle', ['id' => 'crm']) }}" class="btn btn-primary">Ver detalles</a> --}}
                        <a href="{{ route('contacto' )}}" class="btn btn-primary">Ver detalles</a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <i class="bi bi-book display-4"></i>
                        </div>
                        <h5 class="card-title">Recursos Educativos</h5>
                        <p class="card-text">
                            Además del asesoramiento personalizado, también te proporcionamos 
                            acceso a una amplia gama de recursos educativos, incluyendo material 
                            de estudio, herramientas de aprendizaje en línea y sesiones de tutoría 
                            individualizada.
                        </p>
                        <a href="{{ route('contacto' )}}" class="btn btn-primary">Ver detalles</a>

                        {{-- <a href="{{ route('proyectos.detalle', ['id' => 'erp']) }}" class="btn btn-primary">Ver detalles</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection