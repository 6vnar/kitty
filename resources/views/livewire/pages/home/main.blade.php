<div>
    @section('title', __('ui.home'))
    {{-- Recently Added --}}
    <div class="container mx-auto justfiy-start mt-6">
        <h2 class="@if (app()->getLocale() == 'ar') text-right @else text-left  @endif  text-gray-500 text-lg font-bold">{{ __('ui.Recently Added') }}</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 container mx-auto shadow-sm ">

            @foreach ($recentlyAdded as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>
        {{-- Most Sold --}}
        <h2 class="@if (app()->getLocale() == 'ar') text-right @else text-left  @endif text-gray-500 text-lg font-bold mt-6">{{ __('ui.Most Sold') }}</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 container mx-auto shadow-sm">
            @foreach ($mostSold as $product)
                @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>
    </div>
</div>
