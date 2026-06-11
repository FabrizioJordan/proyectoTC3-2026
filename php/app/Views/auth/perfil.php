<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Perfi</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] font-[Inter]">
    <!-- Barra de navegación -->
    <header class="bg-[#8f511c4d] px-6 py-6 border-[#8b3f0012] border-b-3 text-black tracking-wide">
        <div class="flex flex-row justify-between items-center gap-1 sm:gap-4">
            <a class="font-bold hover:text-[#9f5910] text-base sm:text-lg md:text-xl transition-colors duration-300" href="/dashboard">La Guerra Española</a>
            <div class="[&_a]:hover:bg-[#1f100033] [&_a]:md:px-4 [&_a]:px-2 [&_a]:md:py-2 [&_a]:py-2 [&_a]:rounded-lg text-black [&_a]:transition-colors [&_a]:duration-200" id="">
                <ul class="flex flex-row justify-center items-center gap-1 sm:gap-4 md:gap-8">
                    <li class="">
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/dashboard">
                            <img class="w-5 sm:w-6 h-5 sm:h-6" src="/assets/icons/house.svg" alt="Icono de una casa para ir al inicio">
                            <span class="font-medium text-sm sm:text-base">Inicio</span>
                        </a>
                    </li>
                    <li class="" hidden>
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
    <main class="text-black flex flex-row items-start justify-between px-14 md:px-36 my-8"> 
        <div class="py-4 flex flex-col gap-24 text-left justify-start items-start"><!-- conenido a la izquierda-->

            <article class="flex flex-col gap-8 md:gap-12 justify-start items-start"> 

                    <header class="flex flex-row gap-4 md:gap-8 items-center justify-center">
                        <div class="pt-1"> <!-- div de Foto de perfil  -->
                            <img class="w-20 h-20 sm:w-24 sm:h-24 lg:w-32 lg:h-32 rounded-full border-2 border-[#ad5c19]" src="/assets/images/perfil-imagen.png" alt="">
                        </div>  
                        
                        <div class="flex flex-col gap-1 md:gap-2 lg:gap-4">
                            <h3 class="text-xl md:text-4xl font-bold">JugadorNombre</h3>
                            <h4 class="text-lg md:text-2xl font-bold">NombrePublico</h4>
                        </div>
                    </header>
                
                    <div class="flex flex-col gap-6 md:gap-8 [&_button]:px-10 [&_button]:py-2 [&_button]:rounded-full [&_button]:bg-[#ad5c19] [&_button]:text-white [&_button]:hover:bg-[#c56a1f] [&_button]:transition-colors [&_button]:duration-300 [&_button]:tracking-wide [&_button]:text-sm [&_button]:md:text-base [&_button]:font-semibold [&_button]:md:font-bold [&_button]:border-2 [&_button]:border-transparent [&_button]:hover:border-[#6b3000] [&_button]:shadow-[8px_6px_8px_-2px_rgba(0,_0,_0,_0.1)]">
                            <div class="cursor-not-allowed w-fit">
                                <button class="cursor-not-allowed pointer-events-none select-none">Cambiar Foto de Perfil</button>
                            </div>
                            <div class="cursor-not-allowed w-fit">
                                <button class=" pointer-events-none select-none">Cambiar Nombre Público</button>
                            </div>
                            <div class="cursor-not-allowed w-fit">
                                <button class=" pointer-events-none select-none">Poner Cartas Personalizadas</button>
                            </div>
                    </div>

                    <footer class="flex flex-col gap-4">
                        <p class="text-3xl font-bold">Estadísticas</p>
                        <p class="text-lg">Ratio de victorias: <span class="text-[#ad5c19]">0%</span></p>
                        <p class="text-lg">Ganados / Perdidos: <span class="text-[#ad5c19]">0 / 0</span></p>

                        <div class="flex flex-col gap-3">
                            <a href="/estadisticas" class="bg-blue-600 hover:bg-blue-800 text-white border-2 border-blue-800 rounded-full transition-all duration-300 py-2 px-8 font-semibold text-sm md:text-base shadow-md hover:shadow-lg">
                                Ver estadísticas detalladas
                            </a>
                        </div>
                    </footer>                    

            </article>
        </div>
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
