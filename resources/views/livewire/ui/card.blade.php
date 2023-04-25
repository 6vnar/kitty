<div>
    <div class=" flex flex-wrap items-center justify-center gap-4">
        <div class="flex-shrink-0 m-6 relative overflow-hidden bg-[#fb97ac] rounded-lg max-w-xs shadow-lg">
            <svg class="absolute bottom-0 left-0 mb-8" viewBox="0 0 375 283" fill="none"
                style="transform: scale(1.5); opacity: 0.1;">
                <rect x="159.52" y="175" width="152" height="152" rx="8"
                    transform="rotate(-45 159.52 175)" fill="white" />
                <rect y="107.48" width="152" height="152" rx="8" transform="rotate(-45 0 107.48)"
                    fill="white" />
            </svg>
            <div class="relative pt-5 px-5 flex items-start justify-start">
            @auth
                <button wire:click="addToFavorites" class="btn btn-primary {{ $isFavorite ? 'disabled' : '' }}">
                    <i class="fa-solid fa-heart w-6 h-6"></i>
                </button>
            @endauth
            @admin
                <button wire:click="addToFavorites" class="btn btn-primary {{ $isFavorite ? 'disabled' : '' }}">
                    <i class="fa-solid fa-heart w-6 h-6"></i>
                </button>
            @endadmin
        </div>
            <div class="relative pt-8 px-8 flex items-center justify-center">

                <div class="block absolute w-48 h-48 bottom-0 left-0 -mb-24 ml-3"
                    style="background: radial-gradient(black, transparent 60%); transform: rotate3d(0, 0, 1, 20deg) scale3d(1, 0.6, 1); opacity: 0.2;">
                </div>
                <img class="relative w-36 h-36" src=" {{ asset($product->image_path) }}">
            </div>
            <div class="relative text-white px-6 pb-3 mt-3">
                <span class="block opacity-75 -mb-1 ">{{ $product->brand->name }}</span>
                <div class="flex justify-between">
                    <span class="block font-semibold text-xl ">{{ $product->name }}</span>
                    <span
                        class="block bg-white rounded-full text-orange-500 text-xs font-bold px-3 py-2 leading-none flex items-center">${{ $product->price }}
                    </span>
                </div>
            </div>
            <div class="relative text-white px-3 pb-6 mt-3">
                <a href="{{ route('show_product', $product->id) }}"
                    class="bg-pink-500 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded">{{ __('ui.View') }}</a>
            </div>
        </div>
    </div>
</div>
