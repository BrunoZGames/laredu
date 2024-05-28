<x-app-layout>
    <div class="flex flex-col gap-8 w-full h-full p-4">
        @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center">
            {{ session('error') }}
        </div>
        @endif
        <div class="border-b-2 w-full">
            <h1 class="text-3xl font-bold text-gray-600">Nuevo Test</h1>
        </div>
        <div class="w-1/2">
            <x-validation-errors class="mb-4" />
            <form action="{{ route('psycho.games.tests.store') }}" method="post">
                @csrf
                <div class="flex flex-col w-full gap-4 p-4">
                    <div class="flex flex-col w-full gap-4">
                        <label for="test_name" class="text-lg font-bold text-gray-600">Nombre test</label>
                        <input type="text" name="test_name" id="test_name" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="game_id" class="text-lg font-bold text-gray-600">Juego</label>
                        <select name="game_id" id="game_id" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                            <option value="">Selecciona un juego</option>
                            @foreach($games as $game)
                            <option value="{{ $game->id }}">{{ $game->name_game }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="category_id" class="text-lg font-bold text-gray-600">Categoría</label>
                        <select name="category_id" id="category_id" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                            <option value="">Selecciona una categoría</option>
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="level" class="text-lg font-bold text-gray-600">Nivel del juego</label>
                        <select name="level" id="level" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                            <option value="">Selecciona un nivel</option>
                        </select>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_scores" class="text-lg font-bold text-gray-600">Puntuación máxima</label>
                        <input type="number" name="max_scores" id="max_scores" class="w-full p-2 border-2 border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="rounds" class="text-lg font-bold text-gray-600">Rondas</label>
                        <input type="number" name="rounds" id="rounds" class="w-full p-2 border-2 border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_errors" class="text-lg font-bold text-gray-600">Errores máximos</label>
                        <input type="number" name="max_errors" id="max_errors" class="w-full p-2 border-2 border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_time" class="text-lg font-bold text-gray-600">Tiempo máximo</label>
                        <input type="number" name="max_time" id="max_time" class="w-full p-2 border-2 border-gray-300 rounded-md">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="min_time" class="text-lg font-bold text-gray-600">Tiempo mínimo</label>
                        <input type="number" name="min_time" id="min_time" class="w-full p-2 border-2 border-gray-300 rounded-md">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Crear</button>
                    </div>
                </div>
            </form>
        </div>

        <div>
            <a href="{{ route('psycho.games.tests.add-games') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Agregar más juegos a un test</a>
        </div>
        <div>
            <a href="{{ route('psycho.games.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Volver</a>
            <a href="{{ route('psycho.games.tests.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Ver tests</a>
        </div>
    </div>

    @if (session('success'))
    <livewire:custom-modal :wire:key="'custom-modal-'.time()">
    @endif

</x-app-layout>