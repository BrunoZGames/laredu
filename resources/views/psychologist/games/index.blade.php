<x-app-layout>
    <div class="flex flex-col w-[90%] h-full gap-10 p-4 mt-7 m-auto rounded-lg bg-white shadow-2xl shadow-gray-200">
        
        <div class="border-b-2 w-full">
            <h1 class="text-3xl font-bold text-gray-600 pb-1">Gestión de juegos</h1>
        </div>

        <div class="flex flex-col w-full p-4  justify-start items-center ">
            <div class="flex flex-col w-full p-6 space-y-4  ">
                <h3 class="text-2xl font-bold text-gray-800">Gestión de Categorías</h3>
                <p class="text-sm text-gray-600">Aquí podrás gestionar las categorías de los juegos, crear nuevas y ver las existentes.</p>
                <div class="flex justify-start space-x-4">
                    <a href="{{ route('psycho.games.categories.create') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700  transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Crear</span>
                    </a>
                    <a href="{{ route('psycho.games.categories.index') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                        <span>Ver</span>
                    </a>
                </div>
            </div>
 
            <div class="flex flex-col w-full p-6 space-y-4  ">
                <h3 class="text-2xl font-bold text-gray-800">Gestión de Juegos</h3>
                <p class="text-sm text-gray-600">Aquí podrás gestionar las categorías de los juegos, crear nuevas o ver y editar las existentes.</p>
                <div class="flex justify-start space-x-4">
                    <a href="{{ route('psycho.games.create') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Crear</span>
                    </a>
                    <a href="{{ route('psycho.games.games.index') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                        <span>Ver</span>
                    </a>
                    <a href="{{ route('psycho.games.parameters.store') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                        <span>Parametrizar</span>
                    </a>
                </div>
            </div>

            <div class="flex flex-col w-full p-6 space-y-4 ">
                <h3 class="text-2xl font-bold text-gray-800">Gestión de Tests</h3>
                <p class="text-sm text-gray-600">Aquí podrás gestionar los tests, crear nuevos o ver y editar los existentes.</p>
                <div class="flex justify-start space-x-4">
                    <a href="{{ route('psycho.games.tests.create') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Crear</span>
                    </a>
                    <a href="{{ route('psycho.games.tests.index') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                        <span>Ver</span>
                    </a>
                    <a href="{{ route('psycho.games.tests.add-games.store') }}" class="flex items-center justify-center w-2/8 px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                        <span>Añadir juego a test</span>
                    </a>
                </div>
            </div>
        
        </div>
    </div>
</x-app-layout>