<x-mary-menu activate-by-route class="flex flex-1  p-2">



    <span class="ml-5 py-5 font-extrabold text-2xl flex items-center gap-2">
        <h3>Meraki</h3>
    </span>

    @if($user = auth()->user())

    <x-mary-list-item :item="$user" value="name" sub-value="email" no-separator no-hover class="-mx-2 !-my-2 rounded">
        
        <x-slot:actions>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <x-mary-button icon="o-power" class="btn-circle" no-wire-navigate link="{{ route('logout') }}" @click.prevent="$root.submit();" />
            </form>
        </x-slot:actions>

    </x-mary-list-item>

    @endif

    <x-mary-menu-item title="Inicio" icon="o-home" link=" {{ route('tutor.dashboard')}} " />

    <x-mary-menu-item title="Hijos" icon="o-user-group" link=" {{ route('tutor.children')}} " />

    

</x-mary-menu>