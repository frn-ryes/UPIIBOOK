<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
<br>
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-2 py-8 mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <a class="inline-flex items-center h-8 px-4 m-2 text-sm text-white transition-colors duration-150 bg-black rounded-lg focus:shadow-outline hover:bg-red-800" href="{{route('myposts.index')}}">Volver</a>
    <a class="inline-flex items-center h-8 px-4 m-2 text-sm text-white transition-colors duration-150 bg-black rounded-lg focus:shadow-outline hover:bg-red-800" href="{{route('myposts.edit',$item)}}">Editar</a>
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="" class="lg:w-1/2 w-full lg:h-auto h-64 object-contain- object-center rounded" src="../{{$item->image}}">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$item->title}}</h1>

        <p class="leading-relaxed">{{$item->description}}</p>

        <div class="flex mt-3 items-center pb-2 border-b-2 border-gray-100 mb-3">
            <h3 class="text-gray-900 text-lg title-font font-medium ">Carrera: {{$item->career}}</h3>
        </div>
        <div class="flex">
          <span class="title-font font-medium text-2xl text-gray-900">${{$item->price}}</span>
        </div>
      </div>
    </div>
  </div>
</section>

</x-app-layout>