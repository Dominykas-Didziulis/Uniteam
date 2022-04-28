<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Uniteam</title>
        @guest
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        @endguest
        @auth
        <link rel="stylesheet" href="{{ asset('css/header2.css') }}"> 
        @endauth
    </head>
    <body class="bg-gray-200">
        <div class="Fixed">
            <nav class="p-6 bg-white flex justify-between mb-6">
                <ul class="flex items-center">
                    <img class="Logo" src="Images/TEAM.png" alt="Page logo" >  
                    <a href="/" class="Link">Pagrindinis</a>
                    <a href="" class="Link">Žaidimai</a>
                    <a href="" class="Link">Pagalba</a>
                    <a href="{{ route('about') }}" class="Link">Apie mus</a>
                    @auth
                    
                        <a href="{{ route('admin') }}" class="Link">Narių sąrašas</a>
                    
                    @endauth
                    @auth
                        <a href="" class="Dash">|</a>
                        <a href="" class="ink">{{ auth()->user()->name }}</a>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit">Atsijungti</button>
                        </form>
                        
                    @endauth

                    @guest
                        <a href="" class="Dash">|</a>
                        <a href="{{ route('login') }}" class="Link"><img src="Images/add.png" alt="Add user" style="height: 20px; width: 20px;">Prisijungti</a>   
                    @endguest              
                </ul>
            </nav>
        </div>
        @yield('content')
    </body>
</html>