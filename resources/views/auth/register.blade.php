<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear cuenta - TerraContab</title>
    <link rel="icon" type="image/png" href="{{ asset('https://www.creativefabrica.com/wp-content/uploads/2023/05/29/Letter-TC-Logo-Design-Premium-Concept-Graphics-70868734-1.jpg') }}">


    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Tus estilos --}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body class="auth-bg">

    <div class="auth-overlay d-flex align-items-center justify-content-center">
        <div class="auth-form-container">

   
    
            {{-- Formulario --}}
            <form method="POST" action="{{ route('register.post') }}">
                @csrf

                <h4 class="fw-semibold mb-3 text-center">Crear cuenta</h4>

                {{-- Nombre --}}
                <label class="form-label">Nombre completo</label>
                <input
                    type="text"
                    name="name"
                    class="form-control mb-3"
                    required
                    value="{{ old('name') }}"
                    placeholder="Ej. Juan Pérez"
                >

                {{-- Email --}}
                <label class="form-label">Correo electrónico</label>
                <input
                    type="email"
                    name="email"
                    class="form-control mb-3"
                    required
                    value="{{ old('email') }}"
                    placeholder="tucorreo@ejemplo.com"
                >

                {{-- Password --}}
                <label class="form-label">Contraseña</label>
                <input
                    type="password"
                    name="password"
                    class="form-control mb-3"
                    required
                    placeholder="Crea una contraseña segura"
                >

                {{-- Confirm --}}
                <label class="form-label">Confirmar contraseña</label>
                <input
                    type="password"
                    name="password_confirmation"
                    class="form-control mb-4"
                    required
                    placeholder="Repite la contraseña"
                >

                {{-- Botón --}}
                <button class="btn btn-primary w-100 mb-3">
                    Crear cuenta
                </button>

                <p class="text-center small">
                    ¿Ya tienes una cuenta?
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                </p>

            </form>

        </div>
    </div>

</body>
</html>
