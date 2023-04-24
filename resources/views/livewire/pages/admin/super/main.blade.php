<div>
    @section('title', __('ui.employee'))
    <div class="px-4 md:px-8 xl:px-12   bg-white text-gray-800 ">
        <div class="flex mx-auto justify-center mt-6  pt-9">
            @if (auth()->user()->id == 1)
            <div class="cursor-pointer justify-center xl:mr-4 flex">
                <a href="{{ route('addadmin') }}" class="text-black text-md xl:text-xl duration-200 bg-primary-500 hover:bg-white border border-transparent hover:border-gray-500 hover:text-primary-500 focus:ring-2 focus:ring-pink-300 rounded-lg px-3 py-2 md:px-5 md:py-2.5">
                    <i class="fa-solid fa-plus"></i>
                    {{__('ui.add employee')}}                </a>
            </div>
            @endif
        </div>
        <div class="w-3/4 mx-auto grid grid-cols-1 lg:grid-cols-3 justify-center gap-6 items-center  ">
            @forelse($admins as $item)
            <livewire:pages.admin.super.card :item="$item" key="{{ now() }}" />
            @empty
            <div class="text-2xl font-medium text-gray-700">
            {{__('ui.no employee')}}
            </div>
            @endforelse
        </div>
    </div>
</div>