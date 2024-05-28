<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="border-b-2 border-gray-300 mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Gestión de Categorías</h1>
        </div>
        @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Éxito!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
        @endif
        @if (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">¡Error!</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
        @endif

        @if ($categories->isEmpty())
        <p class="text-gray-600 mt-4">No hay categorías disponibles.</p>
        @else
        <div class="overflow-x-auto mt-4">
            <table class="w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($categories as $category)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $category->name_category }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <a href="{{ route('psycho.games.categories-edit', ['id' => $category->id]) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('psycho.games.categories-delete', ['id' => $category->id]) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            {{ $categories->links() }}
        </div>
        @endif

        <div class="mt-8 flex justify-between">
            <a href="{{ route('psycho.games.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-300 ease-in-out">
                Volver
            </a>
        </div>
    </div>
</x-app-layout>
