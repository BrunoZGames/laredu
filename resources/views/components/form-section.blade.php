@props(['submit'])

<div {{ $attributes->merge(['class' => 'mx-auto w-full h-full max-w-xl p-8 mt-10 mb-32']) }}>
    

    <div class=" md:mt-0 md:col-span-2 mx-auto w-full h-full max-w-xl ">
        <form wire:submit="{{ $submit }}">
            <div class="px-4 py-5 sm:p-6 {{ isset($actions) ? 'sm:rounded-tl-md sm:rounded-tr-md' : 'sm:rounded-md' }}">
                <div class="">
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div class="flex items-center justify-center px-4 py-3 text-end sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
