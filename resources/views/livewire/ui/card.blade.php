<div>
    <div class="bg-white rounded-lg shadow-lg">
        <img src="{{ $product->image_path }}" alt="{{ $product->name }}" class="h-48 w-full object-cover rounded-t-lg">
        <div class="p-4">
            <h2 class="font-bold text-lg">{{ $product->name }}</h2>
            <p class="text-gray-500">{{ $product->description }}</p>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-gray-700 font-bold">${{ $product->price }}</span>
                <a href="{{ route('show_product', $product->id) }}" class ="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">View</a>
            </div>
        </div>
    </div>
    
    
</div>
