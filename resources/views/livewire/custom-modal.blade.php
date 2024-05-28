<div class="">

    <div class="hidden" wire:click="showModal" wire:loading.attr="disabled" class="p-4 text-gray-900 cursor-pointer">
        Open modal
    </div>

    <x-dialog-modal wire:model="showingModal">

        <x-slot name="title">
            Éxito!
        </x-slot>


        <x-slot name="content">

            <p>Se ha registrado correnctamente.</p>

        </x-slot>


        <x-slot name="footer">
            <x-secondary-button wire:click="$set('showingModal', false)" wire:loading.attr="disabled">
                Cerrar 
            </x-secondary-button>
        </x-slot>

    </x-dialog-modal>



</div>