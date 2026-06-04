<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidos</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] font-[Inter]">
    <!-- Barra de navegación -->
    <nav class="bg-[#8f511c4d] py-6 px-8 text-black tracking-wide border-b-3 border-[#8b3f0012]">
        <div class="flex flex-row gap-4 items-center justify-between">
            <a class="hover:text-[#9f5910] transition-colors duration-300 font-bold text-lg" href="/dashboard">La Guerra Española</a>
            <div class="[&_a]:hover:bg-[#1f100033] [&_a]:px-4 [&_a]:py-2 [&_a]:rounded-lg [&_a]:transition-colors [&_a]:duration-200">
                <ul class="flex flex-row justify-center items-center gap-8">
                    <li>
                        <a class="flex flex-row gap-2 items-center" href="#">
                            <span>Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a class="flex flex-row gap-2 items-center" href="/logout">
                            <span>Salir</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <section class="px-4 pb-16 pt-6 flex flex-col items-center justify-center h-full gap-6">
        <header class="py-4">
            <div class="flex flex-row gap-4">
                <img src="/public/images/carta atras.png" alt="Carta Atrás" class="w-44 h-60 border-1 border-[#9f9f9f] rounded-3xl hover:scale-105 transition-transform duration-300">
                <img src="/public/images/carta adelante.png" alt="Carta Adelante" class="w-44 h-60 border-1 border-[#9f9f9f] rounded-lg hover:scale-105 transition-transform duration-300">
                <img src="/public/images/carta atras.png" alt="Carta Atrás" class="w-44 h-60 border-1 border-[#9f9f9f] rounded-3xl hover:scale-105 transition-transform duration-300">
            </div>
        </header>
        <article class="flex flex-col gap-4">
            <div>
                <h1 class="text-5xl font-extrabold text-center max-w-lg">Bienvenidos a la Guerra Española</h1>
            </div>
            <div class="mb-4">
                <p class="text-lg font-medium text-center">Un juego de cartas a lo tradicional</p>
            </div>
        </article>
        <footer class="flex flex-row gap-4 justify-center items-center">
            <a href="#" class="bg-[#ad5c19] text-white font-bold px-16 py-2 rounded-full hover:bg-[#c56a1f] transition-colors duration-300 tracking-wide text-lg">Jugar</a>
            <a href="#" class="bg-[#fff1dc] text-black font-bold px-12 py-2 rounded-full hover:bg-[#f1dcbb] transition-colors duration-300 tracking-wide border-1 border-[#8b3f0059] text-lg">Ver Estadísticas</a>
        </footer>
    </section>

    <nav class="bg-linear-to-t from-[#d9b596] via-[#fff1dc] to-[#fff1dc] font-[Inter] py-6 px-8 text-[#323232] tracking-wide text-center border-t-1 border-[#d9b596]">
        <p>Un juego de cartas a lo tradicional</p>
    </nav>
</body>
</html>