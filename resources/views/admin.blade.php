@if ( auth()->user()->ulevel == 1)
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
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.20.0/dist/bootstrap-table.min.css">
    <script src="https://unpkg.com/bootstrap-table@1.20.0/dist/bootstrap-table.min.js"></script>
    <title>Uniteam</title>
    <link href="{{ URL::asset('css/admin.css') }}" rel="stylesheet" type="text/css" >
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts') }}">Komandos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('admin') }}">Narių sąrašas</a>
                    </li>
                    <li class="nav-item">
                        <li class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"  style="background: none; border: 0">{{ auth()->user()->nickname }}<span class="caret"></span></button>
                            <ul class="dropdown-menu" style="background-color: rgb(44, 49, 99)">
                                <li><a class="nav-link" href="profile">Profilis</a></li>
                                <li><a class="nav-link" href="{{ route('user.update', auth()->id()) }}">Informacijos keitimas</a></li>
                              </ul>
                        </li>
                    </li>
                    {{-- <li class="nav-item">
                        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{ auth()->user()->nickname }}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="">Mano profilis</a>
                          </div>
                        </div>
                    </li> --}}
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
                </ul>
            </div>
        </div>
    </nav>
    <div class="float-right col-4">
        <form action="{{ route('register') }}" method="get">
            <input type='hidden' name='staffId' id='staffId' value='$staffId'> 
            <input type='submit' name='submit' id='submit' value='Naujo naudotojo registracija' class='submit'>
        </form>
    </div>
    <div class="float-right col-4">
        <form action="teams" method="get">
            <input type='hidden' name='staffId' id='staffId' value='$staffId'> 
            <input type='submit' name='submit' id='submit' value='Sukurti naują komandą' class='submit'>
        </form>
    </div>
    <div class="container">
        <table class="table table-bordered table-hover">
            <tr>
            <th scope="col" class="">
                Vardas
            </th>
            <th scope="col" class="">
                Pavardė
            </th>
            <th scope="col" class="Pastas">
                El. paštas
            </th>
            <th scope="col" class="">
                Slapyvardis
            </th>
            <th scope="col" class="">
                Rolė
            </th>
            <th scope="col" class="Red">
                Redagavimas
            </th>
            </tr>
        
            @foreach($users as $user)
            <tr>
            <td scope="col" class="">
                {{ $user['name']}}
            </td>
            <td scope="col" class="">
                {{ $user['subname']}}
            </td>
            <td scope="col" class="">
                {{ $user['email']}}
            </td>
            <td scope="col" class="">
                {{ $user['nickname']}}
            </td>
            <td scope="col" class="">
                <?php if( $user['ulevel'] == 1){
                    echo ("Administratorius");
                }
                elseif ( $user['ulevel'] == 2) { 
                    echo ("Komandos vadovas");
                }
                elseif ($user['ulevel'] == 3) {  
                    echo ("Komandos narys");
                }
                else {
                    echo ("Nenustatyta");
                }  
                ?>  
            </td>
            <td class="cell">
                <button class="Redg"><a href={{"editrole/".$user['id']}} class="yea">Redaguoti</a></button>
            </td>
            </tr>
        
            @endforeach
        </table>
    </div>
    {{-- Footeris --}}

    <footer>
        <div class="container-fluid padding">
            <div class="text" id="text">
                <p>©2022 | COVID PAKIRSTI</p>
            </div>
        </div>
    </footer>
</body>
</html>
@endif