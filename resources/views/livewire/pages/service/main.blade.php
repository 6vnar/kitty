<div>
    @section('title', __('ui.service'))
    <div class="grid   grid-cols-2	justify-center   w-full  ">
        <div class=" w-2/4  justify-center mx-auto items-center  ">
            <div class="flex mx-auto justify-center items-center gap-6 mt-6 mb-6 pb-6">
                <video autoplay loop muted playsinline class="w-20 h-20 object-cover">
                    <source src="{{ asset('images/side/facebook1.mp4') }}" type="video/mp4" />
                </video>
                <video autoplay loop muted playsinline class="w-20 h-20 object-cover">
                    <source src="{{ asset('images/side/whatsapp1.mp4') }}" type="video/mp4" />
                </video>
                <video autoplay loop muted playsinline class="w-20 h-20 object-cover">
                    <source src="{{ asset('images/side/instagram2.mp4') }}" type="video/mp4" />
                </video>
            </div>
            <form class="w-full mt-6 pt-6 " wire:submit.prevent="add">
                <div>
                    <div class="text-md text-navy-700 dark:text-white font-bold"> {{__('ui.personal information')}}</div>
                    <div class="mx-auto flex">
                        <div class=" relative z-0 mb-6 w-full">
                            <input wire:model="name" placeholder="{{__('ui.Name')}}" type="text" id="text" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-9 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                        </div>
                    </div>
                    <div class="mx-auto flex">
                        <div class=" relative z-0 mb-6 w-full">
                            <input wire:model="email" type="text" id="text" placeholder="{{__('ui.Email')}}" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-9 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                        </div>
                    </div>
                    <div class="mx-auto flex">
                        <div class=" relative z-0 mb-6 w-full">
                            <input wire:model="phone_number" type="text" id="text" placeholder="{{__('ui.phone_number')}}" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-9 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                        </div>
                    </div>

                </div>
                <div>
                    <div class="text-md text-navy-700 dark:text-white font-bold mt-6 "> {{__('ui.problem description')}}</div>
                    <!--  subject  -->
                    <div class="mx-auto flex">
                        <div class=" relative z-0 mb-6 w-full">
                            <input wire:model="subject" type="text" id="text" placeholder="{{__('ui.subject')}}" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-9 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200">
                        </div>
                    </div>
                    <!-- comment -->
                    <div class="">
                        <div class="relative z-0 mb-6 w-full group">
                            <textarea wire:model="comment" type="tel" placeholder="{{__('ui.comment')}}" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="grayy focus:border-pink-600 focus:ring-0 mt-2 flex h-60 w-full items-center justify-center rounded-xl border bg-white/0 p-3 text-sm shadow-inner outline-none peer border-gray-200" required></textarea>
                        </div>
                    </div>

                    <div class=" relative items-center  justify-center bg-grey-lighter">
                        <label class="w-full h-40 hover:text-gray-900 flex flex-col items-center px-4 py-6 bg-white text-pink rounded-lg shadow-inner   tracking-wide uppercase border border-blue cursor-pointer hover:bg-pink=300 hover:text-pink-300">
                            <div wire.remove wire:target="image_path">
                                @if ($image_path)
                                <i class="fa-solid fa-check text-2xl text-[#fb97ac]"></i>
                                @else
                                <svg wire:target="image_path" class="w-8 h-8" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" color="pink">
                                    <path color="pink" d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg> @endif
                            </div>
                            <span wire:target="image_path" class="mt-2 text-base hover:text-gray-900 leading-normal"> {{__('ui.Select Image')}}</span>
                            <input wire:model.lazy="image_path" type='file' class="absalote hidden" />
                        </label>
                    </div>
                    <button type="submit" class="flex justify-center mx-auto items-center mt-6 w-full text-white bg-pink-600 hover:bg-pink-800 shadow-inner focus:ring-4 focus:ring-pink-300 font-medium rounded-lg text-sm  sm:w-auto px-5 py-2.5 text-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">{{__('ui.add')}}</button>

                </div>
            </form>
        </div>
        <div class="p-6 m-6">
            <img class=" h-auto w-full  ml-7" src="{{ asset('images/side/service.jpg') }}" />
        </div>
    </div>