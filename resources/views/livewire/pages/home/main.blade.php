<div>
    @section('title', __('ui.home'))
    {{-- Recently Added --}}
    <div class="container mx-auto justfiy-start mt-6">
        <h2 class="@if (app()->getLocale() == 'ar') text-right @else text-left  @endif  text-gray-500 text-lg font-bold">{{ __('ui.Recently Added') }}</h2>
        <div class="grid grid-cols-5 gap-4 container  mx-auto shadow-sm " data-aos="fade-right" data-aos-delay="400">

            @foreach ($recentlyAdded as $product)
            @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>
        {{-- Most Sold --}}
        <h2 class="@if (app()->getLocale() == 'ar') text-right @else text-left  @endif text-gray-500 text-lg font-bold mt-6">{{ __('ui.Most Sold') }}</h2>
        <div class="grid grid-cols-5 gap-4 container mx-auto shadow-sm" data-aos="fade-right" data-aos-delay="700">
            @foreach ($mostSold as $product)
            @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>
        <div class="  my-6" >
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper " >
                    <div class="swiper-slide ">
                        <img class="w-full" src="{{ asset('images/advert/mu1.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img class="w-full " src="{{ asset('images/advert/mu2.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide ">
                        <img class=" w-full" src="{{ asset('images/advert/mu3.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<style scoped>
    .swiper {
        width: 100%;
        height: 400px;
    }
</style>