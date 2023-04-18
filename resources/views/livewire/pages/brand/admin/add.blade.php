<div>
	@section('title', __('ui.Add Brand'))
	<div class="max-w-7xl mt-6 mx-auto py-6 sm:px-6 lg:px-8">
		<div class="bg-pink-50 overflow-hidden  mt-6 shadow-inner sm:rounded-lg">
			<div class="  p-6 ">
				<form>
					<div class="flex  gap-6">
						<div class="w-full">
							<div class="grid xl:grid-cols-2 xl:gap-6">
								<div class="relative z-0 mb-6 w-full group">
									<input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pink-500 focus:outline-none focus:ring-0 focus:border-pink-600 peer" placeholder=" " required />
									<label for="floating_first_name" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0]  @if (app()->getLocale() == 'ar') peer-focus:right-0   @else peer-focus:left-0 @endif peer-focus:text-pink-600 peer-focus:dark:text-pink-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{__('ui.Brand Name')}}</label>
								</div>
							</div>
							<div class="grid xl:grid-cols-2 xl:gap-6">
								<div class="relative z-0 mb-6 w-full group">
									<textarea type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-pink-500 focus:outline-none focus:ring-0 focus:border-pink-600 peer" placeholder=" " required></textarea>
									<label for="floating_phone" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] @if (app()->getLocale() == 'ar') peer-focus:right-0   @else peer-focus:left-0 @endif peer-focus:text-pink-600 peer-focus:dark:text-pink-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">{{__('ui.Description')}}</label>
								</div>
							</div>
							<button type="submit" class="text-white bg-pink-700 hover:bg-pink-800 shadow-inner focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">{{__('ui.add')}}</button>
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
					</div>
				</form>
			</div>
		</div>
	</div>
</div>