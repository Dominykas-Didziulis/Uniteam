<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Uniteam</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="../Images/TEAM.png" style="width: 255px; height: 109px;"></a>
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
    <form action="/edituserform" method="post">
    <div class="container-fluid padding" id="container">
        <div class="row text-center padding">
            
                @csrf
                    <input type="hidden" readonly="readonly" name="id" value="{{$data['id']}}">
                    <input type="hidden" readonly="readonly" name="user_id" value="{{$data['user_id']}}">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="vardas" >Vardas:</label>
                        <input type="text" name="vardas" class="form-control" value="{{$data['vardas']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="pavarde" >Pavardė:</label>
                        <input type="text" name="pavarde" class="form-control" value="{{$data['pavarde']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="el_Pastas">Elektroninis paštas:</label>
                        <input type="text" name="el_Pastas" class="form-control" value="{{$data['el_Pastas']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="gimimo_Data">Gimimo data:</label>
                        <input type="text" name="gimimo_Data" class="form-control" value="{{$data['gimimo_Data']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="auto_Marke">Mano vairuojamo automobilio markė:</label>
                        <input type="text" name="auto_Marke" class="form-control" value="{{$data['auto_Marke']}}"> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gimimo_Miestas">Miestas kuriame gimiau:</label>
                        <input type="text" name="gimimo_Miestas" class="form-control" value="{{$data['gimimo_Miestas']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="trys_Zodziai">Trys žodžiai apibūdinantys mane:</label>
                        <input type="text" name="trys_Zodziai" class="form-control" value="{{$data['trys_Zodziai']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="pomegiai">Mano pomėgiai:</label>
                        <input type="text" name="pomegiai" class="form-control" value="{{$data['pomegiai']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="kreiptis_Galima">Į mane kreiptis galima dėl:</label>
                        <input type="text" name="kreiptis_Galima" class="form-control" value="{{$data['kreiptis_Galima']}}"> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="muzikos_Zanras">Mano mėgstamiausias muzikos žanras:</label>
                        <input type="text" name="muzikos_Zanras" class="form-control" value="{{$data['muzikos_Zanras']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="filmas">Mėgstamiausias filmas:</label>
                        <input type="text" name="filmas" class="form-control" value="{{$data['filmas']}}">
                    </div>
                    <div class="form-group">
                        <label for="didziausia_Baime">Didžiausia baimė yra:</label>
                        <input type="text" name="didziausia_Baime" class="form-control" value="{{$data['didziausia_Baime']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="salis_Aplankyti">Šalis kurią norėčiau labiausiai aplankyti:</label>
                        <input type="text" name="salis_Aplankyti" class="form-control" value="{{$data['salis_Aplankyti']}}"> 
                    </div>
                    <button type="submit" class="redaguoti float-right"><i class="fas fa-sign-in-alt"></i>Išsaugoti</button>
                </div>
        </div>
    </div>
    </form>
    {{-- <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <form class="col-12" action="/edituserform" method="post">
                    @csrf
                    <input type="hidden" readonly="readonly" name="id" value="{{$data['id']}}">
                    <input type="hidden" readonly="readonly" name="user_id" value="{{$data['user_id']}}">
                    <div class="form-group">
                        <label for="vardas" class="Vardas float-left">Vardas:</label>
                        <input type="text" name="vardas" class="form-control" value="{{$data['vardas']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="pavarde" class="float-left">Pavardė:</label>
                        <input type="text" name="pavarde" class="form-control" value="{{$data['pavarde']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="el_Pastas" class="float-left">Elektroninis paštas:</label>
                        <input type="text" name="el_Pastas" class="form-control" value="{{$data['el_Pastas']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="gimimo_Data" class="float-left">Gimimo data:</label>
                        <input type="text" name="gimimo_Data" class="form-control" value="{{$data['gimimo_Data']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="gimimo_Miestas" class="float-left">Miestas kuriame gimiau:</label>
                        <input type="text" name="gimimo_Miestas" class="form-control" value="{{$data['gimimo_Miestas']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="trys_Zodziai" class="float-left">Trys žodžiai apibūdinantys mane:</label>
                        <input type="text" name="trys_Zodziai" class="form-control" value="{{$data['trys_Zodziai']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="pomegiai" class="float-left">Mano pomėgiai:</label>
                        <input type="text" name="pomegiai" class="form-control" value="{{$data['pomegiai']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="auto_Marke" class="float-left">Mano vairuojamo automobilio markė:</label>
                        <input type="text" name="auto_Marke" class="form-control" value="{{$data['auto_Marke']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="muzikos_Zanras" class="float-left">Mano mėgstamiausias muzikos žanras:</label>
                        <input type="text" name="muzikos_Zanras" class="form-control" value="{{$data['muzikos_Zanras']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="filmas" class="float-left">Mėgstamiausias filmas:</label>
                        <input type="text" name="filmas" class="form-control" value="{{$data['filmas']}}">
                    </div>
                    <div class="form-group">
                        <label for="didziausia_Baime" class="float-left">Didžiausia baimė yra:</label>
                        <input type="text" name="didziausia_Baime" class="form-control" value="{{$data['didziausia_Baime']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="salis_Aplankyti" class="float-left">Šalis kurią norėčiau labiausiai aplankyti:</label>
                        <input type="text" name="salis_Aplankyti" class="form-control" value="{{$data['salis_Aplankyti']}}"> 
                    </div>
                    <div class="form-group">
                        <label for="kreiptis_Galima" class="float-left">Į mane kreiptis galima dėl:</label>
                        <input type="text" name="kreiptis_Galima" class="form-control" value="{{$data['kreiptis_Galima']}}"> 
                    </div>
                    <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Išsaugoti</button>
                </form>
            </div>
        </div>
    </div> --}}
</body>
</html>