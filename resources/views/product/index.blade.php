@extends('layouts.app')
@section('content')
<h1 class="text-4xl font-extrabold text-blue-900">Products</h1>
<hr class="h-1 bg-red-500">

<div class="text-right my-5">
    <a href="{{route('product.create')}}" class="bg-blue-900 text-white px-5 py-3 rounded-lg">Add Product</a>
</div>

<table class="w-full mt-5">
    <tr>
        <th class="border p-2 bg-gray-200">S.N></th>
        <th class="border p-2 bg-gray-200">Product Picture</th>
        <th class="border p-2 bg-gray-200">Product Name</th>
        <th class="border p-2 bg-gray-200">Description</th>
        <th class="border p-2 bg-gray-200">Price</th>
        <th class="border p-2 bg-gray-200">Discounted Price</th>
        <th class="border p-2 bg-gray-200">Stock</th>
        <th class="border p-2 bg-gray-200">Status</th>
        <th class="border p-2 bg-gray-200">Action</th>
    </tr>
    <tr>
        <td class="border p-2">1</td>
        <td class="border p-2">
            <img src="{{asset('images/lictlogo.png')}}" alt="" class="w-16 h-16">
        </td>
        <td class="border p-2">Product Name</td>
        <td class="border p-2">Product Description</td>
        <td class="border p-2">Rs. 1000</td>
        <td class="border p-2">Rs. 800</td>
        <td class="border p-2">10</td>
        <td class="border p-2">Show</td>
        <td class="border p-2">
            <a href="" class="bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
            <a href="" class="bg-red-600 text-white px-3 py-1 rounded" onclick="return confirm('Are you sure to Delete?')">Delete</a>
        </td>
    </tr>
</table>
@endsection
