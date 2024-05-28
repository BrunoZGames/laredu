<aside class="px-3 py-4  {{ Auth::user()->role_id == 5 ? 'bg-gray-50' : 'bg-gradient-to-b from-white to-teal-300  rounded-br-full p-8' }}">
    <ul class="space-y-2 font-medium flex-1">
        {{-- User is admin/psychologist --}}
        @if (Auth::user()->role_id == 5)
            <x-layouts.admin.sidebar></x-layouts.admin.sidebar>
            {{-- User is tutor --}}
        @elseif (Auth::user()->role_id == 4)
            <x-layouts.tutor.sidebar></x-layouts.tutor.sidebar>
            {{-- User is student --}}
        @elseif (Auth::user()->role_id == 3)
                <x-layouts.student.sidebar ></x-layouts.student.sidebar>
            {{-- User is teacher --}}
        @elseif (Auth::user()->role_id == 2)
            <x-layouts.teacher.sidebar></x-layouts.teacher.sidebar>
        @endif
    </ul>
</aside>