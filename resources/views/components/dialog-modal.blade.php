@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-4 bg-gradient-to-r from-white via-teal-200 to-yellow-200">
        <div class="text-lg font-medium text-gray-600">
            {{ $title }}
        </div>

        <div class="mt-4 text-sm text-gray-600">
            {{ $content }}
        </div>
    </div>

    <div class="flex flex-row justify-center px-6 py-4 bg-white text-end">
        {{ $footer }}
    </div>
</x-modal>
