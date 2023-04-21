<div>
	@section('title', __('ui.Add Brand'))
	<div class="grid  gap-6 grid-cols-2	 items-center justify-center w-full  ">
		<div class=" h-[500px] px-6 overflow-hidden ">
			<form>
				<div class="w-full ">
					<div class="grid xl:grid-cols-2 xl:gap-6">

						<div class="mb-3">
							<label for="text" class="text-sm text-navy-700 dark:text-white font-bold">{{__('ui.Brand Name')}}</label>
							<input type="text" id="text" placeholder="" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-12 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
						</div>
					</div>
					<div class="grid xl:grid-cols-2 xl:gap-6">
						<div class="relative z-0 mb-6 w-full group">
							<textarea type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent px-3 rounded-md py-1 border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pink-500 focus:outline-none focus:ring-0 focus:border-pink-600 peer" placeholder=" " required></textarea>
							<label for="floating_phone" class="absolute text-sm text-gray-700 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] @if (app()->getLocale() == 'ar') peer-focus:right-0   @else peer-focus:left-0 @endif peer-focus:text-pink-600 peer-focus:dark:text-pink-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 focus:ring-0  peer-focus:scale-75 peer-focus:-translate-y-6">{{__('ui.Description')}}</label>
						</div>
					</div>
				</div>
				<div class=" relative items-center  justify-center bg-grey-lighter">
					<label class="w-64 h-40 hover:text-gray-900 flex flex-col items-center px-4 py-6 bg-white text-pink rounded-lg shadow-inner   tracking-wide uppercase border border-blue cursor-pointer hover:bg-pink=300 hover:text-pink-300">
						<svg class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" color="pink">
							<path color="pink" d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
						</svg>
						<span class="mt-2 text-base hover:text-gray-900 leading-normal"> {{__('ui.Select Image')}}</span>
						<input type='file' class="absalote hidden" />
					</label>
				</div>
				<button type="submit" class="text-white bg-pink-600 hover:bg-pink-800 shadow-inner focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">{{__('ui.add')}}</button>

			</form>
		</div>
		<div>
			<img class=" h-auto ml-7" src="{{ asset('images/brand/addbrand.jpg') }}" />

		</div>
	</div>
</div>