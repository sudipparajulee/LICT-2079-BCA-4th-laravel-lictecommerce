@extends('layouts.app')
@section('content')
<h1 class="text-4xl font-extrabold text-blue-900">Create Product</h1>
<hr class="h-1 bg-red-500">

<form action="{{route('product.store')}}" method="POST" class="mt-5">
    @csrf
    <select name="category_id" id="" class="w-full rounded-lg my-2">
        <option value="">Electronics</option>
        <option value="">Electronics</option>
        <option value="">Electronics</option>
    </select>
    <input type="text" placeholder="Enter Product Name" name="name" class="w-full rounded-lg my-2" value="{{old('name')}}">
    @error('name')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <textarea name="description" id="" cols="30" rows="5" placeholder="Enter Product Description" class="w-full rounded-lg my-2">{{old('description')}}</textarea>
    @error('description')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <input type="text" placeholder="Enter Price" name="price" class="w-full rounded-lg my-2" value="{{old('price')}}">
    @error('price')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <input type="text" placeholder="Enter Discounted Price" name="discounted_price" class="w-full rounded-lg my-2" value="{{old('discounted_price')}}">
    @error('discounted_price')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <input type="text" placeholder="Enter Stock" name="stock" class="w-full rounded-lg my-2" value="{{old('stock')}}">
    @error('stock')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <input type="file" name="photopath" class="w-full rounded-lg my-2">
    @error('photopath')
        <p class="text-red-500 -mt-2">{{$message}}</p>
    @enderror

    <div class="flex justify-center">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Create Product</button>
        <a href="{{route('product.index')}}" class="bg-red-500 text-white px-4 py-2 rounded-lg ml-2">Cancel</a>
    </div>
</form>
@endsection
