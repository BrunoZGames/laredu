<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="border-b-2 border-gray-300 mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Editar Categoría</h1>
        </div>

        @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center mb-4">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('psycho.games.categories-update', ['id' => $category->id]) }}" method="post" class="w-full max-w-md mx-auto">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-lg rounded-lg p-6 space-y-4 border border-gray-300">
                <div class="flex flex-col space-y-4">
                    <label for="name_category" class="text-gray-600">Nombre de la Categoría</label>
                    <input type="text" name="name_category" id="name_category" class="border border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500" value="" placeholder="{{ $category->name_category }}">
                </div>

                <input type="number" name="category_id" id="category_id" value="{{ $category->id }}" hidden>

                <div class="flex justify-between">
                    <button type="submit" class="w-1/2 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 focus:outline-none focus:bg-green-700 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        Guardar
                    </button>
                    <a href="{{ route('psycho.games.categories.index') }}" class="w-1/2 px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-300 ease-in-out">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                        </svg>
                        Cancelar
                    </a>
                </div>
            </div>
        </form>
    </div>
    @if (session('success'))
        <livewire:custom-modal :wire:key="'custom-modal-'.time()">
    @endif
</x-app-layout>
