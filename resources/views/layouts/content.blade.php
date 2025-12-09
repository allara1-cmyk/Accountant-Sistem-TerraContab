@extends('layouts.dasboard')

@section('content')
<div class="orders-page container">

    {{-- Encabezado principal --}}
    <div class="orders-header">
        <div class="header-main">
            <div>
                <h2>{{ $title ?? '' }}</h2>
                <p class="subtitle">
                    Sección para gestionar los proyectos y lotes inmobiliarios registrados en la empresa.
                </p>
            </div>
        </div>

        {{-- Tabs de estados estilo dashboard --}}
        <div class="orders-tabs">
            <a href="{{ route('projects.index') }}" 
            class="tab {{ request()->routeIs('projects.index') ? 'active' : '' }}">
                Proyectos
            </a>

            <a href="{{ route('projects.lots.index') }}" 
            class="tab {{ request()->routeIs('projects.lots.index') ? 'active' : '' }}">
                Lotes
            </a>
        </div>

    </div>

    {{-- Contenido variable: aquí va la tabla o lista --}}
    <div class="content-container">
        @yield('content')
    </div>

</div>
@endsection
