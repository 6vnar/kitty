<div>
   <!-- if auth -->
   @auth
   gggggggg
   @endauth
   
   <div  class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($products as $product)
        <div class="bg-white rounded-lg shadow-lg">
            <img src="{{ $product->image_path }}" alt="{{ $product->name }}" class="w-full h-48 object-cover rounded-t-lg">
            <div class="p-4">
                <h2 class="text-lg font-semibold mb-2">{{ $product->name }}</h2>
                <p class="text-gray-600 text-sm">{{ $product->description }}</p>
                <p class="mt-4 font-bold text-lg">{{ $product->price }}</p>
                <button class="mt-4 bg-pink-500 hover:bg-pink-600 text-white py-2 px-4 rounded-full" wire:click="addToCart({{ $product->id }})">Add to cart</button>
            </div>
        </div>
    @endforeach
</div> 
</div>

