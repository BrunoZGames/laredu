<x-app-layout>
    <div class="flex flex-col gap-8 w-full h-full p-4">
        @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center">
            {{ session('error') }}
        </div>
        @endif
        <div class="border-b-2 w-full">
            <h1 class="text-3xl font-bold text-gray-600">Parametrizar Juego</h1>
        </div>
        <div class="w-1/2">
            <form action="{{ route('psycho.games.parameters.store') }}" method="post">
                @csrf
                <div class="flex flex-col w-full gap-4 p-4">
                    <div class="flex flex-col w-full gap-4">
                        <div class="flex flex-col w-full gap-4">
                            <label for="game" class="text-lg font-bold text-gray-600">Juego</label>
                            <select name="game" id="game" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                                <option value="">Selecciona un juego</option>
                                @foreach($games as $game)
                                <option value="{{ $game->id }}">{{ $game->name_game }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="flex flex-col w-full gap-4">
                        <label for="level" class="text-lg font-bold text-gray-600">Nivel</label>
                        <select name="level" id="level" class="w-full p-2 border-2 border-gray-300 rounded-md" required>
                            <option value="">Selecciona un nivel</option>
                            <option value="1">Fácil</option>
                            <option value="5">Medio</option>
                            <option value="10">Difícil</option>
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
                        <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Crear</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <a href="{{ route('psycho.games.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Volver</a>
            <a href="{{ route('psycho.games.games.index') }}" class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-customGreen hover:text-blue-950 transition duration-300 ease-in-out">Ver Juegos</a>
        </div>
    </div>

    @if (session('success'))
    <livewire:custom-modal :wire:key="'custom-modal-'.time()">
    @endif
</x-app-layout>