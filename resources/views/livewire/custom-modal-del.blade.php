<div class="">



    <x-dialog-modal wire:model="showingModal">

        <x-slot name="title">
            Seguro que quieres Eliminar?
        </x-slot>


        <x-slot name="content">

            <button wire:click="delete" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Eliminar
            </button>

        </x-slot>


        <x-slot name="footer">
            <x-secondary-button wire:click="$set('showingModal', false)" wire:loading.attr="disabled">
                Cerrar 
            </x-secondary-button>
        </x-slot>

    </x-dialog-modal>



</div>