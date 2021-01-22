<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <br>
    <section class="text-gray-600 body-font max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <div class="container px-2 py-8 mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
          @csrf 
          <form action="{{ route('items.index') }}" method="GET">
            <div class="flex w-full justify-center items-end mb-5">
              <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left">
                <input placeholder="Ingresa un titulo" type="search" name="search" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
              <button type="submit" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Buscar</button>
            </div>
          </form>
          
          <div class="flex flex-wrap -m-2">
            @foreach ($items as $item)
            <div class="p-2 md:w-1/4">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{$item->image}}" alt="imagen">
                <div class="p-4">
                  <h2 class="title-font text-lg font-small text-gray-900 mb-2">{{$item->title}}</h1>
                  <p class="leading-relaxed mb-3">{{$item->description}}</p>
                  <div class="flex items-center flex-wrap ">
                    <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0" href="{{route('items.show',$item->id)}}">Ver más
                      <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5l7 7-7 7"></path>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <br>
          {{$items->links()}}
        </div>
      </section>
</x-app-layout>
