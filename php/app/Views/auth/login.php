<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-lg min-w-full sm:min-w-auto min-h-[100vh] sm:min-h-auto py-14 px-16 sm:px-8 sm:py-8 md:px-10 md:py-10 border-0 sm:border-1 sm:border-[#ad5c19] rounded-none sm:rounded-3xl">

        <div class="text-center pb-4">
            <h1 class="font-semibold text-4xl text-[#ad5c19] pb-2">Iniciar Sesión</h1>
            <p class="text-gray-600">Ingresa tus credenciales para acceder a tu cuenta</p>
        </div>

        <form action="/login" method="post">

            <div class="mb-3">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Correo electrónico</label>
                <div class="flex">
                    <span class="flex items-center justify-center px-3 bg-[#fff1dc] border border-r-0 border-[#ad5c19] rounded-l-lg text-gray-600">📧</span>
                    <input type="email" id="email" name="email"
                           class="flex-1 px-3 py-2 border border-[#ad5c19] rounded-r-lg focus:outline-none focus:ring-2 focus:ring-[#ad5c19]" placeholder="ejemplo@correo.com" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="nombre" class="block text-sm font-semibold text-gray-700 mb-1">Usuario</label>
                <div class="flex">
                    <span class="flex items-center justify-center px-3 bg-[#fff1dc] border border-r-0 border-[#ad5c19] rounded-l-lg text-gray-600">👤</span>
                    <input type="text" id="nombre" name="nombre"
                           class="flex-1 px-3 py-2 border border-[#ad5c19] rounded-r-lg focus:outline-none focus:ring-2 focus:ring-[#ad5c19]" placeholder="Usuario" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="contra" class="block text-sm font-semibold text-gray-700 mb-1">Contraseña</label>
                <div class="flex">
                    <span class="flex items-center justify-center px-3 bg-[#fff1dc] border border-r-0 border-[#ad5c19] rounded-l-lg text-gray-600">🔒</span>
                    <input type="password" id="contra" name="contra"
                           class="flex-1 px-3 py-2 border border-[#ad5c19] rounded-r-none focus:outline-none focus:ring-2 focus:ring-[#ad5c19]" placeholder="Contraseña" required>
                    <button type="button" class="px-3 py-2 border border-[#ad5c19] rounded-r-lg hover:bg-[#c56a1f] hover:text-white transition-colors"
                            onclick="togglePassword()">👁</button>
                </div>
                <div class="text-right mt-2">
                    <a href="#" class="text-[#ad5c19] no-underline text-sm hover:text-[#9f5910] transition-colors font-semibold hover:underline transition-all duration-200">¿Olvidaste tu contraseña?</a>
                </div>
            </div>

            <button type="submit" class="bg-[#ad5c19] text-white w-full py-2 font-semibold rounded-lg hover:bg-[#c56a1f] transition-colors duration-300 tracking-wide border-2 border-transparent cursor-pointer hover:border-[#6b3000] shadow-[8px_6px_8px_-2px_rgba(0,_0,_0,_0.1)]">
                Iniciar Sesión
            </button>

        </form>

        <div class="text-center mt-4 text-gray-600 text-sm font-semibold">
            ¿No tienes una cuenta? <a href="/register" class="text-[#ad5c19] no-underline font-medium hover:text-[#9f5910] transition-colors font-semibold hover:underline transition-all cursor-pointer duration-200">Regístrate aquí</a>
        </div>

    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('contra');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>