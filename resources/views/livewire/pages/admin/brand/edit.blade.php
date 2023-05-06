<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">

<div>
    @section('title', __('ui.Shopping Cart'))
    <div class="max-w-8xl mx-auto py-6 sm:px-6 lg:px-8">
        @if (count($brands) > 0)
        <table class="w-full  ">
            <thead>
                <tr class="w-full flex  justify-between gap-6 p-3 m-3 ">
                    <th class=" @if (app()->getLocale() == 'ar') text-right @else text-left @endif">
                    </th>
                    <th class=" @if (app()->getLocale() == 'ar') text-right @else text-left @endif">
                        {{ __('ui.Brand') }}
                    </th>
                    <th class="@if (app()->getLocale() == 'ar') text-right @else text-left @endif">
                        {{ __('ui.description') }}
                    </th>
                    <th class="@if (app()->getLocale() == 'ar') text-left @else text-left @endif">
                        {{ __('ui.action') }}
                    </th>
                </tr>
            </thead>
            <tbody class="w-full flex flex-col justify-between gap-6  ">
                @foreach ($brands as $brand)
                <tr class="w-full flex  justify-between gap-6 p-3 m-3 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <td>
                        <div class="flex items-center">
                            <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center">
                            <span class="font-medium w-12 h-12 mr-4 text-black">
                                {{ $brand->name }}</span>
                        </div>
                    </td>
                    <td>
                        <div class="flex items-center">
                            <span class="font-medium  h-12 mr-4 text-black">
                                {{ Str::limit($brand->description, $limit = 40, $end = '...') }}</span>
                        </div>
                    </td>
                    <td class="@if (app()->getLocale() == 'ar') text-right @else text-left @endif">
                        <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                            <i class="material-icons-outlined text-base">visibility</i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                            <i class="material-icons-outlined text-base">edit</i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                            <i class="material-icons-round text-base">delete_outline</i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p class="text-xl">{{ __('ui.Your cart is empty.') }}</p>
        @endif
    </div>
</div>