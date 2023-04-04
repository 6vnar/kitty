<div>
 <div class="bg-white shadow-lg rounded-lg p-4">
    <img src="{{ $product->image }}" alt="{{ $product->title }}" class="w-full object-cover object-center">
    <div class="mt-4">
        <h3 class="text-gray-500 text-xs uppercase font-medium">{{ $product->category->name }}</h3>
        <h2 class="text-gray-900 title-font text-lg font-medium">{{ $product->name }}</h2>
        <p class="mt-1">{{ $product->description }}</p>
        <div class="flex justify-between items-center mt-4">
            @if($product->sale_price)
                <div class="text-gray-500 text-sm">
                    <span class="line-through">{{ $product->price }}</span> {{ $product->sale_price }}
                </div>
            @else
                <div class="text-gray-500 text-sm">{{ $product->price }}</div>
            @endif
            <button wire:click.prevent="addToCart({{ $product->id }})" class="bg-pink-500 text-white rounded-md px-4 py-2 hover:bg-pink-600">Add to Cart</button>
        </div>
    </div>
</div>
    
</div>
