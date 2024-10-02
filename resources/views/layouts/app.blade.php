<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"
/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script>
            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>
    </head>
    <body class="font-sans antialiased dark:bg-slate-800">
        <div class="fixed lg:absolute z-50 right-4 top-5">

            <div class="relative">
                <div class="flex items-center gap-x-2">
                    <div>
                        <button id="theme-toggle" type="button"
                            class="text-gray-300 dark:text-gray-300 hover:bg-gray-400 border-gray-300 dark:hover:bg-gray-700 dark:border-gray-700 focus:outline-none rounded-lg text-sm  lg:py-0.5 lg:px-3 py-0.5 px-2">
                            <p id="theme-toggle-dark-icon" class="hidden  lg:text-sm">
                                <i class="ri-moon-fill"></i>
                            </p>
                            <p id="theme-toggle-light-icon" class="hidden  lg:text-sm">
                                <i class="ri-sun-fill"></i>
                            </p>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.alert')
        <div class="flex">
            <nav class="w-56 h-screen shadow-lg bg-gray-100 dark:bg-slate-900 dark:text-white">
                <img src="{{asset('images/lictlogo.png')}}" alt="" class="w-32 mx-auto mt-4">
                <ul class="mt-8">
                    <li>
                        <a href="{{route('dashboard')}}" class="block hover:bg-gray-200 p-4 rounded-lg font-bold text-xl @if(Route::is('dashboard'))  bg-blue-900 text-white hover:bg-blue-700 @endif">Dashboard</a>
                    </li>
                    <li>
                        <a href="{{route('category.index')}}" class="block hover:bg-gray-200 p-4 rounded-lg font-bold text-xl @if(Route::is('category.*')) bg-blue-900 text-white hover:bg-blue-700 @endif">Categories</a>
                    </li>
                    <li>
                        <a href="{{route('product.index')}}" class="block hover:bg-gray-200 p-4 rounded-lg font-bold text-xl">Products</a>
                    </li>
                    <li>
                        <a href="{{route('order.index')}}" class="block hover:bg-gray-200 p-4 rounded-lg font-bold text-xl">Orders</a>
                    </li>
                    <li>
                        <a href="{{route('dashboard')}}" class="block hover:bg-gray-200 p-4 rounded-lg font-bold text-xl">Users</a>
                    </li>
                    <li>
                       <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="hover:bg-gray-200 p-4 rounded-lg font-bold text-xl w-full text-left">Logout</button>
                       </form>
                    </li>
                </ul>
            </nav>
            <div class="p-4 flex-1">
                @yield('content')
            </div>
        </div>

        <script>
            var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            // Change the icons inside the button based on previous settings
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                    '(prefers-color-scheme: dark)').matches)) {
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                themeToggleDarkIcon.classList.remove('hidden');
            }

            var themeToggleBtn = document.getElementById('theme-toggle');

            themeToggleBtn.addEventListener('click', function() {

                // toggle icons inside button
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                // if set via local storage previously
                if (localStorage.getItem('color-theme')) {
                    if (localStorage.getItem('color-theme') === 'light') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    }

                    // if NOT set via local storage previously
                } else {
                    if (document.documentElement.classList.contains('dark')) {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('color-theme', 'light');
                    } else {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('color-theme', 'dark');
                    }
                }

            });
        </script>
    </body>
</html>
