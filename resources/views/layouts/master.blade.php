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
    <nav class="shadow bg-white px-16 py-4 flex justify-between items-center">
        <img src="{{asset('images/lictlogo.png')}}" alt="" class="h-16">
        <div class="flex gap-4">
            <a href="" class="hover:text-blue-900">Home</a>
            <a href="" class="hover:text-blue-900">Electronics</a>
            <a href="" class="hover:text-blue-900">Groceries</a>
            <a href="" class="hover:text-blue-900">Fashion</a>
            <a href="" class="hover:text-blue-900">Accessories</a>
            <a href="{{route('login')}}" class="hover:text-blue-900">Login</a>
        </div>
    </nav>
</body>
</html>
