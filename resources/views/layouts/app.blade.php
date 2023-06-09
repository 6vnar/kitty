<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>kitty</title>
    <link rel="icon" href="{{ asset('img/a.png') }}" type="image/x-icon">
    {{-- Fonts --}}
    {{--<link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200&display=swap" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.6/dist/flowbite.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    @livewireStyles
    @laravelPWA
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- end swiper -->
    <!-- aso -->

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- end -->
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    <script src="https://kit.fontawesome.com/4e8940f861.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    .grayy {
        background-color: #f4f8fb;
    }
</style>
</head>

<body class="font-sans tajawal bg-secondary-800" dir="{{ config('app.locale') == 'en' ? 'ltr' : 'rtl' }}">
    <div class="p-0 overflow-y-hidden h-screen mx-auto ">
        <div class="flex flex-row  h-screen bg-white  sm:h-main">
            {{-- Left Sidebar --}}
            <x-sidebar />
            {{-- screen --}}
            <div class="w-full   sm:w-8/12 sm:basis-8/12 sm:grow">
                <div class="flex  flex-col lg:items-center justify-between p-5 border-b sm:h-20 sm:flex-row">
                    <div class="flex justify-between mb-5">
                        <span class="text-2xl font-semibold text-secondary-700">@yield('title')</span>
                    </div>
                </div>
                <main class="p-1  pb-10  overflow-y-auto  rounded-lg h-screen sm:p-5  bg-secondary-50">
                    @isset($slot)
                    {{ $slot }}
                    @endisset
                </main>
            </div>
        </div>
    </div>
    @stack('modals')
    @livewireScripts
    @livewireChartsScripts
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            offset: 150,
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 20,
            centeredSlides: true,
            speed: 3000,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                
                            },
            // pagination: {
            //     el: ".swiper-pagination",
            //     clickable: true,
            // },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },


        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <x-livewire-alert::flash />
</body>

</html>