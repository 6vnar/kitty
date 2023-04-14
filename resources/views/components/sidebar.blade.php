<!-- component -->
<div class="p-6  @if (app()->getLocale() == 'ar') border-l @else border-r @endif h-screen " :class="sidebar_extended ? 'basis-2/12 w-2/12' : 'basis-1/12 w-1/12'" x-data="setup()"
    x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
    <div class="  flex h-[850px]  antialiased text-gray-900  dark:bg-dark dark:text-light">
        <!-- Loading screen -->
        <div x-ref="loading"
            class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-[#fb97ac]">
            Loading.....
        </div>
        <!-- Sidebar -->
        <aside class="flex left-0 flex-shrink-0 transition-all">


            <!-- Mobile bottom bar -->
            <nav aria-label="Options"
                class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-pink-100 sm:hidden shadow-t rounded-t-3xl">
                <!-- Menu button -->
                <button
                    @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                    class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                    :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-[#fbdddf]' :
                    'text-gray-500 bg-white'">
                    <span class="sr-only">Toggle sidebar</span>
                    <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>

                <!-- Logo -->
                <a href="#">
                    <img class="w-10 h-auto"
                        src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
                        alt="K-UI" />
                </a>

                <!-- User avatar button -->
                <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                        class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2">
                        <img class="w-8 h-8 rounded-lg shadow-md"
                            src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                            alt="Ahmed Kamel" />
                        <span class="sr-only">User menu</span>
                    </button>
                    <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false" x-ref="userMenu"
                        tabindex="-1"
                        class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-label="user menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Your Profile</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Settings</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Sign out</a>
                    </div>
                </div>
            </nav>

            <!-- Left mini bar -->
            <nav aria-label="Options"
                class="z-20 flex-col items-center flex-shrink-0 hidden w-16 py-4 bg-white border-pink-100 shadow-md sm:flex @if (app()->getLocale() == 'ar') border-l-2  rounded-tl-3xl rounded-bl-3xl @else border-r-2  rounded-tr-3xl rounded-br-3xl @endif ">
                <!-- Logo -->
                <div class="flex-shrink-0 py-4">
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center p-2 text-base text-gray text-[#fb97ac] rounded-lg">
                        <i class="fa-solid fa-cat fa-2x"></i>
                    </a>
                </div>

                <div class="flex flex-col items-center flex-1 p-2 space-y-4">
                    <!-- Menu button -->
                    <button
                        @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
                        class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle sidebar</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </button>
                    <!-- Messages button -->
                    <button
                        @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'"
                        class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle message panel</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </button>
                    <!-- Notifications button -->
                    <button
                        @click="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'notificationsTab'"
                        class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle notifications panel</span>
                        <svg aria-hidden="true" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                    </button>
                    @auth
                    <a href="{{ route('cart.add') }}"
                    <button class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                        class='text-gray-500 bg-white'>
                        <i class="fa-solid fa-cart-shopping hover:text-white p-1 w-5 h-5"></i>
                    </button>
                </a>
                    @endauth
                    @if (app()->getLocale() == 'ar')
                        <x-jet-dropdown-link href="{{ route('change_locale', 'en') }}">
                            <div class="p-3 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                                :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-[#fbdddf]' :
                                'text-gray-500 bg-white'">
                                <i class="fa-solid fa-globe w-5 h-5"></i>
                            </div>
                        </x-jet-dropdown-link>
                    @elseif(app()->getLocale() == 'en')
                        <x-jet-dropdown-link href="{{ route('change_locale', 'ar') }}">

                            <div class="p-3 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                                :class="(isSidebarOpen && currentSidebarTab == 'notificationsTab') ? 'text-white bg-[#fbdddf]' :
                                'text-gray-500 bg-white'">
                                <i class="fa-solid fa-globe w-5 h-5"></i>

                            </div>
                        </x-jet-dropdown-link>
                    @endif
                    <!-- button login and sign up -->
                    <!-- if guset -->

                    @auth
                        <button
                            class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                            :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-[#fbdddf]' :
                            'text-gray-500 bg-white'">

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <a href="{{ route('logout') }}" @click.prevent="$root.submit();"
                                    class="hover:text-white ml-4 text-sm text-gray-700 underline" role="menuitem"
                                    tabindex="-1" id="user-menu-item-2"> <i class="fa-solid fa-user-minus w-5 h-5"></i>
                                </a>
                            </form>

                        </button>
                    @else
                        <a href="{{ url('/login') }}" class=" hover:text-whitetext-sm text-gray-700 underline"> <span
                                class="sr-only">login</span>

                            <button
                                class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                                :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-[#fbdddf]' :
                                'text-gray-500 bg-white'">
                                <i class="fa-solid fa-right-to-bracket w-5 hover:text-white p-1 h-5"></i>

                            </button>
                        </a>

                        <a href="{{ route('register') }}"
                            class=" hover:text-white text-sm text-gray-700 underline"><span
                                class="sr-only">register</span>

                            <button
                                class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                                :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-[#fbdddf]' :
                                'text-gray-500 bg-white'">

                                <i class="fa-solid fa-user-plus hover:text-white p-1 w-5 h-5"></i>
                            </button>
                        </a>

                    @endauth

                    {{-- @auth
                    <a href="{{ route('register') }}"
                    <button
                        @click="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'messagesTab'"
                        class="p-2 transition-colors rounded-lg shadow-md hover:bg-[#fb97ac] hover:text-white focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2"
                        :class="(isSidebarOpen && currentSidebarTab == 'messagesTab') ? 'text-white bg-[#fbdddf]' :
                        'text-gray-500 bg-white'">
                        <span class="sr-only">Toggle message panel</span>
                        <i class="fa-solid fa-heart hover:text-white p-1 w-5 h-5"></i>
                    </button>
                </a>
                    @endauth --}}

                    

                </div>

                <!-- User avatar -->
                <div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
                        class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-white focus:ring-offset-2">
                        <img class="w-10 h-10 rounded-lg shadow-md"
                            src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
                            alt="Ahmed Kamel" />
                        <span class="sr-only">User menu</span>
                    </button>
                    <div x-show="isOpen" @click.away="isOpen = false" @keydown.escape="isOpen = false"
                        x-ref="userMenu" tabindex="-1"
                        class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-label="user menu">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Your Profile</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Settings</a>

                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                            role="menuitem">Sign out</a>
                    </div>
                </div>
            </nav>
            @if (app()->getLocale() == 'ar')
                <div x-transition:enter="transform transition-transform duration-300"
                    x-transition:enter-end="-translate-x-0" x-transition:enter-start="translate-x-full"
                    x-transition:leave="transform transition-transform duration-300"
                    x-transition:leave-end="translate-x-full" x-transition:leave-start="-translate-x-0"
                    x-show="isSidebarOpen"
                    class="fixed inset-y-0 right-0 z-10 flex-shrink-0 w-64 bg-white border-pink-100 shadow-lg sm:left-16  @if (app()->getLocale() == 'ar') border-l-2  rounded-tl-3xl rounded-bl-3xl @else border-r-2  rounded-tr-3xl rounded-br-3xl @endif sm:w-72 lg:static lg:w-64">
                @elseif(app()->getLocale() == 'en')
                    <div x-transition:enter="transform transition-transform duration-300"
                        x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                        x-transition:leave="transform transition-transform duration-300"
                        x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                        x-show="isSidebarOpen"
                        class="fixed inset-y-0 right-0 z-10 flex-shrink-0 w-64 bg-white border-pink-100 shadow-lg sm:left-16  @if (app()->getLocale() == 'ar') border-l-2  rounded-tl-3xl rounded-bl-3xl @else border-r-2  rounded-tr-3xl rounded-br-3xl @endif sm:w-72 lg:static lg:w-64">
            @endif
            <nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
                <!-- Logo -->
                <div class="flex items-center justify-center flex-shrink-0 py-10">
                    <!-- <a href="#">
                          
                            <img class="w-24 h-auto" src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png" alt="K-UI" />
                        </a> -->
                    <a href="{{ route('home') }}"
                        class="flex items-center justify-center p-2 text-base text-gray text-[#fb97ac] rounded-lg">
                        <i class="fa-solid fa-cat fa-2x w-16 h-auto"></i>
                        <span class="ml-3 font-bold text-2xl">Kitty </span>
                    </a>
                </div>

                <!-- Links -->
                <div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
                    @foreach ($tabs as $tab)
                        @foreach ($tab->items as $item)
                            <a href="{{ route($item->route) }}"
                                class="flex items-center w-full space-x-2 text-white bg-[#fbdddf] rounded-lg">
                                <span aria-hidden="true"
                                    class="p-2 bg-[#fb97ac] rounded-lg @if (app()->getLocale() == 'ar') ml-2 @else @endif">
                                    <i class="{{ $item->icon }}"></i>
                                </span>
                                <span>{{ $item->title }}</span>
                            </a>
                        @endforeach
                    @endforeach

                </div>

                <div class="flex-shrink-0 p-4 mt-10">
                    <div class="hidden p-2 space-y-6 rounded-lg md:block">
                        <img aria-hidden="true" class="-mt-10" src="{{ asset('images/side/side3.jpg') }}" />
                        <p class="text-sm text-[#fbdddf]">
                             <span class="text-base text-[#fb97ac]er">{{ __('ui.24h') }}</span>  <br />
                        </p>
                        <a href="{{ route('cart.add') }}">
                        <button
                            class="w-full px-4 py-2 text-center text-white transition-colors bg-[#fbdddf] rounded-lg hover:bg-[#fb97ac] focus:outline-none focus:ring focus:ring-[#fbdddf] focus:ring-offset-2 focus:ring-offset-gray-100">
                            {{ __('ui.order now') }}
                        </button>
                        </a>
                    </div>

                    
                </div>
            </nav>

            <section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
                <h2 class="text-xl"> {{ __('ui.Messages') }}</h2>
            </section>

            <section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
                <h2 class="text-xl"> {{ __('ui.Notifications') }}</h2>
            </section>

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
</script>
