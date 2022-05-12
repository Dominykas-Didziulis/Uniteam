<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}"> --}}
    <title>UNITEAM</title>

    
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
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
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts') }}">Komandos</a>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Apie mus</a>
                        </li>
                    @endguest
                    @auth
                        @if (auth()->user()->ulevel == 1)
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('admin') }}">Narių sąrašas</a>
                        </li>
                      

                        @endif
                    @endauth
                    @auth

                    <a class="nav-link" href="{{ route('user.update', auth()->id()) }}">{{ auth()->user()->nickname }}</a>;

                        <form action="{{ route('logout', auth()->user()->id) }}" method="post">
                            @csrf
                            <button type="submit" class="nav-link" style="background: none; border: 0;">ATSIJUNGTI</button>
                        </form>
                    @endauth

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}" ><img src="Images/add.png" alt="Add user" style="height: 20px; width: 20px;">Prisijungti</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    {{-- Image slider --}}
    <div id="slides" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/team1.png">
                <div class="carousel-caption">
                    <h1 class="display-2">Pradėk kurti komandą čia! </h1>
                </div>
            </div>
        </div>
    </div>

    {{-- Aprašas --}}

    <div class="container-fluid padding">
        <div class="row padding">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top align-self-center" src="Images/brainstorm.png">
                    <div class="card-body">
                        <p class="text-center">Įsitrauk į komandą užpildydamas informaciją apie save savo profilyje</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top align-self-center" src="Images/brainstorm.png">
                    <div class="card-body">
                        <p class="text-center">Pažink savo komandos narius spręsdamas individualiai sugeneruotas viktorinas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top align-self-center" src="Images/brainstorm.png">
                    <div class="card-body">
                        <p class="text-center">Stiprink tarpusavio ryšį žaisdamas virtualius komandos fromavimo žaidimus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="id" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div id="yea" class="carousel-item active">
                <img id="HH" src="Images/HH.png">
            </div>
        </div>
    </div>

    {{-- Footeris --}}

    <footer>
        <div class="container-fluid padding">
            <div class="text" id="text">
                <p>©2022 | COVID PAKIRSTI</p>
            </div>
        </div>
    </footer>

    {{-- @section('content')
    <div class="flex-none">
        <div class="w-8/12 bg-white p-6 rounded-lg">
            <div class="Header">
                <p class="Moto">PRADĖK KURTI KOMANDĄ ČIA!</p>
                <img class="Group" src="Images/group.png" alt="Group of people">
            </div>
        
            <img class="Teamwork" src="Images/teamwork.png" alt="Two dudes carrying a nut">
            <p class="Comment">Čia turėtų būti parašytas tekstas, tačiau jo nesugalvojome, tad nerašome teksto</p>
            <img class="Teamwork1" src="Images/teamwork.png" alt="Two dudes carrying a nut">
            <p class="Comment1">Čia turėtų būti parašytas tekstas, tačiau jo nesugalvojome, tad nerašome teksto</p>
            <img class="Teamwork2" src="Images/teamwork.png" alt="Two dudes carrying a nut">
            <p class="Comment2">Čia turėtų būti parašytas tekstas, tačiau jo nesugalvojome, tad nerašome teksto</p>
        
            <div class="Line">
                <img class="Holding" src="Images/HH.png" alt="Bunch of people holding hands">
                <img class="Honey" src="Images/honey.png" alt="Some honeycombs">
                <img class="Honey1" src="Images/honey.png" alt="Some honeycombs">
            </div>
            @extends('layouts.footer')
        </div>
    </div>
    @endsection --}}
</body>
</html>
