<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>kitty</title>
    <link rel="icon" href="{{ asset('img/a.png') }}" type="image/x-icon">
    {{-- Fonts --}}

    {{--
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@200&display=swap" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.6/dist/flowbite.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap" rel="stylesheet">
    @livewireStyles
    @laravelPWA



    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/flowbite@1.4.6/dist/flowbite.js"></script>
    <script src="https://kit.fontawesome.com/4e8940f861.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body class="w-full font-sans antialiased bg-gray-200">
    <div class="pt-6 mx-auto">
        <div >
            <div class="text-center bg-white rounded-lg ">
                <livewire:components.navbar />

                <div class="flex flex-row" x-data="{ sidebar_extended: false }">
                    {{-- Left Sidebar --}}
                    <x-sidebar />

                    {{-- Content --}}
                    <div class="basis-8/12 w-8/12 grow pb-10">
                        <div class="h-36 flex items-center p-10 border-b justify-between mb-10">
                            <span class="text-2xl text-gray-600 font-semibold">@yield('title')</span>
                            @yield('header-actions')

                            @hasSection ('disable-search')
                            @else
                                {{-- <livewire:ui.search /> --}}
                            @endif
                        </div>
                        <div class="px-10"></div>
                            @isset($slot)
                                {{ $slot }}
                            @endisset
                        </div>
                        
                    </div>
                    
                </div>

            </div>

        </div>
        <livewire:components.footer />

    </div>

    @stack('modals')
    @livewireScripts
    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}

</body>

</html>
