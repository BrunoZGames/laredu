<x-form-section submit="updatePassword" class=" bg-white mx-auto w-full h-full max-w-xl border border-green-400">
    <div>
        <h1 name="title">Update Password</h1>
        <h3 name="description">Ensure your account is using a long, random password to stay secure.</h3>
    </div>

    <x-slot name="form" class=" mx-auto w-full h-full max-w-xl p-8 mt-5 mb-32">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Current Password') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full border border-green-400" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('New Password') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full border border-green-400" wire:model="state.password" autocomplete="new-password" />
            <x-input-err/or for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full border border-green-400" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions" class=" mx-auto w-full h-full max-w-xl p-8 mt-10 mb-32">
        <x-action-message class="me-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>
