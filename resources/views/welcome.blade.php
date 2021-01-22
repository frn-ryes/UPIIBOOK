<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">

        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">


                <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="lg:w-2/6 md:w-3/6 w-5/6 mb-3 object-cover object-center rounded">
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <path d="m504.001 128.179-495 1.001v284.492h495z" fill="#9bb6f1"/>
                                    </g>
                                    <g><path d="m31.383 391.043v-261.908l-22.382.045v284.492h495v-22.629z" fill="#6990eb"/>
                                    </g>
                                    <g>
                                        <path d="m311.257 98.328c-20.592 0-40.333 8.219-54.84 22.833l-.5 239.676 5.461-4.797c12.867-11.303 29.408-17.536 46.534-17.536h165.5v-240.176z" fill="#fbf2e2"/>
                                    </g>
                                    <g>
                                        <path d="m307.912 316.172c-10.462 0-20.7 2.337-30.021 6.724 0 0 .442-211.741.442-211.741 3.727-3.754 7.803-7.078 12.146-9.958-12.779 3.569-24.549 10.38-34.063 19.964 0 0-.5 239.676-.5 239.677 10.639-10.212 23.681-18.326 38.343-20.983 3.161-3.007 179.152-1.35 179.152-1.35v-22.333z" fill="#f7e0ba"/>
                                    </g>
                                    <g>
                                        <path d="m200.993 98.328c20.592 0 40.333 8.219 54.84 22.833l.5 239.676-5.461-4.797c-12.867-11.303-29.408-17.536-46.534-17.536h-165.5v-240.176z" fill="#fbf2e2"/>
                                    </g>
                                    <g>
                                        <path d="m256.287 338.464c-13.903-13.663-32.234-22.525-51.948-22.291h-143.781v-217.845h-21.72v217.844 22.333c8.433.024 152.258-.017 165.5 0 19.733-.237 38.085 8.655 51.995 22.333z" fill="#f7e0ba"/>
                                        </g>
                                        <g>
                                            <path d="m256.083 383.671h-216.994v-45.667h162.154c20.592 0 40.333 8.219 54.84 22.833z" fill="#ffc277"/>
                                        </g>
                                        <g>
                                            <path d="m60.989 361.771v-23.766h-21.9v45.666h216.994v-21.9z" fill="#ff905b"/>
                                        </g>
                                        <g>
                                            <path d="m256.625 383.671h216.995v-45.667h-162.154c-20.592 0-40.333 8.219-54.84 22.833v22.834z" fill="#ffc277"/>
                                        </g>
                                        <g>
                                            <path d="m256.625 361.456h216.995v22.215h-216.995z" fill="#ff905b"/>
                                        </g>
                                        <g>
                                            <path d="m61.03 121.68h15v15h-15z" fill="#fff"/>
                                        </g>
                                        <g>
                                            <path d="m91.03 121.68h15v15h-15z" fill="#fff"/>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        <g>
                                <path d="m481.411 120.68v-29.609h-170.654c-20.091 0-39.763 7.1-55.007 20.066-15.244-12.966-34.92-20.066-55.043-20.066h-50.213l.072 15h50.177c17.453 0 34.537 6.474 47.34 18.276v64.224h15v-63.891c12.842-12.002 30.065-18.609 47.675-18.609h155.654v224.433h-156.156c-16.793 0-33.304 5.119-47.174 14.371v-141.304h-15v141.416c-13.904-9.322-30.479-14.483-47.34-14.483h-155.654v-224.676h90.475v-15h-105.475v30.852h-30.088v299.491h436.457v-15h-421.457v-269.491h15.088v254.491h451.323v-255.491h15.589v270.492h-15.5v15h30.5v-300.492zm-436.323 255.491v-30.667h155.655c17.379 0 34.389 6.663 47.174 18.373v12.294zm421.323 0h-203.329v-12.294c12.785-11.71 29.795-18.373 47.174-18.373h156.155z"/>
                                <path d="m451.5 406.172h15v15h-15z"/>
                                <path d="m75.53 166.075h135v15h-135z"/>
                                <path d="m75.53 211.075h135v15h-135z"/>
                                <path d="m75.53 256.075h135v15h-135z"/>
                                <path d="m300.53 166.075h135v15h-135z"/>
                                <path d="m300.53 211.075h135v15h-135z"/>
                                <path d="m300.53 256.075h135v15h-135z"/>
                        </g>
                    </g>
                </svg>
                <!--
              <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
                -->
              <div class="text-center lg:w-2/3 w-full">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">¡Bienvenido a UPIIBOOK!</h1>
                <p class="mb-8 leading-relaxed">Esta página está pensada para que puedas realiar donaciones o ventas de material academico que has ido adquiriendo a lo largo de tu carrera, para que puedas adquirir estos materiales y puedas ponerte en contacto con los ofertantes.</p>
                <div class="flex justify-center">

                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Iniciar</a>
                        @else
                            <a href="{{ route('login') }}" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Iniciar Sesión</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Registrarse</a>
                            @endif
                        @endauth

                @endif
                </div>
              </div>
            </div>
          </section>
    </body>
</html>
