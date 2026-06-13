<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablero - La Guerra Española</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#fff1dc] font-[Inter] flex flex-col">
    

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
                    <li class="hidden">
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/perfil">
                            <img class="w-5 sm:w-6 h-5 sm:h-6" src="/assets/icons/profile.svg" alt="Perfil Icon">
                            <span class="font-medium text-sm sm:text-base">Perfil</span>
                        </a>
                    </li>
                    <li class="hidden">
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/tablero">
                            <img class="w-4 sm:w-5 h-4 sm:h-5" src="/assets/icons/card-casino.svg" alt="Icono de tablero">
                            <span class="font-medium text-sm sm:text-base">Tablero</span>
                        </a>
                    </li>
                    <li class="hidden">
                        <a class="flex flex-row items-center gap-1 sm:gap-2" href="/logout">
                            <img class="w-5 sm:w-6 h-5 sm:h-6" src="/assets/icons/sign-out.svg" alt="Icono de salida">
                            <span class="font-medium text-sm sm:text-base">Salir</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Tablero de juego -->
    <main class="flex flex-col px-12 pt-16 pb-12 gap-4 sm:gap-10">

        <section class="flex flex-col md:flex-row gap-8">


            <!-- Área del oponente -->
            <article class="bg-[#d9b59633] rounded-xl py-6 sm:py-2 px-12 border-2 border-[#ad5c19] flex flex-col gap-4 justify-center items-center">
                <div class="flex flex-col gap-2 justify-between items-center">
                    <h2 class="font-bold text-lg text-[#ad5c19]">Oponente</h2>
                    <div class="flex flex-col items-center gap-2">
                        <div class="flex gap-1 relative pointer-events-none">
                            <!-- Corazones vacíos (debajo) -->
                            <div class="flex gap-1">
                                <img class="w-6 h-6" src="/assets/icons/corazon-vacio-32.png" alt="">
                                <img class="w-6 h-6" src="/assets/icons/corazon-vacio-32.png" alt="">
                                <img class="w-6 h-6" src="/assets/icons/corazon-vacio-32.png" alt="">
                            </div>
                            <!-- Corazones llenos (encima, superpuestos) -->
                            <div id="oponente-corazones-llenos" class="flex gap-1 absolute top-0 left-0">
                                <img class="w-6 h-6 corazon-lleno" src="/assets/icons/corazon-lleno-32.png" alt="">
                                <img class="w-6 h-6 corazon-lleno" src="/assets/icons/corazon-lleno-32.png" alt="">
                                <img class="w-6 h-6 corazon-lleno" src="/assets/icons/corazon-lleno-32.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-center gap-4">
                    <div class="w-16 h-24 sm:w-24 sm:h-32 bg-[#ad5c19] rounded-lg shadow-md flex items-center justify-center">
                        <span class="text-[#fff1dc] text-5xl sm:text-6xl">🃟</span>
                    </div>
                    <p class="font-bold">x12</p>
                </div>
            </article>


            <!-- Área central de juego -->
            <article class="flex-1 bg-[#fff1dc] rounded-xl px-2 py-8 border-2 border-[#ad5c19] flex flex-col justify-center items-center gap-4">
                <header class="text-center">
                    <h3 class="font-bold text-2xl text-[#ad5c19] mb-2">Mesa de Juego</h3>
                    <p class="text-gray-600 text-sm">Tu turno - Jugá una carta</p>
                </header>
                
                <div class="flex justify-center items-center gap-8">
                    <!-- Carta jugada por oponente -->
                    <div class="flex flex-col items-center">
                        <p class="text-sm font-semibold text-gray-600 mb-2">Oponente</p>
                        <div class="w-24 h-36 sm:w-32 sm:h-44 bg-white rounded-lg shadow-lg border-2 border-gray-300 flex items-center justify-center">
                            <span class="text-6xl">🂡</span>
                        </div>
                    </div>

                    <!-- VS -->
                    <div class="text-4xl font-bold text-[#ad5c19]">VS</div>

                    <!-- Carta jugada por jugador -->
                    <div class="flex flex-col items-center">
                        <p class="text-sm font-semibold text-gray-600 mb-2">Tú</p>
                        <div class="w-24 h-36 sm:w-32 sm:h-44 bg-white rounded-lg shadow-lg border-2 border-gray-300 flex items-center justify-center">
                            <span class="text-6xl">🂡</span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Área del jugador -->
            <article class="bg-[#d9b59633] rounded-xl py-6 sm:py-2 px-12 border-2 border-[#ad5c19] flex flex-col gap-4 justify-center items-center">
                <div class="flex flex-col gap-2 justify-between items-center">
                    <h2 class="font-bold text-lg text-[#ad5c19]">(Tú)</h2>
                    <div class="flex flex-col items-center gap-2">
                        <div class="flex gap-1 relative pointer-events-none">
                            <!-- Corazones vacíos (debajo) -->
                            <div class="flex gap-1">
                                <img class="w-6 h-6" src="/assets/icons/corazon-vacio-32.png" alt="">
                                <img class="w-6 h-6" src="/assets/icons/corazon-vacio-32.png" alt="">
                                <img class="w-6 h-6" src="/assets/icons/corazon-vacio-32.png" alt="">
                            </div>
                            <!-- Corazones llenos (encima, superpuestos) -->
                            <div id="jugador-corazones-llenos" class="flex gap-1 absolute top-0 left-0">
                                <img class="w-6 h-6 corazon-lleno" src="/assets/icons/corazon-lleno-32.png" alt="">
                                <img class="w-6 h-6 corazon-lleno" src="/assets/icons/corazon-lleno-32.png" alt="">
                                <img class="w-6 h-6 corazon-lleno" src="/assets/icons/corazon-lleno-32.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="flex items-center justify-center gap-4">
                    <div class="w-16 h-24 sm:w-24 sm:h-32 bg-[#ad5c19] rounded-lg shadow-md flex items-center justify-center">
                        <span class="text-[#fff1dc] text-5xl sm:text-6xl">🃟</span>
                    </div>
                    <p class="font-bold">x12</p>
                </div>
            </article>


        </section>

        <!-- Botones de acción -->
        <section class="flex justify-center gap-4">
            <button class="bg-[#ad5c19] hover:bg-[#8b4513] text-white px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transition-all">
                Jugar Carta
            </button>
            <button class="bg-[#fff1dc] hover:bg-[#f1dcbb] text-black border-2 border-[#ad5c19] px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transition-all">
                Pasar Turno
            </button>
            <button class="bg-red-600 hover:bg-red-800 text-white px-8 py-3 rounded-full font-semibold shadow-md hover:shadow-lg transition-all">
                Rendirse
            </button>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-linear-to-t from-[#d9b596] via-[#fff1dc] to-[#fff1dc] px-8 py-6 border-[#d9b596] border-t-1 font-[Inter] text-[#323232] text-center tracking-wide">
        <p class="font-semibold mb-2">Un juego de cartas a lo tradicional</p>
    </footer>

</body>
</html>
