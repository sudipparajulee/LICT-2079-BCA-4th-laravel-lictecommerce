@extends('layouts.master')
@section('content')
    <div class="mt-5 grid grid-cols-4 gap-6 px-16">
        <div>
            <img src="{{asset('images/products/'.$product->photopath)}}" alt="" class="h-72 w-full object-cover rounded-lg">
        </div>
        <div class="col-span-2 border-x px-4">
            <h2 class="font-bold text-4xl">{{$product->name}}</h2>
            <p class="text-blue-900 font-bold text-2xl ">
                @if($product->discounted_price != '')
                Rs. {{$product->discounted_price}}
                <span class="line-through font-thin text-sm text-red-600">Rs. {{$product->price}}</span>
                @else
                Rs. {{$product->price}}
                @endif
            </p>
            <div class="flex mt-10">
                <button class=" bg-gray-200 px-4" onclick="dec()">-</button>
                <input type="text" class="w-14 text-center border-none bg-gray-100" value="1" id="qty" readonly>
                <button class="px-4 bg-gray-200" onclick="inc()">+</button>
            </div>
            <p class="text-gray-400">In Stock: {{$product->stock}}</p>
            <button class="bg-blue-900 text-white px-4 py-2 mt-5 rounded">Add to Cart</button>
        </div>
        <div class="text-gray-500 px-2">
            <p class="mb-2"> Delivery within 5 days</p>
            <p class="mb-2"> 7 days return policy</p>
            <p class="mb-2"> Cash on delivery available</p>
        </div>
    </div>
    <div class="mt-10 px-16">
        <h2 class="font-bold text-2xl">About Product</h2>
        <p class="text-gray-500">{{$product->description}}</p>
    </div>

    <script>
        function inc(){
            let qty = document.getElementById('qty');
            if(parseInt(qty.value) < {{$product->stock}})
            qty.value = parseInt(qty.value) + 1;
        }

        function dec(){
            let qty = document.getElementById('qty');
            if(parseInt(qty.value) > 1)
            qty.value = parseInt(qty.value) - 1;
        }
    </script>
@endsection
