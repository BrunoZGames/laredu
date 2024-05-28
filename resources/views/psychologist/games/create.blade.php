<x-app-layout>
    <div class="flex flex-col gap-8 w-[90%] h-full p-4 mt-7 m-auto  rounded-lg bg-white shadow-2xl shadow-gray-200 z-20">
        @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center">
            {{ session('error') }}
        </div>
        @endif
        <div class="border-b-2 w-full">
            <h1 class="text-3xl font-bold text-gray-600">Nuevo Juego</h1>
        </div>
        <div class="w-1/2">
            <form action="{{ route('psycho.games.store') }}" method="post">
                @csrf
                <div class="flex flex-col w-full gap-4 p-4">
                    <div class="flex flex-col w-full gap-4">
                        <label for="name_game" class="text-lg font-bold text-gray-600">Nombre juego</label>
                        <input type="text" name="name_game" id="name_game" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="description" class="text-lg font-bold text-gray-600">Descripción</label>
                        <textarea name="description" id="description" class="w-full p-2 border-2 border-gray-300 rounded-md" required></textarea>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="game_path" class="text-lg font-bold text-gray-600">Ruta del juego</label>
                        <input type="game_path" name="game_path" id="game_path" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                        <div class="flex flex-col w-full gap-4">
                            <label for="game_category_id" class="text-lg font-bold text-gray-600">Categoría</label>
                            <select name="game_category_id" id="game_category_id" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                                <option value="">Selecciona una categoría</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex flex-col w-full gap-4">
                        <div class="flex justify-start">
                            <button type="submit" class="px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">Crear</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div class="mt-8 flex justify-between">
        <a href="{{ route('psycho.games.index') }}" class="px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">Volver</a>
        <a href="{{ route('psycho.games.games.index') }}" class="px-4 py-2 bg-zinc-300 text-black rounded-md hover:bg-teal-200 hover:text-indigo-700 transition duration-300 ease-in-out">Ver Juegos</a>
    </div>
    @if (session('success'))
    <livewire:custom-modal :wire:key="'custom-modal-'.time()">
        @endif
</x-app-layout>