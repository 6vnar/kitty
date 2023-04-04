<div>
    @section('title', ' home')
    <div class="bg-pink-100 py-10">
        <div class="container mx-auto">
            <h1 class="text-4xl font-bold text-gray-900 mb-6">Sale Products</h1>
            <div class="grid grid-cols-2 gap-6">
                @foreach($products as $product)
                    {{-- <livewire:ui.card :product="$product" :key="$product->id" /> --}}
                        
                @endforeach
            </div>
        </div>
    </div>
</div>

