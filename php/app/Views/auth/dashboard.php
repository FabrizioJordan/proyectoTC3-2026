<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] font-[Inter]">
    <!-- Barra de navegación -->
    <nav class="bg-[#8f511c4d] px-6 py-6 border-[#8b3f0012] border-b-3 text-black tracking-wide">
        <div class="flex flex-row justify-between items-center gap-1 sm:gap-4">
            <a class="font-bold hover:text-[#9f5910] text-base sm:text-lg md:text-xl transition-colors duration-300" href="#">La Guerra Española</a>
            <div class="[&_a]:hover:bg-[#1f100033] [&_a]:md:px-4 [&_a]:px-2 [&_a]:md:py-2 [&_a]:py-2 [&_a]:rounded-lg text-black [&_a]:transition-colors [&_a]:duration-200" id="">
                <ul class="flex flex-row justify-center items-center gap-1 sm:gap-4 md:gap-8">
                    <li class="hidden">
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/dashboard">
                            <img class="w-5 sm:w-6 h-5 sm:h-6" src="/assets/icons/house.svg" alt="Icono de una casa para ir al inicio">
                            <span class="font-medium text-sm sm:text-base">Inicio</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/perfil">
                            <img class="w-5 sm:w-6 h-5 sm:h-6" src="/assets/icons/profile.svg" alt="Perfil Icon">
                            <span class="font-medium text-sm sm:text-base">Perfil</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/logout">
                            <img class="w-5 sm:w-6 h-5 sm:h-6" src="/assets/icons/sign-out.svg" alt="Icono de salida">
                            <span class="font-medium text-sm sm:text-base">Salir</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <section class="flex flex-col justify-center items-center gap-6 px-4 pt-6 pb-16 h-full">
        <header class="flex flex-col gap-4 py-4">

            <!-- Carta con efecto de volteo - Frente emoji, reverso imagen licenciada -->
            <section class="flex flex-row flex-wrap items-center gap-4" >

                <!-- Método 2: Click para voltear con JavaScript -->
                <div class="w-24 sm:w-36 h-36 sm:h-52" style="perspective: 1000px;">
                    <div class="relative w-full h-full transition-transform duration-500 cursor-pointer" style="transform-style: preserve-3d;" onclick="this.style.transform=this.style.transform==='rotateY(180deg)'?'rotateY(0deg)':'rotateY(180deg)'">
                        <div class="absolute flex justify-center items-center bg-[#1E3A8A] shadow-lg border-[#1E3A8A] border-2 rounded-lg w-full h-full" style="backface-visibility: hidden;">
                            <span class="font-normal text-[#93C5FD] text-7xl sm:text-9xl">🃟</span>
                        </div>
                        <div class="absolute shadow-lg rounded-lg w-full h-full overflow-hidden" style="backface-visibility: hidden; transform: rotateY(180deg);">
                            <img src="/assets/images/cartas/c_c_12.png" alt="Rey de Copas" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Método 4 x1: Scale y Rotate con CSS -->
                <div class="w-24 sm:w-36 h-36 sm:h-52 flip-card">
                    <div class="flip-card-inner">
                        <div class="flex justify-center items-center bg-[#ad5c19] shadow-lg border-[#ad5c19] border-2 rounded-lg flip-card-front">
                            <span class="font-normal text-[#fff1dc] text-7xl sm:text-9xl">🃟</span>
                        </div>
                        <div class="shadow-lg rounded-none overflow-hidden flip-card-back">
                            <img src="/assets/images/cartas/c_b_7.png" alt="Siete de Bastos" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Método 4 x2: Scale y Rotate con CSS -->
                <div class="w-24 sm:w-36 h-36 sm:h-52 flip-card">
                    <div class="flip-card-inner">
                        <div class="flex justify-center items-center bg-[#ad5c19] shadow-lg border-[#ad5c19] border-2 rounded-lg flip-card-front">
                            <span class="font-normal text-[#FFD700] text-7xl sm:text-9xl">🃟</span>
                        </div>
                        <div class="shadow-lg rounded-none overflow-hidden flip-card-back">
                            <img src="/assets/images/cartas/c_b_7.png" alt="Siete de Bastos" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </section>

            <style>
                .flip-card {
                    perspective: 1000px;
                }
                .flip-card-inner {
                    position: relative;
                    width: 100%;
                    height: 100%;
                    transition: transform 0.6s;
                    transform-style: preserve-3d;
                }
                .flip-card:hover .flip-card-inner {
                    transform: rotateY(180deg);
                }
                .flip-card-front, .flip-card-back {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    backface-visibility: hidden;
                }
                .flip-card-back {
                    transform: rotateY(180deg);
                }
            </style>
            <section class="flex justify-center items-center py-8">
            <div class="relative w-48 h-72">
                <div class="top-0 left-0 absolute bg-white shadow-md border-2 border-gray-300 rounded-lg w-48 h-72"></div>
                <div class="top-2 left-4 absolute bg-white shadow-md border-2 border-gray-300 rounded-lg w-48 h-72"></div>
                <div class="top-4 left-8 absolute bg-white shadow-md border-2 border-gray-300 rounded-lg w-48 h-72 rota"></div>
            </div>
        </section>
        </header>
        <article class="flex flex-col gap-4">
            <div>
                <h1 class="max-w-sm max-w-md md:max-w-lg font-extrabold text-2xl sm:text-3xl md:text-5xl text-center">Bienvenidos a la Guerra Española</h1>
            </div>
            <div class="mb-4">
                <p class="font-medium text-sm sm:text-base md:text-lg text-center">Un juego de cartas a lo tradicional</p>
            </div>
        </article>
        <footer class="flex flex-row justify-center items-center gap-4 [&>A]:px-10 [&>A]:sm:px-16 [&>A]:py-2 [&>A]:rounded-full [&>A]:font-semibold [&>A]:sm:font-bold [&>A]:text-base [&>A]:sm:text-lg [&>A]:tracking-wide">
            <a href="juego/tablero.php" class="bg-[#ad5c19] hover:bg-[#c56a1f] shadow-[8px_6px_8px_-2px_rgba(0,_0,_0,_0.1)] border-2 border-transparent hover:border-[#6b3000] text-white transition-colors duration-300">Jugar</a>
            <a href="/estadisticas" class="bg-[#fff1dc] hover:bg-[#f1dcbb] shadow-[8px_6px_8px_-2px_rgba(0,_0,_0,_0.1)] border-[#8b3f0059] border-1 text-black transition-colors duration-300">Ver Estadísticas</a>
        </footer>
    </section>

    <nav class="bg-linear-to-t from-[#d9b596] via-[#fff1dc] to-[#fff1dc] px-8 py-6 border-[#d9b596] border-t-1 font-[Inter] text-[#323232] text-center tracking-wide">
        <p>Un juego de cartas a lo tradicional</p>
    </nav>
</body>
</html>
