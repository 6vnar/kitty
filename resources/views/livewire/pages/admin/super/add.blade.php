<div>
    @section('title', __('ui.basic information'))
    <div class="grid  grid-cols-2	justify-center w-full  ">
        <form wire:submit.prevent="save" class="mx-6 px-6 mt-6">
            <div class=" mx-6 px-6 flex-rows w-full mt-6  justify-center ">
                    <div class="grid xl:grid-cols-2 w-full gap-6 ">
                        <div class=" mb-6  ">
                            <label for="text" class="text-sm text-navy-700 dark:text-black font-bold">{{__('ui.Name')}}</label>
                            <input wire:model.defer="user.name" type="text" id="text" class="grayy w-full focus:border-pink-600 focus:ring-0 mt-2 flex h-10  items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                            @error('user.name')<span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class=" mb-6 ">
                            <label for="text" class="text-sm text-navy-700 dark:text-black font-bold">{{__('ui.address')}}</label>
                            <input wire:model.defer="user.address" type="text" id="text" class="grayy w-full focus:border-pink-600 focus:ring-0 mt-2 flex h-10  items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                            @error('user.address')<span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class=" mb-6 ">
                            <label for="text" class="text-sm text-navy-700 dark:text-black font-bold">{{__('ui.Email')}}</label>
                            <input wire:model.defer="user.email" type="text" id="text" class="grayy w-full focus:border-pink-600 focus:ring-0 mt-2 flex h-10  items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                            @error('user.email')<span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class=" mb-6 ">
                            <label for="text" class="text-sm text-navy-700 dark:text-black font-bold">{{__('ui.Password')}}</label>
                            <input wire:model.defer="user.password" type="text" id="text" class="grayy w-full focus:border-pink-600 focus:ring-0 mt-2 flex h-10  items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                            @error('user.password')<span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                        <div class=" mb-6 ">
                            <label for="text" class="text-sm text-navy-700 dark:text-black font-bold">{{__('ui.phone_number')}}</label>
                            <input wire:model.defer="user.phone_number" type="text" id="text" class="grayy w-full focus:border-pink-600 focus:ring-0 mt-2 flex h-10  items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                            @error('user.phone_number')<span class="text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <button type="submit" class="text-white hover:bg-blue-700 bg-pink-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center">
                        {{__('ui.Add')}}
                    </button>
            </div>
        </form>
        <div class="m-6 p-6">
            <img class=" ml-7" src="{{ asset('images/side/employee.jpg') }}" />
        </div>
    </div>
</div>