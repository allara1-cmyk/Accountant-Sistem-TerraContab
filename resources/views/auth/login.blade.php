<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - TerraContab</title>
    <link rel="icon" type="image/png" href="{{ asset('https://www.creativefabrica.com/wp-content/uploads/2023/05/29/Letter-TC-Logo-Design-Premium-Concept-Graphics-70868734-1.jpg') }}">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Tus estilos --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body class="auth-bg">

    <div class="auth-overlay d-flex align-items-center justify-content-center">
        <div class="auth-form-container">

            {{-- Logo --}}
            <div class="text-center mb-3">
                <div class="logo-badge">TC</div>
                <h5 class="fw-bold mt-2">TerraContab</h5>
                <p class="text-muted small">Panel contable para gestión de terrenos</p>
            </div>

            {{-- Formulario --}}
            <form method="POST" action="{{ route('login.post') }}">
                @csrf

                <h4 class="fw-semibold mb-3 text-center">Bienvenido de nuevo</h4>

                <label class="form-label">Correo electrónico</label>
                <input type="email" name="email" class="form-control mb-3" placeholder="nombre@correo.com">

                <label class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control mb-2" placeholder="Ingresa tu contraseña">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label for="remember" class="form-check-label small">Recuérdame</label>
                    </div>
                    <a href="#" class="small text-muted">¿Olvidaste tu contraseña?</a>
                </div>

                <button class="btn btn-primary w-100 mb-2">Iniciar sesión</button>

                <button type="button" class="btn btn-light w-100 mb-3 border">
                    G Continuar con Google
                </button>

                <p class="text-center small">
                    ¿No tienes una cuenta?
                    <a href="{{ route('register') }}">Crear cuenta</a>
                </p>
            </form>

        </div>
    </div>

</body>
</html>
