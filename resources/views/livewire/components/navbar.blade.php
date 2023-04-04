<div class="   absolute top-0 w-full z-10">
    @if (app()->getLocale() == 'ar')
    <x-jet-dropdown-link href="{{ route('change_locale', 'en') }}">
        <div class="
      flex items-center justify-center w-10 h-10 text-white  rounded-full cursor-pointer ">
            <i class="fa-solid fa-globe"></i>
        </div>
    </x-jet-dropdown-link>
    @elseif(app()->getLocale() == 'en')
    <x-jet-dropdown-link href="{{ route('change_locale', 'ar') }}">
        <div class="
      flex items-center justify-center w-10 h-10 text-white  rounded-full cursor-pointer ">
            <i class="fa-solid fa-globe"></i>
        </div>
    </x-jet-dropdown-link>
    @endif
</div>