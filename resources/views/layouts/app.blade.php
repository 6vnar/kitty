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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="font-sans tajawal bg-secondary-100" dir="{{ config('app.locale') == 'en' ? 'ltr' : 'rtl' }}">
    <div class="p-0 mx-auto sm:p-6">
        <div class="flex flex-row h-screen bg-white rounded-lg sm:h-main" x-data="{ sidebar_extended: false, showSideBar: false }" x-cloak>
            {{-- Left Sidebar --}}
            <x-sidebar />
            {{-- Content --}}
            <div class="w-full pb-0 sm:pb-10 sm:w-8/12 sm:basis-8/12 sm:grow">
                <div class="flex flex-col lg:items-center justify-between p-5 border-b sm:h-20 sm:flex-row">
                    <div class="flex justify-between mb-5">
                        <span class="text-2xl font-semibold text-secondary-700">@yield('title')</span>
                    </div>
                    <div @class([ ' sm:hidden flex flex-row absolute z-20 mt-24' , 'right-0'=> ar(),
                        'left-0' => en(),
                        ]) x-show="showSideBar">
                        <nav @class([ 'bg-white shadow-lg h-screen border-white ' , ' pl-10 sm:pl-10'=> ar(),
                            'pr-10 sm:pr-10' => en(),
                            ])>
                        </nav>
                    </div>
                    @yield('header-actions')
                    <div class="flex flex-row items-center justify-between">
                        <button @click="showSideBar=!showSideBar" type="button" class=" inline-flex items-center px-4 py-2 text-lg text-gray-400 bg-transparent rounded-lg sm:hidden hover:bg-gray-200 hover:text-gray-900 ">
                            <i class="fas fa-bars"></i>
                        </button>
                        

                        @hasSection('disable-search')
                        @else
                        @if (Request::route()->getName() == 'home')
                        @else
                        @endif
                        @endif
                    </div>
                </div>
                <div class="p-1 overflow-y-auto sm:p-5 h-content bg-secondary-50">
                    @isset($slot)
                    {{ $slot }}
                    @endisset
                </div>
            </div>

            {{-- Right Sidebar --}}
            {{-- @if (Route::is('home*') || Route::is('movies-all') || Route::is('series-all'))
            @livewire('right-side')
            @endif --}}
        </div>
    </div>

    @stack('modals')
    @livewireScripts
    @livewireChartsScripts
    <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
    <x-livewire-alert::flash />

</body>

</html>