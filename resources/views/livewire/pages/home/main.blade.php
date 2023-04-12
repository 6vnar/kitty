<div>
    @section('title', 'Home')
    <!-- if auth -->
    @auth
        gggggggg
    @endauth
    {{-- Recently Added --}}
    <div class="container mx-auto justfiy-start mt-6">
        <h2 class="text-left text-gray-500 text-lg font-bold">Recently Added</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 container mx-auto shadow-sm ">

            @foreach ($recentlyAdded as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>
        {{-- Most Sold --}}
        <h2 class="text-left text-gray-500 text-lg font-bold mt-6">Most Sold</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 container mx-auto shadow-sm">
            @foreach ($mostSold as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>
    </div>
</div>
