<section class="m-6 border bg-neutral-100 w-full  mx-auto p-4 rounded-lg  bg-neutral-100">
    <div class="">
        <div class="card md:flex justify-center w-full">
            <div class="w-16 h-16   md:mr-6 flex-shrink-0">
                <img class="object-cover rounded-full" src="https://cdn-icons-png.flaticon.com/512/1173/1173745.png?w=826&t=st=1682197818~exp=1682198418~hmac=cf1f062ecb220e75089f37266e4dc57b95562037006d663dc79ced5ac6c3b20b">
            </div>
            <div class="flex-rows text-center mx-auto">
                <p class="font-bold">{{ $item->name }}</p>
                <h3 class="text-xl ">{{ $item->email }}</h3>
            </div>
        </div>
        <div class=" text-center ">
            <div class="mb-4 ">
                <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">{{ $item->phone_number }}</span>
                <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">{{ $item->created_at->format('d-m')  }}</span>
                <span class="bg-gray-200 border px-3 py-1.5 rounded-lg text-sm">{{ $item->address }}</span>
            </div>
            <span wire:click="confirm_downgrade()" class=" bg-pink-300 text-white shadow-inner border px-3 py-1.5 rounded-lg text-sm">{{__('ui.employee reduction')}}</span>
        </div>
    </div>
</section>