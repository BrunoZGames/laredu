<x-app-layout>
   
   {{-- panel --}}
   <div class="w-full h-full flex justify-center "> 
      <div class="flex flex-1 flex-col w-full h-full p-4 px-6">
          <div class="flex flex-row justify-start items-start  h-auto  ">
              <div class="flex justify-start items-start w-2/3 h-auto ">
                  <h1 class="text-2xl text-zinc-300" title="Bienvenido de nuevo">Bienvenido {{ Auth::user()->username }}</h1>
              </div>
              {{-- <div class="flex flex-col justify-end items-end w-1/3 h-full space-y-4 mt-5 ">
                  <div class="w-full text-xl text-gray-200 p-2 rounded-lg bg-white shadow-2xl shadow-gray-200">
                     <h1>usuarios</h1>
                  </div>
                  <div class="w-3/4 text-xl text-gray-200 p-2 rounded-lg bg-white shadow-2xl shadow-gray-200">
                     <h1>usuarios</h1>
                  </div>
              </div> --}}
          </div>
          <div class="flex flex-row justify-center items-center h-full space-x-9">
              <div class="w-1/3 h-2/3 p-2 rounded-lg bg-white shadow-2xl shadow-gray-200">
                  <h1 class="text-2xl text-gray-200">panel 1</h1>
              </div>
              <div class="w-1/3 h-2/3 p-2 rounded-lg bg-white shadow-2xl shadow-gray-200">
                  <h1 class="text-2xl text-gray-200">panel 2</h1>
              </div>
              <div class="w-1/3 h-2/3 p-2 rounded-lg bg-white shadow-2xl shadow-gray-200">
                  <h1 class="text-2xl text-gray-200">panel 3 </h1>
              </div>
          </div>
      </div>
  </div>
  
</x-app-layout>