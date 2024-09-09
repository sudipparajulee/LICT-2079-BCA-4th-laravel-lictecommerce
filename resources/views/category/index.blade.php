@extends('layouts.app')
@section('content')
<h1 class="text-4xl font-extrabold text-blue-900">Categories</h1>
<hr class="h-1 bg-red-500">

<div class="text-right my-5">
    <a href="{{route('category.create')}}" class="bg-blue-900 text-white px-5 py-3 rounded-lg">Add Category</a>
</div>

<table class="w-full mt-5">
    <tr>
        <th class="border p-2 bg-gray-200">Order</th>
        <th class="border p-2 bg-gray-200">Category Name</th>
        <th class="border p-2 bg-gray-200">Action</th>
    </tr>
    @foreach($categories as $category)
    <tr class="text-center">
        <td class="border p-2">{{$category->priority}}</td>
        <td class="border p-2">{{$category->name}}</td>
        <td class="border p-2">
            <a href="" class="bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
            <a href="" class="bg-red-600 text-white px-3 py-1 rounded">Delete</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
