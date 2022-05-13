<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.20.0/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.20.0/dist/bootstrap-table.min.js"></script>
    <title>UNITEAM</title>
    <link href="{{ URL::asset('css/profile.css') }}" rel="stylesheet" type="text/css" >
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
                    <li class="nav-item">
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
                    <li class="nav-item">
                        <li class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"  style="background: none; border: 0">{{ auth()->user()->nickname }}<span class="caret"></span></button>
                            <ul class="dropdown-menu" style="background-color: rgb(44, 49, 99)">
                                <li><a class="nav-link" href="profile">Profilis</a></li>
                                <li><a class="nav-link" href="{{ route('user.update', auth()->id()) }}">Informacijos keitimas</a></li>
                              </ul>
                        </li>
                    </li>
                        
                        {{-- <form action="{{ route('user.update', auth()->id()) }}" method="get">
                            @csrf
                            <button type="submit" class="User">
                                Profilis
                            </button>
                        </form> --}}

                        <form action="{{ route('logout') }}" method="post">
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
    <div class="float-right col-2">
        <button class="redaguoti"><a class="a" href="userForm">Redaguoti</a></button>
    </div>
    <div class="container-fluid padding" id="container">
        <div class="row text-center padding">
            <div class="col-md-4">
                <img src="Images/person.jpg">
                <div class="form-group">
                    <label for="name">Vardas</label><br>
                    <input type="text" name="name" readonly="readonly" value="Petras">
                </div>
                <div class="form-group">
                    <label for="surname">Pavardė</label><br>
                    <input type="text" name="surname" readonly="readonly" value="Petraitis">
                </div>
                <div class="form-group">
                    <label for="pastas">El. paštas</label><br>
                    <input type="text" name="pastas" readonly="readonly" value="petraspetraitis@gmail.com">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="data">Gimimo data</label><br>
                    <input type="text" name="data" readonly="readonly" value="1987-03-21">
                </div>
                <div class="form-group">
                    <label for="city">Gimtasis miestas</label><br>
                    <input type="text" name="city" readonly="readonly" value="Kaunas">
                </div>
                <div class="form-group">
                    <label for="words">Trys žodžiai geriausiai apibūdinantys mane</label><br>
                    <input type="text" name="words" readonly="readonly" value="Draugiškas, atsakingas, protingas">
                </div>
                <div class="form-group">
                    <label for="pomegiai">Pomėgiai</label><br>
                    <input type="text" name="pomegiai" readonly="readonly" value="Žvejyba, futbolas, azartiniai žaidimai">
                </div>
                <div class="form-group">
                    <label for="car">Vairuojamo automobilio markė</label><br>
                    <input type="text" name="car" readonly="readonly" value="Mercedes">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="music">Mėgstamiausias muzikos žanras</label><br>
                    <input type="text" name="music" readonly="readonly" value="Rokas">
                </div>
                <div class="form-group">
                    <label for="movie">Geriausias matytas filmas</label><br>
                    <input type="text" name="movie" readonly="readonly" value="Krikštatėvis">
                </div>
                <div class="form-group">
                    <label for="fear">Didžiausia baimė</label><br>
                    <input type="text" name="fear" readonly="readonly" value="Uždaros patalpos">
                </div>
                <div class="form-group">
                    <label for="country">Šalis, kurią norėčiau aplankyti</label><br>
                    <input type="text" name="country" readonly="readonly" value="Tailandas">
                </div>
                <div class="form-group">
                    <label for="use">Į mane galima kreiptis dėl...</label><br>
                    <input type="text" name="use" readonly="readonly" value="Renginių organizavimo įdėjų">
                </div>
            </div>
        </div>
    </div>
</body>
</html>