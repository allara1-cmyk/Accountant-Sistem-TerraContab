<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - TerraContab</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- CSS del dashboard --}}
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body class="dash-body">

    {{-- SIDEBAR LATERAL --}}
    <aside class="dash-sidebar">
        <div class="sidebar-header">
            <div class="sidebar-logo">TC</div>
            <span class="sidebar-title">TerraContab</span>
        </div>

        <nav class="sidebar-menu">
    <a href="{{ route('home') }}" 
       class="sidebar-link {{ request()->routeIs('home') ? 'active' : '' }}">
        Principal
    </a>

    <a href="{{ route('projects.index') }}" 
       class="sidebar-link {{ request()->routeIs('projects.*') ? 'active' : '' }}">
        Proyectos   
    </a>

    <a href="#" class="sidebar-link">Clientes</a>
    <a href="#" class="sidebar-link">Pagos</a>
    <a href="#" class="sidebar-link">Facturas</a>
    <a href="#" class="sidebar-link">Configuración</a>
    <a href="#" class="sidebar-link">Reportes</a>
</nav>

        <form action="{{ route('logout') }}" method="POST" class="mt-auto p-3">
            @csrf
            <button class="btn btn-outline-light w-100 btn-sm">Cerrar sesión</button>
        </form>
    </aside>

    <main class="dashboard-container dash-main">
        @yield('content')
    </main>

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

    
    <script>
        new Chart(document.getElementById('chartAnalytics'), {
            type: 'bar',
            data: {
                labels: ["Oct", "Nov", "Dec"],
                datasets: [{
                    data: [32, 48, 38],
                    backgroundColor: "#1b8c6b",
                    borderRadius: 12
                }]
            }
        });

        new Chart(document.getElementById('chartLine'), {
            type: 'line',
            data: {
                labels: ["Lun", "Mar", "Mié", "Jue", "Vie"],
                datasets: [{
                    data: [10, 20, 15, 25, 18],
                    borderColor: "#1b8c6b",
                    tension: .4
                }]
            }
        });

        new Chart(document.getElementById('chartVisitors'), {
            type: 'line',
            data: {
                labels: ["Lun", "Mar", "Mié", "Jue", "Vie"],
                datasets: [{
                    data: [12, 15, 14, 18, 17],
                    borderColor: "#0e6551",
                    tension: .4
                }]
            }
        });
    </script>

</body>
</html>
