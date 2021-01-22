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
        <script src="{{ asset('js/app.js') }}" defer></script>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="antialiased">

        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">


                
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
