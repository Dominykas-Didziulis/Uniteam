<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Uniteam</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        {{-- @guest
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        @endguest
        @auth
        <link rel="stylesheet" href="{{ asset('css/header2.css') }}"> 
        @endauth --}}
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/"><img src="Images/TEAM.png" style="width: 255px; height: 109px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Pagrindinis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Žaidimai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Apie mus</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        {{-- <div class="Fixed">
            <nav class="p-6 bg-white flex justify-between mb-6">
                <ul class="flex items-center">
                    <a href="{{ route('home') }}"><img class="Logo" src="Images/TEAM.png" alt="Page logo" >  </a>
                    <a href="/" class="Link">Pagrindinis</a>
                    <a href="" class="Link">Žaidimai</a>
                    @auth
                    <a href="{{ route('posts') }}" class="Link">Komandos</a>
                    @endauth
                    <a href="{{ route('about') }}" class="Link">Apie mus</a>
                    @auth
                    @if ( auth()->user()->ulevel == 1)
                         <a href="{{ route('admin') }}" class="Link">Narių sąrašas</a>
                    @endif                    
                    @endauth
                    @auth
                        <a href="" class="Dash">|</a>pas jus serveris off

                        <a href="{{ route('update') }}" class="Link"></a>
                        ok ate
                       <form action="{{ route('user.update', auth()->id()) }}" method="get">
                            @csrf
                            <button type="submit" class="User">
                                Profilis
                            </button>
                        </form>
                    
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
        @yield('content') --}}
    </body>
  
</html>