@extends('layouts.dasboard')
@section('content')
    {{-- CONTENIDO PRINCIPAL --}}
    <div>

        {{-- TOPBAR TIPO IMAGEN --}}
        <header class="topbar">

            <div class="topbar-user">
                <span>{{ auth()->user()->name }}</span>
                <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="user-avatar">
            </div>
        </header>

        <section class="dash-content container-fluid">

            {{-- SECCIÓN DE ANALYTICS --}}
            <div class="row g-4 mb-3">

                {{-- TARJETA DE BARRAS --}}
                <div class="col-lg-8">
                    <div class="card dash-card analytics-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h6 class="card-title">Analytics</h6>
                                <button class="analytics-btn">3 Months</button>
                            </div>

                            <canvas id="chartAnalytics" height="140"></canvas>
                        </div>
                    </div>
                </div>

                {{-- TARJETA DE KPI --}}
                <div class="col-lg-4">
                    <div class="card dash-card kpi-card">
                        <div class="card-body">
                            <h6 class="card-title">Resumen de ventas</h6>

                            <div class="kpi-list">
                                <div class="kpi-item">
                                    <h3>230</h3>
                                    <p>Lotes vendidos</p>
                                </div>

                                <div class="kpi-item">
                                    <h3>2</h3>
                                    <p>Proyectos activos</p>
                                </div>

                                <div class="kpi-item">
                                    <h3>1500</h3>
                                    <p>Clientes registrados</p>
                                </div>
                            </div>

                            <canvas id="chartLine" height="110"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            {{-- SECCIÓN VISITORS + PROGRESOS --}}
            <div class="row g-4">

                {{-- TARJETA VISITORS --}}
                <div class="col-lg-8">
                    <div class="card dash-card visitors-card">
                        <div class="card-body">
                            <h6 class="card-title">Visitors</h6>

                            <div class="row text-center mt-2">
                                <div class="col">
                                    <h4>12.9K</h4>
                                    <p class="text-muted small">Visitas totales</p>
                                </div>
                                <div class="col">
                                    <h4>212.9K</h4>
                                    <p class="text-muted small">Tiempo leído</p>
                                </div>
                                <div class="col">
                                    <h4>65%</h4>
                                    <p class="text-muted small">Retención</p>
                                </div>
                                <div class="col">
                                    <h4>1m 45s</h4>
                                    <p class="text-muted small">Promedio sesión</p>
                                </div>
                            </div>

                            <canvas id="chartVisitors" height="110"></canvas>
                        </div>
                    </div>
                </div>

                {{-- TARJETA PROGRESOS --}}
                <div class="col-lg-4">
                    <div class="card dash-card progress-card">
                        <div class="card-body">
                            <h6 class="card-title">Estado de proyectos</h6>

                            <div class="progress-item">
                                <span>Proyecto A</span>
                                <div class="progress"><div class="progress-bar bg-success" style="width: 85%"></div></div>
                            </div>

                            <div class="progress-item">
                                <span>Proyecto B</span>
                                <div class="progress"><div class="progress-bar bg-info" style="width: 40%"></div></div>
                            </div>

                            <div class="progress-item">
                                <span>Proyecto C</span>
                                <div class="progress"><div class="progress-bar bg-warning" style="width: 65%"></div></div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </section>

    </div>

@endsection

