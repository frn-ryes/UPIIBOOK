<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <br>
    <section class="text-gray-600 body-font max-w-7xl mx-auto sm:px-6 lg:px-8">
        
        <div class="container px-2 py-8 mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">Publicaciones Denunciadas</h1>
          <br>
          <div class="flex flex-wrap -m-2">
            @foreach ($items as $item)
            <div class="p-2 md:w-1/4">
              <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="{{$item->image}}" alt="blog">
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
