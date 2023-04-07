<div>
    <!-- if lang = ar border left -->

    <div class="p-6 @if (app()->getLocale() == 'ar') border-l @else border-r @endif" :class="sidebar_extended ? 'basis-2/12 w-2/12' : 'basis-1/12 w-1/12'">
        <aside class="sticky top-0 py-5" aria-label="Sidebar ">
            <div class="overflow-y-hidden h-screen" :class="sidebar_extended ? 'pr-9 pl-3' : ''">
                <div class="mb-5 pb-5">
                    <a href="{{ route('home') }}" class="flex items-center justify-center p-2 text-base text-gray text-red-700 rounded-lg">
                        <i class="fa-solid fa-cat fa-2x"></i>
                        <span class="ml-3 font-bold" x-show="sidebar_extended">Kitty </span>
                    </a>
                </div>
                {{-- @auth
                <div class=" block p-1 mb-10 bg-gray-100 rounded-lg border border-gray-200  px-2" x-data="{ expanded: false }">
                    <button class="w-full flex justify-between items-center" @click="expanded = ! expanded">
                        <span class="text-sm" :class="expanded ? 'text-red-500' : 'text-gray-800'">
                            <span x-show="sidebar_extended">Welcome {{ auth()->user()->name }} 👋</span>
                <span x-show="!sidebar_extended">{{ auth()->user()->name }}</span>
                </span>
                <i :class="expanded ? 'fa-angle-up text-red-500' : 'fa-angle-down text-gray-800' " class="fa-solid  group-hover:text-red-500 transition duration-75"></i>
                </button>
                <ul class="space-y-1 mt-3 border-t pt-3" x-show="expanded" x-collapse>
                    <li>
                        <a href="" class="flex  items-center py-2  px-4 text-base font-normal  text-gray-900    rounded-lg group hover:bg-gray-200 ">
                            <i class=" fa-solid fa-archway   text-gray-500 group-hover:text-gray-900     transition duration-75"></i>
                            <span x-show="sidebar_extended" class="ml-3">Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
            @endauth --}}


            @foreach ($tabs as $tab)
            <div :class="sidebar_extended ? 'mb-4 ml-3 text-left ' : 'mb-1 text-center '" class="@if (!$loop->first) mt-10 @endif  text-gray-300 @if (app()->getLocale() == 'ar') text-right @else text-left @endif">
                {{ $tab->title }}
            </div>
            <ul class="space-y-2" :class="sidebar_extended ? 'ml-3' : ''">
                @foreach ($tab->items as $item)
                
                <li>
                    <a href="{{ route($item->route) }}" :data-tooltip-target="sidebar_extended ? '' : 'tooltip-default-{{ $item->route }}'" :class="sidebar_extended ? 'py-2' : 'justify-center py-3'" class="flex items-center px-4 text-base font-normal @if ($item->active) text-red-500 @else text-gray-900 @endif rounded-lg group hover:bg-gray-100 ">
                        <i :class="sidebar_extended ? '' : ''" class=" {{ $item->icon }}  @if ($item->active) text-red-500 group-hover:text-red-500 @else text-gray-500 group-hover:text-gray-900 @endif transition duration-75 @if (app()->getLocale() == 'ar') ml-3 @else m-0  @endif   "></i>
                        <span class="ml-3 text-sm" x-show="sidebar_extended" >{{ $item->title }}</span>
                    </a>
                    <div x-show="!sidebar_extended" id="tooltip-default-{{ $item->route }}" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                        {{ $item->title }}
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>
                
                @endforeach
            </ul>

            @endforeach
            
            <div class="flex flex-col justify-center flex-none w-full basis-96 ">
                    @if (app()->getLocale() == 'ar')
                    <x-jet-dropdown-link href="{{ route('change_locale', 'en') }}">
                        <div class=" mr-1  text-gray-500 hover:text-gray-900  transition duration-75   text-lg   ">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                    </x-jet-dropdown-link>
                    @elseif(app()->getLocale() == 'en')

                    <x-jet-dropdown-link href="{{ route('change_locale', 'ar') }}">

                    <div class="ml-1 @if ($item->active)  text-red-500  @else  text-gray-500  hover:text-gray-900 @endif transition duration-75 rounded  hover:rounded-lg  text-lg   ">
                        <i class="fa-solid fa-globe"></i>
                    </div>
                    </x-jet-dropdown-link>
                    @endif

                <button @click="sidebar_extended=!sidebar_extended" x-show="sidebar_extended" class="py-3 px-6 " text="Watch Together">
                    <i class="fas fa-arrow-left text-xl"></i>
                </button>

                <button @click="sidebar_extended=!sidebar_extended" x-show="!sidebar_extended" class="py-3 px-6 " text="Watch Together">
                    <i class="fas fa-arrow-right text-xl"></i>
                </button>
        </aside>
    </div>
</div>