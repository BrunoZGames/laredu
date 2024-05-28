<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="border-b-2 border-gray-300 mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Gestión de Tests</h1>
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

        @if ($tests->isEmpty())
        <p class="text-gray-600">No hay tests disponibles.</p>
        @else
        <div class="overflow-x-auto">
            <table class="w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nº Juegos</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>


                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($tests as $test)
                    <tr class="table-rows">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $test->test_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $test->gameTests->count() }}</td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('psycho.games.tests.edit', ['id' => $test->id]) }}" class="text-blue-600 hover:underline">Editar nombre</a>
                            <form action="{{ route('psycho.games.tests.delete', ['id' => $test->id]) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-yellow-600 hover:underline">Eliminar</button>
                                </form>
                            @if ($test->gameTests->count() == 0)
                            <a href="{{ route('psycho.games.tests.add-games') }}" class="text-blue-600 hover:underline">Añadir juego</a>
                            @else
                            <a href="{{ route('psycho.games.tests.test-games', ['id' => $test->id]) }}" class="text-blue-600 hover:underline">Ver juegos</a>
                            @endif
                            <a href="{{ route('psycho.games.assign.index', ['id' => $test->id]) }}" class="text-green-600 hover:underline">Asignar alumno</a>
                            <a href="{{ route('psycho.games.assign-course.index', ['id' => $test->id]) }}" class="text-purple-600 hover:underline">Asignar curso</a>
                                                       
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            {{ $tests->links() }}
        </div>
        @endif

        <div class="mt-8 flex justify-between">
            <a href="{{ route('psycho.games.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-300 ease-in-out">
                Volver
            </a>
        </div>
    </div>
</x-app-layout>