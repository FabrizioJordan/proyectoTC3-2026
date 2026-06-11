<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus estadísticas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] font-[Inter] text-black">
    <!-- Barra de navegación -->
    <header class="bg-[#8f511c4d] px-6 py-6 border-[#8b3f0012] border-b-3 text-black tracking-wide">
        <div class="flex flex-row justify-between items-center gap-1 sm:gap-4">
            <a class="font-bold hover:text-[#9f5910] text-base sm:text-lg md:text-xl transition-colors duration-300" href="/dashboard">La Guerra Española</a>
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
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/tablero">
                            <img class="w-4 sm:w-5 h-4 sm:h-5" src="/assets/icons/card-casino.svg" alt="Icono de tablero">
                            <span class="font-medium text-sm sm:text-base">Tablero</span>
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
    </header>

    <!-- Contenido principal -->
    <main class="flex flex-row justify-between items-start my-8 px-14 md:px-36 text-black"> 
        <section class="flex flex-col justify-start items-start gap-12 py-4 text-left"><!-- conenido a la izquierda-->

            <article class="flex flex-col justify-start items-start gap-8">
                <div class="md:hidden block w-full">
                    <a href="/dashboard" class="inline-flex items-center gap-2 bg-[#ad5c19] hover:bg-[#8b4513] shadow-md hover:shadow-lg px-4 py-2 border-[#8b4513] border-2 rounded-lg font-semibold text-white text-sm transition-all duration-300">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Volver al inicio
                    </a>
                </div>

                <header class="flex flex-row justify-center items-center gap-4 md:gap-8">
                    <div class="pt-1"> <!-- div de Foto de perfil  -->
                        <img class="border-[#ad5c19] border-2 rounded-full w-20 sm:w-24 lg:w-32 h-20 sm:h-24 lg:h-32" src="/assets/images/perfil-imagen.png" alt="">
                    </div>  
                    
                    <div class="flex flex-col gap-1 md:gap-2 lg:gap-4">
                        <h3 class="font-bold text-xl md:text-4xl">JugadorNombre</h3>
                        <h4 class="font-bold text-lg md:text-2xl">NombrePublico</h4>
                    </div>
                </header>

            </article>
            <article class="flex flex flex-col gap-4 gap-6">
                <header>
                    <h4 class="font-bold text-2xl sm:text-3xl md:text-4xl">Historial del Jugador</h4>
                </header>
                
                <div>
                    <div class="flex flex-col items-start gap-3">
                        <button class="bg-blue-600 hover:bg-blue-800 shadow-md hover:shadow-lg px-10 py-2 border-2 border-blue-800 rounded-full font-semibold text-white text-sm transition-all duration-300">
                            Recargar Estadísticas
                        </button>
                    </div>
                </div>

                <hr class="border-[#ad5c19]">
                
                <footer class="flex flex-col gap-3 font-semibold text-lg">
                    <h5 class="font-bold text-2xl">Estadísticas Generales</h5>

                    <p>Ratio de Victorias: <span class="text-[#ad5c19]">0%</span></p>

                    <p class="text-sm">Partidas Jugadas: <span class="text-[#ad5c19]">0</span></p>
                    <p class="text-sm">Partidas Ganadas: <span class="text-[#ad5c19]">0</span></p>
                    <p class="text-sm">Partidas Perdidas: <span class="text-[#ad5c19]">0</span></p>
                </footer>
            </article>

        </section>

        <div class="hidden lg:flex flex-col gap-4 pt-6"> <!-- contenido a la derecha-->
            <div class="w-44 h-68 flip-card">
                <div class="flip-card-inner">
                        <div class="flex justify-center items-center bg-[#ad5c19] shadow-lg border-[#ad5c19] border-2 rounded-lg flip-card-front">
                            <span class="font-normal text-[#fff1dc] text-9xl">🃟</span>
                        </div>
                        <div class="shadow-lg rounded-none overflow-hidden flip-card-back">
                            <img src="/assets/images/cartas/c_b_7.png" alt="Siete de Bastos" class="w-full h-full object-cover">
                        </div>
                </div>
            </div>
            <div class="w-44 h-68 flip-card">
                    <div class="flip-card-inner">
                        <div class="flex justify-center items-center bg-[#ad5c19] shadow-lg border-[#ad5c19] border-2 rounded-lg flip-card-front">
                            <span class="font-normal text-[#fff1dc] text-9xl">🃟</span>
                        </div>
                        <div class="shadow-lg rounded-none overflow-hidden flip-card-back">
                            <img src="/assets/images/cartas/c_e_10.png" alt="Siete de Bastos" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
        </div>
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
    </main>

</body>
</html>
