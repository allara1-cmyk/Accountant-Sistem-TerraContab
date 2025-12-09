<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lotes - TerraContab</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS del dashboard --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body class="dash-body">

    {{-- SIDEBAR --}}
    <aside class="dash-sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">TC</div>
            <span class="sidebar-title">TerraContab</span>
        </div>
        <nav class="sidebar-menu">
    <a href="{{ route('dashboard') }}" 
       class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        Principal
    </a>

    <a href="{{ route('Terrenos.index') }}" 
       class="sidebar-link {{ request()->routeIs('Terrenos.index') ? 'active' : '' }}">
        Lotes
    </a>

    <a href="#" class="sidebar-link">Clientes</a>
    <a href="#" class="sidebar-link">Pagos</a>
    <a href="#" class="sidebar-link">Facturas</a>
    <a href="#" class="sidebar-link">Configuración</a>
    <a href="#" class="sidebar-link">Reportes</a>
</nav>


        <form action="{{ route('logout') }}" method="POST" class="mt-auto p-3">
            @csrf
            <button type="submit" class="btn btn-outline-light w-100 btn-sm">
                Cerrar sesión
            </button>
        </form>
    </aside>

    {{-- CONTENIDO PRINCIPAL --}}
    <main class="dash-main">

        {{-- Topbar --}}
        <header class="topbar">
            <div class="search-box">
                <input type="text" placeholder="Buscar en el sistema..." />
            </div>
            <div class="topbar-user">
                <span>{{ auth()->user()->name ?? 'Usuario' }}</span>
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name ?? 'User') }}" class="user-avatar">
            </div>
        </header>

        <section class="dash-content container-fluid">

            {{-- HERO PROYECTOS INMOBILIARIOS --}}
            <div class="card lotes-hero-card mb-4">
                <div class="card-body">
                    <div class="row align-items-center g-3">
                        <div class="col-md-7">
                            <h3 class="fw-bold mb-1">Proyectos Inmobiliarios</h3>
                            <p class="text-muted mb-3">
                                Visualiza todos los terrenos disponibles para comercializar.
                            </p>

                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <button class="btn btn-outline-secondary btn-sm px-3">
                                    Filtrar proyectos
                                </button>
                                <button class="btn btn-success btn-sm px-3">
                                    Añadir proyecto
                                </button>
                            </div>

                            <div class="lotes-badges">
                                <button class="badge-filter active">Todos</button>
                                <button class="badge-filter">Disponibles</button>
                                <button class="badge-filter">Vendidos</button>
                                <button class="badge-filter">Reservados</button>
                                <button class="badge-filter">En proceso</button>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <form class="d-flex flex-column flex-sm-row gap-2 justify-content-end">
                                <div class="flex-grow-1">
                                    <input type="text"
                                           class="form-control form-control-sm"
                                           placeholder="Nombre del proyecto / Código de terreno">
                                </div>
                                <button class="btn btn-success btn-sm px-3" type="submit">
                                    Buscar
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- LISTA DE TERRENOS --}}
            <div class="mb-3 text-center">
                <h4 class="fw-bold mb-2">Lista de Terrenos</h4>
                <button class="btn btn-success btn-sm px-4">
                    Ver todos los proyectos
                </button>
            </div>

            <div class="row g-3 mb-4">

                {{-- Tarjeta terreno A --}}
                <div class="col-md-4">
                    <div class="terreno-card">
                        <div class="terreno-card-header">
                            <span class="terreno-tag disponible">Disponible</span>
                        </div>
                        <div class="terreno-card-body">
                            <h6 class="mb-1">Proyecto A</h6>
                            <p class="terreno-desc">
                                Terreno Proyecto A
                            </p>
                        </div>
                        <div class="terreno-card-footer">
                            <button class="btn btn-outline-success btn-sm w-100">
                                Ver
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Tarjeta terreno B --}}
                <div class="col-md-4">
                    <div class="terreno-card">
                        <div class="terreno-card-header">
                            <span class="terreno-tag reservado">Reservado</span>
                        </div>
                        <div class="terreno-card-body">
                            <h6 class="mb-1">Proyecto B</h6>
                            <p class="terreno-desc">
                                Terreno Proyecto B
                            </p>
                        </div>
                        <div class="terreno-card-footer">
                            <button class="btn btn-outline-success btn-sm w-100">
                                Ver
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Tarjeta terreno C --}}
                <div class="col-md-4">
                    <div class="terreno-card">
                        <div class="terreno-card-header">
                            <span class="terreno-tag vendido">Vendido</span>
                        </div>
                        <div class="terreno-card-body">
                            <h6 class="mb-1">Proyecto C</h6>
                            <p class="terreno-desc">
                                Terreno Proyecto C
                            </p>
                        </div>
                        <div class="terreno-card-footer">
                            <button class="btn btn-outline-success btn-sm w-100">
                                Ver
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Tarjeta grande (por ejemplo "En proceso de pago") --}}
            <div class="terreno-card terreno-card-large mb-4">
                <div class="terreno-card-header">
                    <span class="terreno-tag proceso">En proceso de pago</span>
                </div>
                <div class="terreno-card-body">
                    <h6 class="mb-1">Proyecto D</h6>
                    <p class="terreno-desc">
                        Terreno Proyecto D con cuotas activas y pagos por registrar.
                    </p>
                </div>
                <div class="terreno-card-footer text-end">
                    <button class="btn btn-outline-success btn-sm">
                        Ver detalle
                    </button>
                </div>
            </div>

        </section>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
