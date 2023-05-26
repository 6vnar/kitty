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
            <div class="mx-auto w-3/5 overflow-hidden">
                <canvas data-te-chart="pie" data-te-dataset-label="Traffic" data-te-labels="['Monday', 'Tuesday' , 'Wednesday' , 'Thursday' , 'Friday' , 'Saturday' , 'Sunday ']" data-te-dataset-data="[2112, 2343, 2545, 3423, 2365, 1985, 987]" data-te-dataset-background-color="['rgba(63, 81, 181, 0.5)', 'rgba(77, 182, 172, 0.5)', 'rgba(66, 133, 244, 0.5)', 'rgba(156, 39, 176, 0.5)', 'rgba(233, 30, 99, 0.5)', 'rgba(66, 73, 244, 0.4)', 'rgba(66, 133, 244, 0.2)']">
                </canvas>
            </div>
        </div>
    </div>

</div>
<script>
    // Initialization for ES Users
    import {
        Chart,
        initTE,
    } from "tw-elements";

    initTE({
        Chart
    });
</script>