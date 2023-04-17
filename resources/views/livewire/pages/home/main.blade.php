<div>
    @section('title', __('ui.home'))
    {{-- Recently Added --}}
    <div class="container mx-auto justfiy-start mt-6">
        <div class="  mt-6">
            <div class="swiper  mySwiper ">
                <div class="swiper-wrapper ">
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
        <h2 class="@if (app()->getLocale() == 'ar') text-right @else text-left  @endif  mt-6  text-gray-500 text-lg font-bold">{{ __('ui.Recently Added') }}</h2>
        <div class="grid grid-cols-5 gap-4 container mx-auto shadow-sm " data-aos="fade-right" data-aos-delay="400">

            @foreach ($recentlyAdded as $product)
            @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>
        {{-- Most Sold --}}
        <h2 class="@if (app()->getLocale() == 'ar') text-right @else text-left  @endif text-gray-500 text-lg font-bold mt-6">{{ __('ui.Most Sold') }}</h2>
        <div class="grid grid-cols-5 gap-4 container mx-auto shadow-sm">
            @foreach ($mostSold as $product)
            @livewire('ui.card', ['product' => $product], key($product->id))
            @endforeach
        </div>

        {{-- about section  --}}
        <div class="  mt-6">
            <div class="swiper  mySwiper ">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide ">
                        <div class="m-[5rem] px-[5rem] p-2 shadow-sm   gap-6  md:flex md:justify-enter">

                            <div class="">
                                <img src="{{ asset('images/shose/shose.png') }}" class="  w-80" />
                            </div>
                            <div class="w-3/4 items-center  ">
                                <div class="  relative py-6  text-center ">
                                    <h1 class="text-gray-700 font-bold text-6xl mb-3 hover:text-gray-900 hover:cursor-pointer">حذاء شكاكي </h1>
                                    <p class="text-gray-700 tracking-wide">تخفيضات المووقع ببلاش </p>
                                    <p class="text-gray-700 tracking-wide"> 1000 $ - <s class="text-gray-700 tracking-wide"> 2000$ </s>
                                    </p>
                                    <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-inner hover:shadow-inner transition duration-300">Buy Now</button>
                                    <div class="absolute top-2 right-4 py-2 px-2 bg-purple-800 rounded-full">
                                        <span class="text-sm text-white ">20%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="m-[5rem] px-[5rem] p-2 shadow-sm   gap-6  md:flex md:justify-enter">

                            <div class="">
                                <img src="{{ asset('images/shose/shose.png') }}" class="  w-80" />
                            </div>
                            <div class="w-3/4 items-center  ">
                                <div class="  relative py-6  text-center ">
                                    <h1 class="text-gray-700 font-bold text-6xl mb-3 hover:text-gray-900 hover:cursor-pointer">حذاء شكاكي </h1>
                                    <p class="text-gray-700 tracking-wide">تخفيضات المووقع ببلاش </p>
                                    <p class="text-gray-700 tracking-wide"> 1000 $ - <s class="text-gray-700 tracking-wide"> 2000$ </s>
                                    </p>
                                    <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-inner hover:shadow-inner transition duration-300">Buy Now</button>
                                    <div class="absolute top-2 right-4 py-2 px-2 bg-purple-800 rounded-full">
                                        <span class="text-sm text-white ">20%</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="m-[5rem] px-[5rem] p-2 shadow-sm   gap-6  md:flex md:justify-enter">

                            <div class="">
                                <img src="{{ asset('images/shose/shose.png') }}" class="  w-80" />
                            </div>
                            <div class="w-3/4 items-center  ">
                                <div class="  relative py-6  text-center ">
                                    <h1 class="text-gray-700 font-bold text-6xl mb-3 hover:text-gray-900 hover:cursor-pointer">حذاء شكاكي </h1>
                                    <p class="text-gray-700 tracking-wide">تخفيضات المووقع ببلاش </p>
                                    <p class="text-gray-700 tracking-wide"> 1000 $ - <s class="text-gray-700 tracking-wide"> 2000$ </s>
                                    </p>
                                    <button class="mt-6 py-2 px-4 bg-yellow-400 text-gray-800 font-bold rounded-lg shadow-inner hover:shadow-inner transition duration-300">Buy Now</button>
                                    <div class="absolute top-2 right-4 py-2 px-2 bg-purple-800 rounded-full">
                                        <span class="text-sm text-white ">20%</span>
                                    </div>
                                </div>
                            </div>

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