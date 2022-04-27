<!DOCTYPE html>
<link rel="stylesheet" href="{{ asset('css/header.css') }}">


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Uniteam</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-gray-200">
        <nav class="p-6 bg-white flex justify-between mb-6">
            <ul class="flex items-center">
                
                <li>
                <img class="Logo" src="Images/TEAM.png" alt="Page logo" >
                </li>
                <li>
                    <a href="/" class="p-3">Pagrindinis</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="p-3">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('posts') }}" class="p-3">Posts</a>
                </li>
                @auth
                <li>
                    <a href="{{ route('admin') }}" class="p-3">Narių sąrašas</a>
                </li>
                @endauth
                             
            </ul>

            <ul class="flex items-center">
                @auth
                    <li>
                        <a href="" class="p-3">{{ auth()->user()->name }}</a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post" class="p-3 inline">
                            @csrf
                            <button type="submit">Atsijungti</button>
                        </form>
                    </li>
                @endauth

                @guest
                    <li>
                        <a href="{{ route('login') }}" class="p-3">Prisijungti</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="p-3">Registruotis</a>
                    </li>
                @endguest
            </ul>
        </nav>
        @yield('content')
    </body>
</html>
