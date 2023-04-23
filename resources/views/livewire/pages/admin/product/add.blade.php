<div>
	@section('title', __('ui.Add product'))
	<div class="grid  grid-cols-2	justify-center items-center w-full  ">
		<div class=" w-2/4 flex justify-center mx-auto items-center  ">
			<form class="w-full " wire:submit.prevent="add">
			<div>
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">
				{{__('ui.Brand Name')}}</label>
                </label>
                <div class="flex  gap-2">
                    <input wire:model="search" required type="text" class="block  p-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                    @if ($search)
                    <select wire:model="brand_id" required class="border border-gray-300 px-9 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option value="" selected>  {{__('ui.choosBrand Name')}} </option>
                        @foreach ($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                    @endif
                </div>
            </div>
			
				<!-- product name  -->
				<div class="mx-auto flex">
					<div class=" relative z-0 mb-6 w-full">
						<label for="text" class="text-sm text-navy-700 dark:text-white font-bold">{{__('ui.Product Name')}}</label>
						<input type="text" id="text" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
					</div>
				</div>
				<!-- product Description -->
				<div class="">
					<div class="relative z-0 mb-6 w-full group">
						<label for="text" class="text-sm text-navy-700 dark:text-white font-bold">{{__('ui.Description')}}</label>
						<textarea type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-60 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200" required></textarea>
					</div>
				</div>
				<!-- product price -->
				<div class="mx-auto flex">
					<div class=" relative z-0 mb-6 w-full">
						<label for="text" class="text-sm text-navy-700 dark:text-white font-bold">{{__('ui.Price')}}</label>
						<input type="text" id="text" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
					</div>
				</div>
				<!-- product quantity -->
				<div class="mx-auto flex">
					<div class=" relative z-0 mb-6 w-full">
						<label for="text" class="text-sm text-navy-700 dark:text-white font-bold">{{__('ui.Quantity')}}</label>
						<input type="text" id="text" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
					</div>
				</div>
				<!-- product discount -->
				<div class="mx-auto flex">
					<div class=" relative z-0 mb-6 w-full">
						<label for="text" class="text-sm text-navy-700 dark:text-white font-bold">{{__('ui.Discount')}}</label>
						<input type="text" id="text" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
					</div>
				</div>

				<div class=" relative items-center  justify-center bg-grey-lighter">
					<label class="w-full h-40 hover:text-gray-900 flex flex-col items-center px-4 py-6 grayy text-pink rounded-lg shadow-inner   tracking-wide uppercase border border-blue cursor-pointer ">
						<div>

							<svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" color="pink">
								<path color="pink" d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
							</svg>
						</div>
						<span class="mt-2 text-base hover:text-gray-900 leading-normal"> {{__('ui.Select Image')}}</span>
						<input type='file' class="absalote hidden" />
					</label>
				</div>
				<button type="submit" class="flex justify-center mx-auto items-center mt-6 w-full text-white bg-pink-600 hover:bg-pink-800 shadow-inner focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">{{__('ui.add')}}</button>
			</form>
		</div>
		<div class="p-6 m-6">
			<img class=" h-auto w-full  ml-7" src="{{ asset('images/category/product2.jpg') }}" />
		</div>
	</div>
</div>