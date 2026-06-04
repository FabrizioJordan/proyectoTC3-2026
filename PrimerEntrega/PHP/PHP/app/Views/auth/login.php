<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light min-vh-100 d-flex align-items-center justify-content-center">

    <div class="card shadow p-4 p-md-5 border-0 rounded-4" style="max-width: 380px; width: 100%;">

        <div class="text-center mb-4">
            <h1 class="fw-semibold fs-3">Iniciar Sesión</h1>
            <p class="text-muted">Ingresa tus credenciales para acceder a tu cuenta</p>
        </div>

        <form action="/login" method="post">

            <div class="mb-3">
                <label for="email" class="form-label fw-medium">Email</label>
                <div class="input-group">
                    <span class="input-group-text">📧</span>
                    <input type="email" id="email" name="email"
                           class="form-control" placeholder="ejemplo@correo.com" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label fw-medium">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text">👤</span>
                    <input type="text" id="nombre" name="nombre"
                           class="form-control" placeholder="Tu usuario" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="contra" class="form-label fw-medium">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text">🔒</span>
                    <input type="password" id="contra" name="contra"
                           class="form-control" placeholder="contraseña" required>
                    <button type="button" class="btn btn-outline-secondary"
                            onclick="togglePassword()">👁</button>
                </div>
                <div class="text-end mt-2">
                    <a href="#" class="text-primary text-decoration-none small">¿Olvidaste tu contraseña?</a>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 mt-1 fw-semibold">
                Iniciar Sesión
            </button>

        </form>

        <div class="text-center mt-4 text-muted small">
            ¿No tienes una cuenta? <a href="/register" class="text-primary text-decoration-none fw-medium">Regístrate aquí</a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function togglePassword() {
            const input = document.getElementById('contra');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>