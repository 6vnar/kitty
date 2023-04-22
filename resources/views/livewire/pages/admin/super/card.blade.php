<section class="m-6 border bg-neutral-100 w-full  mx-auto p-4 rounded-lg  bg-neutral-100">
    <div class="">
        <div class="card md:flex w-full">
            <div class="w-20 h-20 mx-auto mb-6 md:mr-6 flex-shrink-0">
                <img class="object-cover rounded-full" src="https://tailwindflex.com/public/images/user.png">
            </div>
            <div class="flex-grow text-center md:text-left">
                <p class="font-bold">{{ $item->name }}</p>
                <h3 class="text-xl heading">{{ $item->email }}</h3>
                <p class="mt-2 mb-3">{{ $item->created_at }}</p>
                <div>
                    <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">{{ $item->phone_number }}</span>
                    <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">{{ $item->address }}</span> 
                    <span wire:click="confirm_downgrade()" class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">الموظف</span>
                </div>
            </div>
    </div>
    </div>
</section>