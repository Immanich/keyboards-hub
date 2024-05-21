<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Keyboard's Hub</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        #title {
            font-family: 'Sansita Swashed';
            font-weight: bold;
            font-style: italic;
            letter-spacing: 0.1ch;
        }

        .title {
            font-family: sans-serif;
            letter-spacing: 0.1ch;
        }

        .nav {
            font-family: sans-serif;
            opacity: 0.5;
            transition-duration: 500ms;
        }

        .nav:hover {
            opacity: 0.9;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div id="main" class="bg-gray-950 w-lvh h-lvh">
        <div id="topbar" class="flex p-4 text-white">
            <h1 id="title" class="text-3xl flex-1 opacity-70 hover:opacity-100 duration-500 cursor-pointer">Keyboard's Hub</h1>
            <nav id="main-nav" class="">
                <ul class="flex gap-8 text-2xl">
                    <li><a class="nav" href="{{ url('/') }}">Home</a></li>
                    <li><a class="nav" href="{{ url('/keyboards') }}">Keyboards</a></li>
                    <li><a class="nav" href="{{ url('/about') }}">About</a></li>
                </ul>
            </nav>
        </div>
        <div id="content" class="bg-gray-900 min-w-full w-lvw h-lvh">
            @yield('content')
        </div>
    </div>
</body>
</html>
