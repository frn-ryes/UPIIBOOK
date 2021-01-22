<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
</x-slot>

    <br>
    <section class="text-gray-600 body-font overflow-hidden">
        <div class="container px-2 py-8 mx-auto bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{route('items.store')}}" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="flex flex-col text-center w-full mb-3">
                  <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">Crear registro</h1>
              </div>

              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                  <div class="flex flex-wrap -m-2">
                    
                    <div class="p-2 w-full">
                      <div class="relative">
                        <label for="name" class="leading-7 text-sm text-gray-600">Titulo</label>
                        <input type="text" name="title" value="{{old('title')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
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
                              <option value="Ingenieria Industrial">Ingenieria Industrial</option>
                              <option value="Administracion Industrial">Administración Industrial</option>
                              <option value="Ingeniería en Transporte">Ingeniería en Transporte</option>
                              <option value="Ciencias de la Informática">Ciencias de la Informática</option>
                              <option value="Ingeniería en Informática">Ingeniería en Informática</option>
                              <option value="Ingeniería Autmotriz">Ingeniería Autmotriz</option>
                          </select>
                      </div>
                    </div>

                    <div class="p-2 w-full">
                      <div class="relative">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="description" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                      </div>
                    </div>

                    <div class="p-2 w-full">
                      <div class="relative">
                          <label for="price" class="leading-7 text-sm text-gray-600">Precio</label>
                          <input type="text" name="price" placeholder="¿Tiene algun costo? Ingresalo" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                    </div>

                    <div class="p-2 w-full">
                      <div class="relative">
                          <label for="price" class="leading-7 text-sm text-gray-600">Imagen</label>
                          <input type="file" name="image" accept="image/*"class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                      </div>
                    </div>

                    <div class="p-2 w-full">
                      <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                    </div>
                    
                  </div>
              </div>
            </form>
        </div>
    </section>
</x-app-layout>