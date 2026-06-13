<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] py-8 flex items-center justify-center">

    <div class="bg-white shadow-lg min-w-full sm:min-w-auto min-h-[100vh] sm:min-h-auto py-6 px-16 sm:px-8 sm:py-6 md:px-10 md:py-6 border-0 sm:border-1 sm:border-[#ad5c19] rounded-none sm:rounded-3xl py-6">

        <div class="text-center pb-4">
            <h1 class="font-semibold text-4xl text-[#ad5c19] pb-2">Crear Cuenta</h1>
            <p class="text-gray-600">Completá con tus datos para registrarte</p>
        </div>

        <form action="/register" method="post">

            <div class="mb-3">
                <label for="nomape" class="block text-sm font-semibold text-gray-700 mb-1">Nombre y Apellido</label>
                <div class="flex">
                    <span class="flex items-center justify-center px-3 bg-[#fff1dc] border border-r-0 border-[#ad5c19] rounded-l-lg text-gray-600">📝</span>
                    <input type="text" id="nomape" name="nomape"
                           class="flex-1 px-3 py-2 border border-[#ad5c19] rounded-r-lg focus:outline-none focus:ring-2 focus:ring-[#ad5c19]" placeholder="Nombre Apellido" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="nickname" class="block text-sm font-semibold text-gray-700 mb-1">Usuario</label>
                <div class="flex">
                    <span class="flex items-center justify-center px-3 bg-[#fff1dc] border border-r-0 border-[#ad5c19] rounded-l-lg text-gray-600">👤</span>
                    <input type="text" id="nickname" name="nickname"
                           class="flex-1 px-3 py-2 border border-[#ad5c19] rounded-r-lg focus:outline-none focus:ring-2 focus:ring-[#ad5c19]" placeholder="Usuario" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-1">Correo electrónico</label>
                <div class="flex">
                    <span class="flex items-center justify-center px-3 bg-[#fff1dc] border border-r-0 border-[#ad5c19] rounded-l-lg text-gray-600">📧</span>
                    <input type="email" id="email" name="email"
                           class="flex-1 px-3 py-2 border border-[#ad5c19] rounded-r-lg focus:outline-none focus:ring-2 focus:ring-[#ad5c19]" placeholder="ejemplo@correo.com" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="contra" class="block text-sm font-semibold text-gray-700 mb-1">Contraseña</label>
                <div class="flex">
                    <span class="flex items-center justify-center px-3 bg-[#fff1dc] border border-r-0 border-[#ad5c19] rounded-l-lg text-gray-600">🔒</span>
                    <input type="password" id="contra" name="contra"
                           class="flex-1 px-3 py-2 border border-[#ad5c19] rounded-r-none focus:outline-none focus:ring-2 focus:ring-[#ad5c19]" placeholder="Mínimo 8 caracteres" required>
                    <button type="button" id="toggleBtn" class="px-3 py-2 border border-[#ad5c19] rounded-r-lg hover:bg-[#c56a1f] hover:text-white transition-colors active:bg-[#c56a1f]"
                    onclick="togglePassword()">👁</button>
                </div>
            </div>

            <div class="mb-3">
                <div class="flex flex-row gap-2 items-center">
                    <input type="checkbox" class="w-4 h-4 text-[#ad5c19] border-gray-300 rounded focus:ring-[#ad5c19]" id="terminos" name="terminos" value="1" required>
                    <label class="text-sm text-gray-700 font-semibold" for="terminos">
                        Acepto los <a href="#" class="text-[#ad5c19] hover:text-[#9f5910] transition-colors">términos y condiciones</a>
                    </label>
                </div>
            </div>

            <button type="submit" class="bg-[#ad5c19] text-white w-full py-2 font-semibold rounded-lg hover:bg-[#c56a1f] transition-colors duration-300 tracking-wide border-2 border-transparent cursor-pointer hover:border-[#6b3000] shadow-[8px_6px_8px_-2px_rgba(0,_0,_0,_0.1)]">
                Registrarse
            </button>

        </form>

        <div class="text-center mt-4 text-gray-600 text-sm font-semibold">
            ¿Ya tenés cuenta? <a href="/login" class="text-[#ad5c19] no-underline font-medium hover:text-[#9f5910] transition-colors font-semibold hover:underline transition-all duration-200">Iniciá sesión</a>
        </div>

    </div>

    <script>
        function togglePassword() {
            const input = document.getElementById('contra');
            const btn = document.getElementById('toggleBtn');
            const mostrar = input.type === 'password';

            input.type = mostrar ? 'text' : 'password';
            btn.textContent = mostrar ? '🙈' : '👁';
        }
    </script>
</body>
</html>