<x-app-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="border-b-2 border-gray-300 mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Assignar a un curso</h1>
            <h1 class="text-xl font-bold text-gray-800">{{ $test->test_name }}</h1>
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

        <div class="overflow-x-auto">
            <table class="w-full bg-white border border-gray-300 rounded-lg shadow-md">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Curso</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nº Alumnos</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Acciones</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-300">
                    @foreach ($courses as $course)
                    <tr class="table-rows">
                        <td class="px-6 py-4 whitespace-nowrap">{{ $course->course_name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $course->students->count() }}</td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            <form action="{{ route('psycho.games.assign-course.store', ['course_id' => $course->id, 'test_id' => $test->id]) }}" method="post">
                                @csrf
                                @if ($course->students->count() == 0)
                                <input type="submit" value="Asignar" class="text-gray-400" disabled>
                                @else
                                 <input type="submit" value="Asignar" class="text-blue-600 hover:underline hover:cursor-pointer">
                                @endif
                            </form>
                                                       
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8">
            {{ $courses->links() }}
        </div>

        <div class="mt-8 flex justify-between">
            <a href="{{ route('psycho.games.tests.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded-md hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition duration-300 ease-in-out">
                Volver
            </a>
        </div>
    </div>
</x-app-layout>