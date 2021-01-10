@props(['id' => null, 'maxWidth' => null])

<x-modaljet :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="">

    <div class="px-6 py-4 bg-gray-50">
        <div class="text-lg">
            {{ $title }}
        </div>

        <div class="mt-4">
            {{ $content }}
        </div>
    </div>

    <div class="">
        {{ $footer }}
    </div>

    </div>
</x-jetmodaljet>