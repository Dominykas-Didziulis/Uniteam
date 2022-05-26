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

    <link rel="stylesheet" href="{{ asset('css/update.css') }}">
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
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('game') }}">Žaidimai</a>
                    </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('team') }}">Komanda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts') }}">Pokalbiai</a>
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
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="profile" style="font-style: italic;">{{ auth()->user()->nickname }}</a>
                        </li> --}}
                        
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

                        {{-- <a class="nav-link" href="{{ route('user.update', auth()->id()) }}">{{ auth()->user()->nickname }}</a>; --}}

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
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <form class="col-12" action="{{route('user.update', auth()->id())}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="Vardas float-left" >Vardas</label><br>
                        <input type="text" name="name" id="name" placeholder="Vardas"
                            class="form-control @error('name') border-red-500 @enderror"
                            value="{{ $user['name'] }}">
                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="subname" class="float-left">Pavardė</label>
                        <input type="text" name="subname" id="subname" placeholder="Pavardė"
                            class="form-control @error('name') border-red-500 @enderror"
                            value="{{ $user['subname'] }}">
                        @error('subname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="nickname" class="float-left">Slapyvardis</label>
                        <input type="text" name="nickname" id="nickname" placeholder="Prisijungimo vardas"
                            class="form-control @error('name') border-red-500 @enderror"
                            value="{{ $user['nickname'] }}">
                        @error('nickname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="email" class="float-left">El. paštas</label>
                        <input type="text" name="email" id="email" placeholder="Elektroninis paštas"
                            class="form-control @error('email') border-red-500 @enderror"
                            value="{{ $user['email'] }}">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="password" class="float-left">Naujas slaptažodis</label>
                        <input type="password" name="password" id="password" placeholder="Slaptažodis"
                            class="form-control @error('password') border-red-500 @enderror"
                            value="">
                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="password_confirmation" class="float-left">Pakartoti slaptažodį</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Pakartokite slaptažodį"
                            class="form-control @error('password_confirmation') border-red-500 @enderror"
                            value="">
                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Patvirtinti pakeitimus</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>