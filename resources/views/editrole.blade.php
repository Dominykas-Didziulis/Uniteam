<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>UNITEAM</title>
    <link href="{{ URL::asset('css/edit.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="../Images/TEAM.png" style="width: 255px; height: 109px;"></a>
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
        <div class="col-sm-12 main-section">
            <div class="modal-content">
                <form class="col-12" action="/edit" method="POST">
                    @csrf
                    <input type="hidden" readonly="readonly" name="id" value="{{$data['id']}}">
                    <div class="form-group">
                        <label for="name" class="Vardas">Vardas</label><br>
                        <input type="text" readonly="readonly" name="name" value="{{$data['name']}}"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="subname">Pavardė</label><br>
                        <input type="text" readonly="readonly" name="subname" value="{{$data['subname']}}"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="email">El. Paštas</label><br>
                        <input type="text" readonly="readonly" name="email" value="{{$data['email']}}"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="nickname">Slapyvardis</label><br>
                        <input type="text" readonly="readonly" name="nickname" value="{{$data['nickname']}}"><br><br>
                    </div>
                    <div class="form-group">
                        <label for="ulevel">Rolė</label><br>
                        <select name="ulevel">
                            <option value={{$data['ulevel']}}><?php if( $data['ulevel'] == 1){
                                echo ("Administratorius");
                            }
                            elseif ( $data['ulevel'] == 2) { 
                                echo ("Komandos vadovas");
                            }
                            elseif ($data['ulevel'] == 3) {  
                                echo ("Komandos narys");
                            }
                            else {
                                echo ("Nenustatyta");
                            }  
                            ?> </option>
                            <option value="1">Administratorius</option>
                            <option value="2">Komandos vadovas</option>
                            <option value="3">Komandos narys</option>
                        </select><br><br>
                    </div>
                    <div class="form-group">
                        <label for="team_id">Komanda</label><br>
                        <select name="team_id">
                            <option value={{$data['team_id']}}><?php if( $data['team_id'] == 1){
                                echo ("Komanda nepriskirta");
                            }
                            elseif ( $data['team_id'] == 2) { 
                                echo ("GAMA komanda");
                            }
                            elseif ($data['team_id'] == 3) {  
                                echo ("ALFA komanda");
                            }
                            elseif ($data['team_id'] == 4) {  
                                echo ("TETA komanda");
                            }
                            elseif ($data['team_id'] == 5) {  
                                echo ("OKTA komanda");
                            }
                            elseif ($data['team_id'] == 6) {
                                echo ("BETA komanda");
                            }
                            else {
                                echo ("BETA komanda");
                            }  
                            ?> </option>
                            <option value="1">Komanda nepriskirta</option>
                            <option value="2">GAMA komanda</option>
                            <option value="3">ALFA komanda</option>
                            <option value="4">TETA komanda</option>
                            <option value="5">OKTA komanda</option>
                            <option value="6">BETA komanda</option>
                        </select><br><br>
                    </div>
                    <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Atnaujinti</button>
                </form>
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
    {{-- <div class="Info">
        <form action="/edit" method="POST">
            @csrf
            <input type="hidden" readonly="readonly" name="id" value="{{$data['id']}}">
            <label for="name">Vardas</label><br>
            <input type="text" readonly="readonly" name="name" value="{{$data['name']}}"><br><br>
            <label for="subname">Pavardė</label><br>
            <input type="text" readonly="readonly" name="subname" value="{{$data['subname']}}"><br><br>
            <label for="email">El. Paštas</label><br>
            <input type="text" readonly="readonly" name="email" value="{{$data['email']}}"><br><br>
            <label for="nickname">Slapyvardis</label><br>
            <input type="text" readonly="readonly" name="nickname" value="{{$data['nickname']}}"><br><br>
            <label for="ulevel">Rolė</label><br>
            <select name="ulevel">
                <option value={{$data['ulevel']}}><?php if( $data['ulevel'] == 1){
                    echo ("Administratorius");
                }
                elseif ( $data['ulevel'] == 2) { 
                    echo ("Komandos vadovas");
                }
                elseif ($data['ulevel'] == 3) {  
                    echo ("Komandos narys");
                }
                else {
                    echo ("Nenustatyta");
                }  
                ?> </option>
                <option value="1">Administratorius</option>
                <option value="2">Komandos vadovas</option>
                <option value="3">Komandos narys</option>
            </select><br>
            <select name="team_id">
                <option value={{$data['team_id']}}><?php if( $data['team_id'] == 1){
                     echo ("Komanda nepriskirta");
                    }
                    elseif ( $data['team_id'] == 2) { 
                        echo ("GAMA komanda");
                    }
                    elseif ($data['team_id'] == 3) {  
                        echo ("ALFA komanda");
                    }
                    elseif ($data['team_id'] == 4) {  
                        echo ("TETA komanda");
                    }
                    elseif ($data['team_id'] == 5) {  
                        echo ("OKTA komanda");
                    }
                    elseif ($data['team_id'] == 6) {
                        echo ("BETA komanda");
                    }
                    else {
                        echo ("BETA komanda");
                    }  
                    ?> </option>
                    <option value="1">Komanda nepriskirta</option>
                    <option value="2">GAMA komanda</option>
                    <option value="3">ALFA komanda</option>
                    <option value="4">TETA komanda</option>
                    <option value="5">OKTA komanda</option>
                    <option value="6">BETA komanda</option>
            </select><br><br>
            <button type="submit" >Atnaujinti</button><br>
            <a href="admin"><button class="Atgal">Grįžti</button></a>
        </form>
    </div> --}}
</body>
</html>