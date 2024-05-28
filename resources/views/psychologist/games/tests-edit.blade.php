<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="border-b-2 border-gray-300 mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Editar Test</h1>
        </div>
        @if(session('error'))
        <div class="bg-red-500 text-white p-4 rounded-lg text-center">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('psycho.games.tests.update', ['id' => $test->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="test_id" value="{{ $test->id }}" hidden>
            <div class="mb-4">
                <label for="test_name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Test</label>
                <input type="text" name="test_name" id="test_name" value="{{ $test->test_name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex justify-between">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600 transition duration-300 ease-in-out">Guardar</button>
                <a href="{{ route('psycho.games.tests.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-300 ease-in-out">Volver</a>
            </div>
        </form>
    </div>
    @if (session('success'))
    <livewire:custom-modal :wire:key="'custom-modal-'.time()">
    @endif
</x-app-layout>