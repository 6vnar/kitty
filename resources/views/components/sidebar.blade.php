<!-- component -->
<div class="p-6  @if (app()->getLocale() == 'ar') border-l @else border-r @endif h-screen " :class="sidebar_extended ? 'basis-2/12 w-2/12' : 'basis-1/12 w-1/12'" x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
    <div class="  flex h-[850px]  antialiased text-gray-900  dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div x-ref="loading" class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-[#fb97ac]">
            Loading.....
        </div>
        <!-- Sidebar -->
        <aside class="flex left-0 flex-shrink-0 transition-all">
            <!-- Left mini bar -->
            <nav aria-label="Options" class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-pink-100 shadow-md sm:flex @if (app()->getLocale() == 'ar') border-l-2  rounded-tl-3xl rounded-bl-3xl @else border-r-2  rounded-tr-3xl rounded-br-3xl @endif ">
                <!-- Logo -->
                <div class="flex-shrink-0 py-4">
                    <a href="{{ route('home') }}" class="flex items-center justify-center p-2 text-base text-gray text-[#fb97ac] rounded-lg">
                        <i class="fa-solid fa-cat fa-2x"></i>
                    </a>
                </div>
                <!-- buttons -->
                <div class="flex flex-col items-center flex-1 p-2 space-y-4">
                    <!-- Menu button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle sidebar</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>
                    <!-- Messages button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle message panel</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </button>
                    <!-- Notifications button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'" class=" p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle notifications panel</span>
                        <svg aria-hidden="true" class="fa-shake text-red-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    @admin
                    <!-- Settings button -->
                    <button @click="(isSidebarOpen && currentSidebarTab == 'admintab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'admintab'" class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2" :class="(isSidebarOpen && currentSidebarTab == 'admintab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle sidebar</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </button>
                    @endadmin
                    <!-- admin button -->
                    @if(auth()->check() && auth()->user()->is_admin == true && auth()->user()->id == 1)
                    <a href="{{ route('admins') }}">
                        <button class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] text-gray-500 hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </button>
                    </a>
                    @endif
                    @auth
                    <!-- Cart button -->
                    <a href="{{ route('cart.add') }}"><button class="p-2 transition-colors text-gray-500 rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
                            <i class="fa-solid fa-cart-shopping hover:text-white p-1 w-5 h-5"></i>
                        </button>
                    </a>
                    <!-- Favourite button -->
                    <a href="{{ route('favourite') }}"><button class="p-2 transition-colors text-gray-500 rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
                            <i class="fa-solid fa-heart hover:text-white p-1 w-5 h-5"></i>
                        </button>
                    </a>
                    @endauth
                    <!-- lang button -->
                    @if (app()->getLocale() == 'ar')
                    <x-jet-dropdown-link href="{{ route('change_locale', 'en') }}">
                        <div class="p-3 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none text-gray-500 focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2">
                            <i class="fa-solid fa-globe w-5 h-5"></i>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16"> <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/> <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/> </svg> -->
                        </div>
                    </x-jet-dropdown-link>
                    @elseif(app()->getLocale() == 'en')
                    <x-jet-dropdown-link href="{{ route('change_locale', 'ar') }}">
                        <div class="p-3 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none text-gray-500 focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2">
                            <i class="fa-solid fa-globe w-5 h-5"></i>
                        </div>
                    </x-jet-dropdown-link>
                    @endif
                    <!-- service button -->
                    @auth
                    <a href="{{ route('service') }}"><button class="p-2 transition-colors text-gray-500 rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2 text-gray-500 bg-white">
                            <i class="fa-solid fa-headphones w-5 h-5"></i>
                        </button>
                    </a>
                    <!-- logout -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a href="{{ route('logout') }}" @click.prevent="$root.submit();" class="hover:text-white ml-4 text-sm text-gray-500 underline" role="menuitem" tabindex="-1" id="user-menu-item-2">
                            <button class="p-3 transition-colors rounded-lg mr-3 shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2">
                                <i class="fa-solid fa-user-minus "></i>
                            </button>

                        </a>
                    </form>
                    @else
                    <!-- login -->
                    <a href="{{ url('/login') }}" class=" hover:text-white text-sm text-gray-500 underline"> <span class="sr-only">login</span>
                        <button class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2">
                            <i class="fa-solid fa-right-to-bracket w-5 hover:text-white p-1 h-5"></i>
                        </button>
                    </a>
                    <!-- register -->
                    <a href="{{ route('register') }}" class=" hover:text-white text-sm text-gray-500 underline"><span class="sr-only">register</span>
                        <button class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2">
                            <i class="fa-solid fa-user-plus hover:text-white p-1 w-5 h-5"></i>
                        </button>
                    </a>
                    @endauth
                </div>
            </nav>
            @if (app()->getLocale() == 'ar')
            <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-end="-translate-x-0" x-transition:enter-start="translate-x-full" x-transition:leave="transform transition-transform duration-300" x-transition:leave-end="translate-x-full" x-transition:leave-start="-translate-x-0" x-show="isSidebarOpen" class="fixed inset-y-0 right-0 z-10 flex-shrink-0 w-64 bg-white border-pink-100 shadow-lg sm:left-16  @if (app()->getLocale() == 'ar') border-l-2  rounded-tl-3xl rounded-bl-3xl @else border-r-2  rounded-tr-3xl rounded-br-3xl @endif sm:w-72 lg:static lg:w-64">
                @elseif(app()->getLocale() == 'en')
                <div x-transition:enter="transform transition-transform duration-300" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition-transform duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" x-show="isSidebarOpen" class="fixed inset-y-0 right-0 z-10 flex-shrink-0 w-64 bg-white border-pink-100 shadow-lg sm:left-16  @if (app()->getLocale() == 'ar') border-l-2  rounded-tl-3xl rounded-bl-3xl @else border-r-2  rounded-tr-3xl rounded-br-3xl @endif sm:w-72 lg:static lg:w-64">
                    @endif
                    <!-- minue  -->
                    <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
                        <!-- Logo -->
                        <div class="flex items-center justify-center flex-shrink-0 py-10">
                            <a href="{{ route('home') }}" class="flex items-center justify-center p-2 text-base text-gray text-[#fb97ac] rounded-lg">
                                <i class="fa-solid fa-cat fa-2x w-16 h-auto"></i>
                                <span class="ml-3 font-bold text-2xl">Kitty </span>
                            </a>
                        </div>
                        <!-- Links -->
                        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                            @foreach ($tabs as $tab)
                            @foreach ($tab->items as $item)
                            <a href="{{ route($item->route) }}" class="flex items-center w-full space-x-2 text-white bg-[#fbdddf] rounded-lg">
                                <span aria-hidden="true" class="p-2 bg-[#fb97ac] rounded-lg @if (app()->getLocale() == 'ar') ml-2 @else @endif">
                                    <i class="{{ $item->icon }}"></i>
                                </span>
                                <span>{{ $item->title }}</span>
                            </a>
                            @endforeach
                            @endforeach
                        </div>
                        <!-- diccrioption -->
                        <div class="flex-shrink-0 p-4 mt-10">
                            <div class="hidden p-2 space-y-6 rounded-lg md:block">
                                <img aria-hidden="true" class="-mt-10 " src="{{ asset('images/side/side3.jpg') }}" />
                                <p class="text-sm pb-6 text-[#fbdddf] ">
                                    <span class="text-base text-[#fb97ac]er">{{ __('ui.24h') }}</span> <br />
                                </p>
                                <a href="{{ route('cart.add') }}">
                                    <button class="w-full px-4 py-2 text-center text-white transition-colors bg-[#fbdddf] rounded-lg hover:bg-[#fb97ac] focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-2 focus:ring-offset-gray-100">
                                        {{ __('ui.order now') }}
                                    </button>
                                </a>
                            </div>
                        </div>
                    </nav>
                    <!-- open messages -->
                    <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
                        <h2 class="text-xl mb-6"> {{ __('ui.Messages') }}</h2>
                        <div id="myDiv" class="z-9 h-9 mt-6  w-full rounded-md bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-0.5">
                            <div class="px-6 gap-2  h-full w-full bg-white">
                                <div class="flex  justify-between items-center">
                                    <i class="fa-solid fa-user  h-4 w-4 p-2 " style="color: #e74793;"></i>
                                    <div>
                                        <h1 class="text-md">subject</h1>
                                    </div>
                                    <i class="fa-solid fa-chevron-down fa-fade h-3 w-3" onclick="toggleHeight()" style="color: #000;"></i>
                                </div>
                                <div>
                                    <p id="p" class=" text-sm ">message</p>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- open notifications -->
                    <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
                        <h2 class="text-xl"> {{ __('ui.Notifications') }}</h2>
                    </section>
                    <!-- open Settings -->
                    <section x-show="currentSidebarTab == 'admintab'" aria-label="Main" class="flex flex-col h-full">
                        <div class="flex items-center justify-center flex-shrink-0 py-10">
                            <a href="{{ route('home') }}" class="flex items-center justify-center p-2 text-base text-gray text-[#fb97ac] rounded-lg">
                                <i class="fa-solid fa-cat fa-2x w-16 h-auto"></i>
                                <span class="ml-3 font-bold text-2xl">Settings </span>
                            </a>
                        </div>
                        <!-- Links -->
                        <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                            <!-- admin tab  -->
                            @foreach ($admins as $tab)
                            @foreach ($tab->items as $item)
                            <a href="{{ route($item->route) }}" class="flex items-center w-full space-x-2 text-white bg-[#fbdddf] rounded-lg">
                                <span aria-hidden="true" class="p-2 bg-[#fb97ac] rounded-lg @if (app()->getLocale() == 'ar') ml-2 @else @endif">
                                    <i class="{{ $item->icon }}"></i>
                                </span>
                                <span>{{ $item->title }}</span>
                            </a>
                            @endforeach
                            @endforeach
                        </div>
                    </section>
                </div>
        </aside>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
<script>
    const setup = () => {
        return {
            isSidebarOpen: false,
            currentSidebarTab: null,
            isSettingsPanelOpen: false,
            isSubHeaderOpen: false,
            watchScreen() {
                if (window.innerWidth <= 1024) {
                    this.isSidebarOpen = false
                }
            },
        }
    }
    function toggleHeight() {
        const div = document.getElementById('myDiv');
        div.classList.toggle('h-36');
        div.classList.toggle('transition-all');
        div.classList.toggle('duration-500');
        div.classList.toggle('ease-in-out');
        const p = document.getElementById('p');
        p.classList.toggle('block');
        p.classList.toggle('transition-all');
        p.classList.toggle('duration-500');
        p.classList.toggle('ease-in-out');
    }
</script>