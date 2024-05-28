<x-app-layout class="">

    <x-mary-header class="text-zinc-400/20 pt-20" title="Bienvenido de nuevo " size="text-3xl " with-anchor />
    <div class="flex justify-center items-center  w-[90%] h-[70%] ">
        <div class="flex flex-col justify-center items-center -mt-12 space-y-4 font-bold text-black w-60 text-2xl 2xl:w-96 2xl:text-5xl">
            <button id="btn-student-dashboard" class="w-full py-2 rounded-xl tuPlan">Tu Plan</button>
            <button id="btn-student-dashboard" class="w-full py-2 rounded-xl sociogramBtn">Sociograma</button>
            <div class="w-full py-2 rounded-xl flex flex-row">
                <a href="{{ route('student.games.index') }}" id="btn-student-dashboard" class="w-full py-2 rounded-xl flex justify-center overflow-visible relative">
                    Jugar!

                    <img class="w-12 absolute right-0 -top-5" src="{{ asset('assets/img/Pebble.png') }}" alt="">
                </a>

            </div>

        </div>
        <x-monlau-button></x-monlau-button>
    </div>
    <div class="absolute top-7 right-7 flex justify-end items-center drop-shadow-xl">
        <div class=" sm:flex sm:items-center sm:ms-6">

            <!-- Settings Dropdown -->
            <div class="ms-3 relative">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())

                        <div class="flex flex-row justify-start items-center space-x-2">
                            <span class=" whitespace-nowrap text-black text-2xl">{{ Auth::user()->username }}</span>
                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition ">
                                <img class="h-12 w-12 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="" />
                            </button>
                        </div>


                        @else
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                {{-- {{ Auth::user()->username }} --}}

                                <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                </svg>
                            </button>
                        </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">

                        <!-- Account Management -->
                        {{-- <div class="block px-4 py-2 text-xs text-gray-400">
                            <span class="flex-1 ms-3 whitespace-nowrap">{{ Auth::user()->username }}</span>

                        </div> --}}
    
                        <x-dropdown-link href="{{ route('student.profile') }}">
                            {{ __('Profile') }}
                        </x-dropdown-link>
    
                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                            <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                            </x-dropdown-link>
                        @endif
    
                        <div class="border-t border-gray-200"></div>
    
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf
    
                            <x-dropdown-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>

    </div>



    <div id="app">

        {{-- <minicalendar /> --}}
    </div>
</x-app-layout>
{{-- {{ Auth::user()->username }} --}}