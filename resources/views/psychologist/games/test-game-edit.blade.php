<x-app-layout>
    <div class="flex flex-col gap-8 w-full h-full p-4">
        <div class="w-full border-b-2">
            <h1 class="text-2xl font-bold text-gray-600">Editar juego</h1>
        </div>

        @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
            <p class="font-bold">¡Éxito!</p>
            <p>{{ session('success') }}</p>
        </div>
        @endif
        @if (session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4" role="alert">
            <p class="font-bold">¡Error!</p>
            <p>{{ session('error') }}</p>
        </div>
        @endif

        <div class="w-1/2">
            <x-validation-errors class="mb-4" />
            <form action="{{ route('psycho.games.tests.test-game-update', ['id' => $gameTest->id]) }}" method="post">
                @csrf
                @method('PUT')
                <input type="text" id="game_id" name="game_id" value="{{ $gameTest->game_id }}" hidden>
                <input type="text" id="test_id" name="test_id" value="{{ $gameTest->test_id }}" hidden>
                <input type="text" id="category_id" name="category_id" value="{{ $gameTest->category_id }}" hidden>
                <input type="text" id="level" name="level" value="{{ $gameTest->level }}" hidden>
                <div class="flex flex-col w-full gap-4 p-4">
                    <div class="flex flex-col w-full gap-4">
                        <label for="game_name" class="text-lg font-bold text-gray-600">Juego</label>
                        <input type="text" name="game_name" class="w-full p-2 border-2 border-gray-300 rounded-md" value="{{ $gameTest->game->name_game }}" placeholder="{{ $gameTest->game->name_game }}" readonly>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="level_name" class="text-lg font-bold text-gray-600">Nivel del juego</label>
                        @if ($gameTest->level == 1)
                        <input type="text" name="level_name" class="w-full p-2 border-2 border-gray-300 rounded-md" value="Fácil" placeholder="Fácil" readonly>
                        @elseif ($gameTest->level == 5)
                        <input type="text" name="level_name" class="w-full p-2 border-2 border-gray-300 rounded-md" value="Medio" placeholder="Medio" readonly>
                        @else
                        <input type="text" name="level_name" class="w-full p-2 border-2 border-gray-300 rounded-md" value="Difícil" placeholder="Difícil" readonly>
                        @endif
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_scores" class="text-lg font-bold text-gray-600">Puntuación máxima</label>
                        <input type="number" name="max_scores" id="max_scores" class="w-full p-2 border-2 border-gray-300 rounded-md" value="{{ $gameTest->max_score }}" placeholder="{{ $gameTest->max_score }}">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="rounds" class="text-lg font-bold text-gray-600">Rondas</label>
                        <input type="number" name="rounds" id="rounds" class="w-full p-2 border-2 border-gray-300 rounded-md" value="{{ $gameTest->rounds }}" placeholder="{{ $gameTest->rounds }}">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_errors" class="text-lg font-bold text-gray-600">Errores máximos</label>
                        <input type="number" name="max_errors" id="max_errors" class="w-full p-2 border-2 border-gray-300 rounded-md" value="{{ $gameTest->max_errors }}" placeholder="{{ $gameTest->max_errors }}">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_time" class="text-lg font-bold text-gray-600">Tiempo máximo</label>
                        <input type="number" name="max_time" id="max_time" class="w-full p-2 border-2 border-gray-300 rounded-md" value="{{ $gameTest->max_time }}" placeholder="{{ $gameTest->max_time }}">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="min_time" class="text-lg font-bold text-gray-600">Tiempo mínimo</label>
                        <input type="number" name="min_time" id="min_time" class="w-full p-2 border-2 border-gray-300 rounded-md" value="{{ $gameTest->min_time }}" placeholder="{{ $gameTest->min_time }}">
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Guardar</button>
                    </div>
                </div>
            </form>
        </div>

        <div>
            <a href="{{ route('psycho.games.tests.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Ver tests</a>
        </div>
    </div>

</x-app-layout>