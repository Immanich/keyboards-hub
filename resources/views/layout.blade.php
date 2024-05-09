<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keyboard's Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>

    <div id="main" class="bg-gray-950 w-lvh h-lvh">
        <div id="topbar" class="flex p-4 text-white">
            <h1 class="text-3xl flex-1">Keyboard's Hub</h1>
            <nav id="main-nav" class="">
                <ul class="flex gap-8 text-2xl">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/keyboards') }}">Keyboards</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                </ul>
            </nav>
        </div>
        <div id="content" class="bg-gray-900 min-w-full w-lvw h-lvh">
            @yield('content')
        </div>
    </div>

</body>
</html>
