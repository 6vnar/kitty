<div>
    @section('title',__('ui.Shopping Cart'))
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
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
            @endforeach
            <div class="mt-6 @if (app()->getLocale() == 'ar') text-left @else text-right   @endif">
                <button class="px-4 py-2 bg-pink-500 text-white rounded-lg"> {{ __('ui.Checkout') }}</button>
            </div>
            @else
            <p class="text-xl">Your cart is empty.</p>
        @endif
        </div>
    </div>
</div>
{{-- 
<div class="bg-gray-100">
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold mb-5">Shopping Cart</h1>
        @if (count($cartItems) > 0)
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left">Product</th>
                        <th class="text-right">Price</th>
                        <th class="text-right">Quantity</th>
                        <th class="text-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td class="py-5">{{ $item['name'] }}</td>
                            <td class="py-5 text-right">{{ $item['price'] }}</td>
                            <td class="py-5 text-right">{{ $item['quantity'] }}</td>
                            <td class="py-5 text-right">{{ $item['price'] * $item['quantity'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="py-5 text-right font-bold">Total:</td>
                        <td class="py-5 text-right font-bold">dd</td>
                    </tr>
                </tfoot>
            </table>
            <div class="flex justify-end pt-5">
                <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" wire:click="checkout">Checkout</button>
            </div>
        @else
            <p class="text-xl">Your cart is empty.</p>
        @endif
    </div>
</div> --}}

</div>
