<div>
    @section('title', 'Product Details')
    <div class="container mx-auto my-10">
        <div class="grid grid-cols-2 gap-10">
            <div class="col-span-1">
                {{-- <img src="{{ $product->image_path }}" alt="{{ $product->name }}" class="w-full"> --}}
                <img src="{{ asset('images/clothes/ok.png') }}" alt="{{ $product->name }}" class="w-full">
            </div>
            <div class="col-span-1 m-6">
                <h1 class="text-3xl font-bold mb-5">{{ $product->name }}</h1>
                <p class="text-xl mb-5">${{ $product->price }}</p>
                <p class="mb-5">{{ $product->description }}</p>
                <button wire:click="confirmAdd({{ $product->id }})" class="px-4 py-2 bg-pink-500 text-white rounded-lg">Add to Cart</button>
            </div>
        </div>
    </div>
    
</div>
