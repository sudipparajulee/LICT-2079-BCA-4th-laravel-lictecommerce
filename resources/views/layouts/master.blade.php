<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LICT Ecommerce</title>
    <link rel="icon" href="{{asset('images/lictlogo.png')}}" type="image/x-icon">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex justify-between items-center px-16 py-2 bg-blue-900 text-white">
        <p>F|T|I|Y</p>
        <p>Call Us: 9876543210</p>
    </div>
    <nav class="shadow bg-white px-16 py-4 flex justify-between items-center mb-10">
        <img src="{{asset('images/lictlogo.png')}}" alt="" class="h-16">
        <div class="flex gap-4">
            <a href="" class="hover:text-blue-900">Home</a>
            @php
                $categories = App\Models\Category::orderBy('priority')->get();
            @endphp
            @foreach($categories as $category)
            <a href="" class="hover:text-blue-900">{{$category->name}}</a>
            @endforeach
            <a href="{{route('login')}}" class="hover:text-blue-900">Login</a>
        </div>
    </nav>
    @yield('content')
    <footer class="bg-blue-900 text-white px-16 py-4 mt-10">
        <div class="grid grid-cols-3 gap-4">
            <div>
                <h1 class="text-2xl">LICT Ecommerce</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
            </div>
            <div>
                <h1 class="text-2xl">Quick Links</h1>
                <ul>
                    <li>Home</li>
                    <li>Electronics</li>
                    <li>Groceries</li>
                    <li>Fashion</li>
                    <li>Accessories</li>
                </ul>
            </div>
            <div>
                <h1 class="text-2xl">Contact Us</h1>
                <p>Address: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.</p>
                <p>Phone: 9876543210</p>
                <p>Email: info@info.com</p>
            </div>
        </div>
    </footer>
</body>
</html>
