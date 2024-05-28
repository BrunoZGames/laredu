@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a> 

<div class="h-screen flex-col w-72 left-0 top-0 fixed bg-zinc-700 ">
    <div class="w-full flex shadow-md">
        <div class="w-4/6 py-4 px-2">
            <img class="w-32" src="{{ asset('assets/img/LogoB&W.png') }}" alt="">
        </div>
        <div class="w-2/6 flex justify-end items-start p-2">
            <!-- Botón de cierre del menú -->
            <button @click="open = false" class="text-gray-200" >
                <!-- Icono de cerrar -->
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        
    </div>
    <div class="flex w-full h-16 items-center px-2 text-gray-200 hover:bg-zinc-600 transition font-bold text-2xl shadow-md">
        <a href="{{ route('neurocrib') }}">Neurocrib</a>
    </div>
    <div class="flex w-full h-16 items-center px-2 text-gray-200 hover:bg-zinc-600 transition font-bold text-2xl shadow-md">
        <a href="">Alumnos</a>
    </div>
    <div class="flex w-full h-16 items-center px-2 text-gray-200 hover:bg-zinc-600 transition font-bold text-2xl shadow-md">
        <a href="">Seguimiento</a>
    </div>
    <div class="flex w-full h-16 items-center px-2 text-gray-200 hover:bg-zinc-600 transition font-bold text-2xl shadow-md">
        <a href="">Estadisticas SOP</a>
    </div>
    <div class="flex w-full h-16 items-center px-2 text-gray-200 hover:bg-zinc-600 transition font-bold text-2xl shadow-md">
        <a href="">Planes Individualizados</a>
    </div>
    
</div>