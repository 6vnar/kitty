<div>
    @section('title', 'Shopping Cart')
<div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <table class="w-full">
                <thead>
                    <tr>
                        <th class="text-left">Product</th>
                        <th class="text-left">Price</th>
                        <th class="text-left">Quantity</th>
                        <th class="text-right">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="flex items-center">
                                <img class="w-12 h-12 mr-4" src="{{ asset('images/clothes/ok.png') }}" alt="Product">
                                <span class="font-medium">Product Name</span>
                            </div>
                        </td>
                        <td>$10.00</td>
                        <td>
                            <div class="flex items-center">
                                <button class="p-1 border rounded-lg">-</button>
                                <span class="px-2">1</span>
                                <button class="p-1 border rounded-lg">+</button>
                            </div>
                        </td>
                        <td class="text-right">$10.00</td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-6 text-right">
                <button class="px-4 py-2 bg-pink-500 text-white rounded-lg">Checkout</button>
            </div>
        </div>
    </div>
</div>
</div>
