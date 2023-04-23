<div>
    @section('title',__('ui.Shopping Cart'))
    <div class="max-w-8xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                @if (count($carts) > 0)
                @foreach($carts as $cart)
                <h2 class="text-lg font-bold">{{ $cart->id }}</h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class=" @if (app()->getLocale() == 'ar') text-right @else text-left  @endif"> {{ __('ui.Product') }}</th>
                            <th class=" @if (app()->getLocale() == 'ar') text-right @else text-left  @endif"> {{ __('ui.Price') }}</th>
                            <th class="@if (app()->getLocale() == 'ar') text-right @else text-left  @endif"> {{ __('ui.Quantity') }}</th>
                            <th class="@if (app()->getLocale() == 'ar') text-left @else text-right   @endif"> {{ __('ui.Subtotal') }}</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart->products as $product)
                        <tr>
                            <td>
                                <div class="flex items-center">
                                    <img class="w-12 h-12 mr-4 @if (app()->getLocale() == 'ar') ml-2 @else  @endif" src="{{ asset('images/clothes/ok.png') }}" alt="Product">
                                    <span class="font-medium w-12 h-12 mr-4 text-black"> {{ $product['name'] }}</span>
                                </div>
                            </td>
                            <td>{{ $product['price'] }}</td>
                            <td>
                                <div class="flex items-center">
                                    <button class="p-1 border rounded-lg">-</button>
                                    <span class="px-2">{{ $cart['quantity'] }}</span>
                                    <button class="p-1 border rounded-lg">+</button>
                                </div>
                            </td>
                            <td class="@if (app()->getLocale() == 'ar') text-left @else text-right   @endif">{{ $product['price'] * $cart['quantity'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-6 @if (app()->getLocale() == 'ar') text-left @else text-right   @endif">
                    <button class="px-4 py-2 bg-pink-500 text-white rounded-lg"> {{ __('ui.Checkout') }}</button>
                    <button wire:click="confirmDelete({{ $cart->id }})" class="px-4 py-2 bg-pink-500 text-white rounded-lg">{{ __('ui.delete') }}</button>
                </div>
                @endforeach
               
                
                @else
                <p class="text-xl">{{ __('ui.Your cart is empty.') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>