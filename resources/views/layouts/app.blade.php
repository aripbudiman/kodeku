<!DOCTYPE html>
<html lang="en" data-theme="" style="scroll-padding-top: 5rem; scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Righteous&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('style')
</head>

<body>
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 flex flex-col  justify-between">
        @if (url()->current() !== route('login'))
        @include('layouts.navbar')
        @endif
        <main class="container mx-auto xl:max-w-full">
            {{ $slot }}
        </main>
        @if (url()->current() !== route('login'))
        @include('layouts.footer')
        <ul class="flex justify-between bg-base-200 fixed  xl:hidden bottom-0 inset-x-0 py-3 px-5">
            <li>
                <a class="flex flex-col justify-center items-center">
                    <i class="fa-solid fa-house"></i>
                    <span class="text-xs">Home</span>
                </a>
            </li>
            <li>
                <a href="{{ route('article') }}" class="flex flex-col justify-center items-center">
                    <i class="fa-solid fa-newspaper"></i>
                    <span class="text-xs">Article</span>
                </a>
            </li>
            <li>
                <a href="{{ route('topic') }}" class="flex flex-col justify-center items-center">
                    <i class="fa-solid fa-tags"></i>
                    <span class="text-xs">Topic</span>
                </a>
            </li>
            <li>
                <a href="{{ route('bookmark') }}" class="flex flex-col justify-center items-center">
                    <i class="fa-solid fa-tags"></i>
                    <span class="text-xs">Bookmark</span>
                </a>
            </li>
            <li>
                <a class="flex flex-col justify-center items-center">
                    <i class="fa-solid fa-user"></i>
                    <span class="text-xs">Profile</span>
                </a>
            </li>
        </ul>
        @endif
    </div>
    @stack('scripts')
</body>

</html>
