<x-app-layout>
    <div class="container mx-auto px-4 py-8 ">
        @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('error') }}
        </div>
        @endif

        <div class="border-b-2 border-gray-300 mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Nueva Categoría</h1>
        </div>

        <div class="w-full max-w-md mx-auto">
            <x-validation-errors class="mb-4" />
            <form action="{{ route('psycho.games.categories.store') }}" method="post" class="bg-white shadow-2xl shadow-gray-200 rounded-lg p-6 space-y-4">
                @csrf

                <div class="flex flex-col space-y-4">
                    <label for="name_category" class="text-gray-600">Nombre de la categoría</label>
                    <input type="text" name="name_category" id="name_category" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" required>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="w-full px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">
                        Crear
                    </button>
                </div>
            </form>
        </div>

        <div class="mt-8 flex justify-between">
            <a href="{{ route('psycho.games.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-300 ease-in-out">
                Volver
            </a>
            <a href="{{ route('psycho.games.categories.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-300 ease-in-out">
                Ver Categorías
            </a>
        </div>
    </div>

    @if (session('success'))
    <livewire:custom-modal :wire:key="'custom-modal-'.time()">
    @endif
</x-app-layout>
