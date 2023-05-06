<div>
    @section('title', __('ui.controlbc'))
    <div>
        <!-- if lang = ar border left -->

        <div class="p-6 @if (app()->getLocale() == 'ar') border-l @else border-r @endif" :class="sidebar_extended ? 'basis-2/12 w-2/12' : 'basis-1/12 w-1/12'">
            <aside class="sticky top-0 py-5" aria-label="Sidebar ">
                <div class="overflow-y-hidden h-screen" :class="sidebar_extended ? 'pr-9 pl-3' : ''">



                    @foreach ($tabs as $tab)
                    <div :class="sidebar_extended ? 'mb-4 ml-3 text-left ' : 'mb-1 text-center '" class="@if (!$loop->first) mt-10 @endif  text-gray-300 @if (app()->getLocale() == 'ar') text-right @else text-left @endif">
                        {{ $tab->title }}
                    </div>
                    <ul class="space-y-2" :class="sidebar_extended ? 'ml-3' : ''">
                        @foreach ($tab->items as $item)

                        <li>
                            <!-- <a href="{{ route($item->route) }}" :data-tooltip-target="sidebar_extended ? '' : 'tooltip-default-{{ $item->route }}'" :class="sidebar_extended ? 'py-2' : 'justify-center py-3'" class="flex items-center px-4 text-base font-normal @if ($item->active) text-red-500 @else text-gray-900 @endif rounded-lg group hover:bg-gray-100 ">
                                <i :class="sidebar_extended ? '' : ''" class=" {{ $item->icon }}  @if ($item->active) text-red-500 group-hover:text-red-500 @else text-gray-500 group-hover:text-gray-900 @endif transition duration-75 @if (app()->getLocale() == 'ar') ml-3 @else m-0  @endif   "></i>
                                <span class="ml-3 text-sm" x-show="sidebar_extended">{{ $item->title }}</span>
                            </a> -->
                            <div x-show="!sidebar_extended" id="tooltip-default-{{ $item->route }}" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                                {{ $item->title }}
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </li>

                        @endforeach
                    </ul>

                    @endforeach


            </aside>
        </div>
    </div>
</div>
</div>