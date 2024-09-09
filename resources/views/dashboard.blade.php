@extends('layouts.app')
@section('content')
    <h1 class="text-4xl font-extrabold text-blue-900">Dashboard</h1>
    <hr class="h-1 bg-red-500">

    <div class="mt-5 grid grid-cols-3 gap-8">
        <div class="bg-blue-100 p-5 shadow rounded-lg">
            <h2 class="text-2xl font-bold text-blue-900">Categories</h2>
            <p>Total Categories: 5</p>
        </div>
        <div class="bg-red-100 p-5 shadow rounded-lg">
            <h2 class="text-2xl font-bold text-blue-900">Products</h2>
            <p>Total Products: 10</p>
        </div>
        <div class="bg-green-100 p-5 shadow rounded-lg">
            <h2 class="text-2xl font-bold text-blue-900">Users</h2>
            <p>Total Users: 15</p>
        </div>
        <div class="bg-yellow-100 p-5 shadow rounded-lg">
            <h2 class="text-2xl font-bold text-blue-900">Pending Orders</h2>
            <p>Pending Orders: 20</p>
        </div>
        <div class="bg-purple-100 p-5 shadow rounded-lg">
            <h2 class="text-2xl font-bold text-blue-900">Processing Orders</h2>
            <p>Processing Orders: 30</p>
        </div>
        <div class="bg-pink-100 p-5 shadow rounded-lg">
            <h2 class="text-2xl font-bold text-blue-900">Completed Orders</h2>
            <p>Completed Orders: 40</p>
        </div>

    </div>
@endsection
