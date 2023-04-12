<div>
    <!-- if auth -->
    @auth
        gggggggg
    @endauth

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach ($products as $product)
            @livewire('ui.card', ['product' => $product], key($product->id))
        @endforeach
    </div>
</div>
