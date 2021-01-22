<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    <br>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-2 py-8 mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{route('myposts.update',$item)}}" method="POST" enctype="multipart/form-data">
                @csrf 
                @method('put')
          <div class="flex flex-col text-center w-full mb-3">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Editar Articulo</h1>
          </div>
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-gray-600">Titulo</label>
                  <input type="text" name="title" value="{{old('title',$item->title)}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                @error('title')
                                <small>*{{$message}}</small>
                                <br>
                @enderror
                </div>
              </div>

              <div class="p-2 w-full">
                <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-600">¿A que carrera le interesa?</label>
                    <select name="career" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      <option @if(old('career',$item->career) == 'Cualquiera') {{'selected'}} @endif value="Cualquiera" >Cualquiera</option>  
                      <option @if(old('career',$item->career) == 'Ingeniería Industrial') {{'selected'}} @endif value="Ingeniería Industrial">Ingenieria Industrial</option>
                      <option @if(old('career',$item->career) == 'Administracion Industrial') {{'selected'}} @endif value="Administracion Industrial">Administración Industrial</option>
                      <option @if(old('career',$item->career) == 'Ingeniería en Transporte') {{'selected'}} @endif value="Ingeniería en Transporte">Ingeniería en Transporte</option>
                      <option @if(old('career',$item->career) == 'Ciencias de la Informática') {{'selected'}} @endif value="Ciencias de la Informática">Ciencias de la Informática</option>
                      <option @if(old('career',$item->career) == 'Ingeniería en Informática') {{'selected'}} @endif value="Ingeniería en Informática">Ingeniería en Informática</option>
                      <option @if(old('career',$item->career) == 'Ingeniería Automotriz') {{'selected'}} @endif value="Ingeniería Autmotriz">Ingeniería Autmotriz</option>
                    </select>
                    @error('career')
                      <small>*{{$message}}</small>
                      <br>
                    @enderror
                </div>
              </div>

              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-gray-600">Descripción</label>
                  <textarea id="message" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{old('description',$item->description)}}</textarea>
                  @error('description')
                    <small>*{{$message}}</small>
                    <br>
                  @enderror
                </div>
              </div>

              <div class="p-2 w-full">
                <div class="relative">
                    <label for="price" class="leading-7 text-sm text-gray-600">Precio</label>
                    <input type="text" name="price" placeholder="¿Tiene algun costo? Ingresalo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{old('price',$item->price)}}">
                    @error('price')
                    <small>*{{$message}}</small>
                    <br>
                    @enderror
                </div>
              </div>

              <div class="p-2 w-full">
                <div class="relative">
                    <label for="price" class="leading-7 text-sm text-gray-600">Imagen</label>
                    <input type="file" name="image" accept="image/*"class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                    @error('image')
                    <small>*{{$message}}</small>
                    <br>
                    @enderror
                </div>
              </div>

              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Actualizar</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </section>

</x-app-layout>
