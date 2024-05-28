<x-app-layout>

    <div id="app" class="bg-white p-2 mt-7">
        {{-- <calendar /> --}}
        <calendar-view :user="{{ auth()->user() }}"/>
    </div>

</x-app-layout>