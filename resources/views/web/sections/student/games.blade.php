<x-app-layout>
    <div class="container mx-auto px-4">
        <div class="rounded-lg overflow-hidden">
            <div class="px-6 py-4 border-b">
                <h5 class="text-xl font-semibold">Games</h5>
            </div>
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-28">
                    @foreach($pendingTests as $pendingTest)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden border-2 border-emerald-300">
                            <img src="{{ asset('img/image-card.jpg') }} " class="w-full h-48 object-cover" alt="{{ $pendingTest->games->name_game }}">
                            <div class="p-6">
                                <h5 class="text-lg font-bold">Test: {{ $pendingTest->tests->test_name }}</h5>
                                <p class="text-gray-700">Juego: {{ $pendingTest->games->name_game }}</p>
                                <a href="{{ route('student.games.play', ['student_id' => $pendingTest->student_id, 'gameTest_id' => $pendingTest->gameTests->id, 'test_id' => $pendingTest->test_id, 'game_id' => $pendingTest->game_id, 'level' => $pendingTest->gameTests->level]) }}" class="mt-4 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Play</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
