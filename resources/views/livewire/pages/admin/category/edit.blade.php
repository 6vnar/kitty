
<div>
    @section('title', __('ui.controlbc'))
    <div class="max-w-8xl mx-auto py-6 sm:px-6 lg:px-8">
        <table class="w-full  ">
            <thead>
                <tr class=" flex justify-between  p-3 ">
                    <th class="">
                    </th>
                    <th class="">
                        {{ __('ui.Category') }}
                    </th>
                    <th class="">
                        {{ __('ui.Description') }}
                    </th>
                    <th class="">
                        {{ __('ui.action') }}
                    </th>
                </tr>
            </thead>
            <tbody class="w-full flex flex-col justify-between gap-6  ">
            @forelse ($category as $category)
                <tr class="w-full flex  justify-between gap-6 p-3 m-3 bg-white border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <td >
                        <div class="flex @if (app()->getLocale() == 'ar') text-left  @else text-right  @endif ">
                            <img class="rounded-full h-12 w-12   object-cover" src="https://images.unsplash.com/photo-1600856209923-34372e319a5d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2135&q=80" alt="unsplash image">
                        </div>
                    </td>
                    <td >
                        <div class="flex  ">
                            <span class="font-medium w-12 h-12  text-black">
                                {{ $category->name }}</span>
                        </div>
                    </td>
                    <td >
                        <div class="flex  ">
                            <span class="font-medium  h-12  text-black">
                                {{ Str::limit($category->description, $limit = 40, $end = '...') }}</span>
                        </div>
                    </td>
                    <td class=" ">
                        <div class="text-gray-400 hover:text-gray-100 mr-2">
                            <i class="material-icons-outlined text-base">visibility</i>
                        </div>
                        <div class="text-gray-400 hover:text-gray-100  mx-2">
                            <i class="material-icons-outlined text-base">edit</i>
                        </div>
                        <div class="text-gray-400 hover:text-gray-100  ml-2">
                        <button wire:click="confirmDelete({{$category->id}})">
                            <i class="material-icons-round text-base">delete_outline</i>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
       
    </div>
</div>