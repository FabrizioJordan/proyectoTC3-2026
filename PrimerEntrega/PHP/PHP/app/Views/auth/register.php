<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light min-vh-100 d-flex align-items-center justify-content-center">

    <div class="card shadow p-4 p-md-5 border-0 rounded-4" style="max-width: 420px; width: 100%;">

        <div class="text-center mb-4">
            <h1 class="fw-semibold fs-3">Crear Cuenta</h1>
            <p class="text-muted">Completá tus datos para registrarte</p>
        </div>

        <form action="/register" method="post">

            <div class="mb-3">
                <label for="nomape" class="form-label fw-medium">Nombre y Apellido</label>
                <div class="input-group">
                    <span class="input-group-text">📝</span>
                    <input type="text" id="nomape" name="nomape"
                           class="form-control" placeholder="Juan Pérez" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="nickname" class="form-label fw-medium">Usuario</label>
                <div class="input-group">
                    <span class="input-group-text">👤</span>
                    <input type="text" id="nickname" name="nickname"
                           class="form-control" placeholder="Tu usuario" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-medium">Email</label>
                <div class="input-group">
                    <span class="input-group-text">📧</span>
                    <input type="email" id="email" name="email"
                           class="form-control" placeholder="ejemplo@correo.com" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="contra" class="form-label fw-medium">Contraseña</label>
                <div class="input-group">
                    <span class="input-group-text">🔒</span>
                    <input type="password" id="contra" name="contra"
                           class="form-control" placeholder="Mínimo 8 caracteres" required>
                    <button type="button" class="btn btn-outline-secondary"
                            onclick="togglePassword()">👁</button>
                </div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="terminos" name="terminos" value="1" required>
                <label class="form-check-label" for="terminos">
                    Acepto los <a href="#" class="text-primary">términos y condiciones</a>
                </label>
            </div>

            <button type="submit" class="btn btn-primary w-100 py-2 mt-1 fw-semibold">
                Registrarse
            </button>

        </form>

        <div class="text-center mt-4 text-muted small">
            ¿Ya tenés cuenta? <a href="/login" class="text-primary text-decoration-none fw-medium">Iniciá sesión</a>
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