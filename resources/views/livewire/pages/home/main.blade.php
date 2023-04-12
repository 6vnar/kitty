<div>
    @section('title', 'Home')
    <!-- if auth -->
    @auth
        gggggggg
    @endauth
    {{-- Recently Added --}}
    <div class="container mx-auto justfiy-start">
        <h2 class="text-lg font-medium mb-4">Recently Added</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
        @foreach ($recentlyAdded as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
                @endforeach
    </div>
    {{-- Most Sold --}}
        <h2 class="text-lg font-medium mb-4">Most Sold</h2>
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                @foreach ($mostSold as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
                @endforeach
    </div>
    </div>

    {{-- <div class="container mx-auto">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3"> --}}
            {{-- Recently Added --}}
            {{-- <div>
                <h2 class="text-lg font-medium mb-4">Recently Added</h2>
                @foreach ($recentlyAdded as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
                @endforeach
            </div> --}}
    
            {{-- Most Sold --}}
            {{-- <div>
                <h2 class="text-lg font-medium mb-4">Most Sold</h2>
                @foreach ($mostSold as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
                @endforeach
            </div>
        </div>
    </div> --}}
</div>
