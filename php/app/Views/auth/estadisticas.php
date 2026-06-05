<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus estadísticas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] text-black font-[Inter]">
    <!-- Barra de navegación -->
    <nav class="bg-[#8f511c4d] py-6 px-6 text-black tracking-wide border-b-3 border-[#8b3f0012]">
        <div class="flex flex-row gap-1 sm:gap-4 items-center justify-between">
            <a class="hover:text-[#9f5910] transition-colors duration-300 font-bold text-base sm:text-lg md:text-xl" href="#">La Guerra Española</a>
            <div class="[&_a]:hover:bg-[#1f100033] [&_a]:px-2 [&_a]:py-2 [&_a]:md:px-4 [&_a]:md:py-2 [&_a]:rounded-lg [&_a]:transition-colors [&_a]:duration-200 text-black" id="">
                <ul class="flex flex-row justify-center items-center gap-1 sm:gap-4 md:gap-8">
                    <li class="hidden md:block">
                        <a class="flex flex-row gap-1 sm:gap-2 items-center" href="/dashboard">
                            <img class="sm:w-6 sm:h-6 w-5 h-5" src="/assets/icons/house.svg" alt="Icono de una casa para ir al inicio">
                            <span class="text-sm sm:text-base font-medium">Inicio</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="flex flex-row gap-1 sm:gap-2 items-center" href="/perfil">
                            <img class="sm:w-6 sm:h-6 w-5 h-5" src="/assets/icons/profile.svg" alt="Perfil Icon">
                            <span class="text-sm sm:text-base font-medium">Perfil</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="flex flex-row gap-1 sm:gap-2 items-center" href="/logout">
                            <img class="sm:w-6 sm:h-6 w-5 h-5" src="/assets/icons/sign-out.svg" alt="Icono de salida">
                            <span class="text-sm sm:text-base font-medium">Salir</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido principal -->
    <main class="flex flex-row items-start justify-between px-14 md:px-36 my-8 text-black"> 
        <section class="py-4 flex flex-col gap-12 text-left justify-start items-start"><!-- conenido a la izquierda-->

            <article class="flex flex-col gap-8 justify-start items-start">
                <div class="w-full block md:hidden">
                    <a href="/dashboard" class="inline-flex items-center gap-2 bg-[#ad5c19] hover:bg-[#8b4513] text-white border-2 border-[#8b4513] rounded-lg transition-all duration-300 py-2 px-4 font-semibold text-sm shadow-md hover:shadow-lg">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Volver al inicio
                    </a>
                </div>

                <header class="flex flex-row gap-4 md:gap-8 items-center justify-center">
                    <div class="pt-1"> <!-- div de Foto de perfil  -->
                        <img class="w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 rounded-full border-2 border-[#ad5c19]" src="/assets/images/perfil-imagen.png" alt="">
                    </div>  
                    
                    <div class="flex flex-col gap-1 md:gap-2 lg:gap-4">
                        <h3 class="text-xl md:text-4xl font-bold">JugadorNombre</h3>
                        <h4 class="text-lg md:text-2xl font-bold">NombrePublico</h4>
                    </div>
                </header>

            </article>
            <article class="flex flex flex-col gap-6 gap-4">
                <header>
                    <h4 class="text-2xl sm:text-3xl md:text-4xl font-bold">Historial del Jugador</h4>
                </header>
                
                <div>
                    <div class="flex flex-col gap-3 items-start">
                        <button class="bg-blue-600 hover:bg-blue-800 text-white border-2 border-blue-800 rounded-full transition-all duration-300 py-2 px-10 font-semibold text-sm shadow-md hover:shadow-lg">
                            Recargar Estadísticas
                        </button>
                    </div>
                </div>

                <hr class="border-[#ad5c19]">
                
                <footer class="flex flex-col gap-3 text-lg font-semibold">
                    <h5 class="text-2xl font-bold">Estadísticas Generales</h5>

                    <p>Ratio de Victorias: <span class="text-[#ad5c19]">0%</span></p>

                    <p class="text-sm">Partidas Jugadas: <span class="text-[#ad5c19]">0</span></p>
                    <p class="text-sm">Partidas Ganadas: <span class="text-[#ad5c19]">0</span></p>
                    <p class="text-sm">Partidas Perdidas: <span class="text-[#ad5c19]">0</span></p>
                </footer>
            </article>

        </section>

        <section class="py-8 flex justify-center items-center">
            <div class="relative w-48 h-72">
                <div class="absolute top-0 left-0 w-48 h-72 bg-white border-2 border-gray-300 rounded-lg shadow-md"></div>
                <div class="absolute top-2 left-4 w-48 h-72 bg-white border-2 border-gray-300 rounded-lg shadow-md"></div>
                <div class="absolute top-4 left-8 w-48 h-72 bg-white border-2 border-gray-300 rounded-lg shadow-md"></div>
            </div>
        </section>

        <div class="hidden lg:flex flex-col gap-4 pt-6"> <!-- contenido a la derecha-->
            <div class="flip-card w-44 h-68">
                <div class="flip-card-inner">
                        <div class="flip-card-front bg-[#ad5c19] rounded-lg shadow-lg border-2 border-[#ad5c19] flex items-center justify-center">
                            <span class="text-9xl text-[#fff1dc] font-normal">🃟</span>
                        </div>
                        <div class="flip-card-back rounded-none shadow-lg overflow-hidden">
                            <img src="/assets/images/cartas/c_b_7.png" alt="Siete de Bastos" class="w-full h-full object-cover">
                        </div>
                </div>
            </div>
            <div class="flip-card w-44 h-68">
                    <div class="flip-card-inner">
                        <div class="flip-card-front bg-[#ad5c19] rounded-lg shadow-lg border-2 border-[#ad5c19] flex items-center justify-center">
                            <span class="text-9xl text-[#fff1dc] font-normal">🃟</span>
                        </div>
                        <div class="flip-card-back rounded-none shadow-lg overflow-hidden">
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
