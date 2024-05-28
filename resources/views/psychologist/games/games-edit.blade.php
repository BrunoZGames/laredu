<x-app-layout>
<script src="{{ asset('js/edit_games.js') }}" defer></script>
<div class="flex flex-col gap-8 w-full h-full p-4">
        @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center">
            {{ session('error') }}
        </div>
        @endif
        <div class="border-b-2 w-full">
            <h1 class="text-3xl font-bold text-gray-600">Editor juego</h1>
        </div>
        <div class="w-1/2">
            <form action="{{ route('psycho.games.update', ['id' => $game->id]) }}" method="post">
                @csrf
                @method('PUT')
                <input type="text" name="game_id" id="game_id" value="{{ $game->id }}" hidden>
                <div class="flex flex-col w-full gap-4 p-4">
                    <div class="flex flex-col w-full gap-4">
                        <label for="name_game" class="text-lg font-bold text-gray-600">Nombre juego</label>
                        <input type="text" name="name_game" id="name_game" class="w-full p-2 border-2 border-gray-300 rounded-md" placeholder="{{ $game->name_game }}" required>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="description" class="text-lg font-bold text-gray-600">Descripción</label>
                        <textarea name="description" id="description" class="w-full p-2 border-2 border-gray-300 rounded-md" placeholder="{{ $game->description }}" required></textarea>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="game_path" class="text-lg font-bold text-gray-600">Ruta del juego</label>
                        <input type="game_path" name="game_path" id="game_path" class="w-full p-2 border-2 border-gray-300 rounded-md" placeholder="{{ $game->game_path }}" required>
                        <div class="flex flex-col w-full gap-4">
                            <label for="game_category_id" class="text-lg font-bold text-gray-600">Categoría</label>
                            <select name="game_category_id" id="game_category_id" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                                <option value="{{ $game->category->id }}">{{ $game->category->name_category }}</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex flex-col w-full gap-4">
                        <label for="level" class="text-lg font-bold text-gray-600">Nivel</label>
                        <select name="level" id="level" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                        <option value="">Seleciona un nivel</option>
                            @foreach($game->parameters as $parameter)
                            @if($parameter->level == 1)
                            <option value="{{ $parameter->level }}">Fácil</option>
                            @endif
                            @if($parameter->level == 5)
                            <option value="{{ $parameter->level }}">Medio</option>
                            @endif
                            @if($parameter->level == 10)
                            <option value="{{ $parameter->level }}">Difícil</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_scores" class="text-lg font-bold text-gray-600">Puntuación máxima</label>
                        <input type="number" name="max_scores" id="max_scores" class="w-full p-2 border-2 border-gray-300 rounded-md" min="1">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="rounds" class="text-lg font-bold text-gray-600">Rondas</label>
                        <input type="number" name="rounds" id="rounds" class="w-full p-2 border-2 border-gray-300 rounded-md" min="1">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_errors" class="text-lg font-bold text-gray-600">Máximo de errores permitidos</label>
                        <input type="number" name="max_errors" id="max_errors" class="w-full p-2 border-2 border-gray-300 rounded-md" min="1">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="max_time" class="text-lg font-bold text-gray-600">Tiempo máximo permitido</label>
                        <input type="number" name="max_time" id="max_time" class="w-full p-2 border-2 border-gray-300 rounded-md" min="1">
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="min_time" class="text-lg font-bold text-gray-600">Tiempo mínimo permitido</label>
                        <input type="number" name="min_time" id="min_time" class="w-full p-2 border-2 border-gray-300 rounded-md" min="1">
                    </div>
                </div>

                    <div class="flex flex-col w-full gap-4">
                        <div class="flex justify-center">
                            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Actualizar</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <div>
        <a href="{{ route('psycho.games.games.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Volver</a>
    </div>
    @if (session('success'))
    <livewire:custom-modal :wire:key="'custom-modal-'.time()">
    @endif
</x-app-layout>