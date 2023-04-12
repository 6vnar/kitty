<div class="max-w-2xl mx-auto mt-8">
    <div class="flex flex-wrap justify-between items-center">
        <div class="w-full md:w-1/2 mb-4 md:mb-0">
            <img class="w-full h-auto" src="{{ $product->image }}" alt="{{ $product->name }}">
        </div>
        <div class="w-full md:w-1/2">
            <h2 class="text-2xl font-bold mb-2">{{ $product->name }}</h2>
            <p class="text-gray-700 mb-4">{{ $product->description }}</p>
            <p class="text-2xl font-bold text-pink-500 mb-4">{{ $product->price }}</p>
            <form method="post" action="{{ route('cart.add', $product->id) }}">
                @csrf
                <button type="submit" class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">
                    Add to Cart
                </button>
            </form>
        </div>
    </div>
</div>
