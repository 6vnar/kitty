<div class="p-8 bg-white rounded-lg ">
    <form wire:submit.prevent="save">
        <div class="sm:flex gap-10 flex  justify-center mx-auto w-full">
            {{-- Basic Inputs --}}
            <div class="flex flex-col gap-4 basis-3/4">
                <label class="block mb-2 text-sm font-medium text-gray-500">
                    المعلومات الاساسية
                </label>
                <div class="grid xl:grid-cols-2  xl:gap-6">
                    <div>
                        <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            الاسم
                        </label>
                        <input wire:model.defer="user.name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="الاسم" required>
                        @error('user.name')<span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            معرف التليكرام </label>
                        <input wire:model.defer="user.address" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="معرف التليكرام                        " required>
                        @error('user.address')<span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="grid xl:grid-cols-2 xl:gap-6">
                    <div>
                        <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            الايميل
                        </label>
                        <input wire:model.defer="user.email" type="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="الايميل" required>
                        @error('user.email')<span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mt-1 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            الباسوورد </label>
                        <input wire:model.defer="user.password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="الباسوورد" required>
                        @error('user.password')<span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                    <div>
                        <label class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            رقم الهاتف </label>
                        <input wire:model.defer="user.phone_number" type="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5  " placeholder="رقم الهاتف" required>
                        @error('user.phone_number')<span class="text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <button type="submit" class="text-white hover:bg-blue-700 bg-blue-600 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    اضافة
                </button>
            </div>
        </div>
    </form>
</div>