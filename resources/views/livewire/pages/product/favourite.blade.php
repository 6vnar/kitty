<div>
    @section('title', 'Favourite')
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 container mx-auto shadow-sm ">
        @foreach ($favourite as $product)
            @livewire('ui.card', ['product' => $product], key($product->id))
        @endforeach
    </div>
</div>
