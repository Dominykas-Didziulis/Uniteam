<!DOCTYPE html>
<html>
<head>
    <title>UNITEAM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
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
                        <a class="nav-link" href="{{ route('about') }}">Apie mus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('login') }}" ><img src="Images/add.png" alt="Add user" style="height: 20px; width: 20px;">Prisijungti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Login --}}

    {{-- @section('content') --}}
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="Images/user.png">
                </div>
                
                @if (session('status'))
                    <div>
                        {{ session('status') }}
                    </div>
                @endif

                <form class="col-12" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email" id="email" class="form-control @error('email') border-red-500 @enderror" value="{{ old('email') }}" placeholder="El. paštas">

                        @error('email')
                            <div>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control @error('password') border-red-500 @enderror" value="" placeholder="Slaptažodis" >

                        @error('password')
                            <div>
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Prisijungti</button>
                </form>
                <div class="col-12 pagalba">
                    <a href="">Pamiršote slaptažodį?</a>
                </div>
                <div class="col-12 pagalba">
                    <a href="">Reikia pagalbos?</a>
                </div>
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
    {{-- @endsection --}}


    {{-- @section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <div class="container">
                @if (session('status'))
                    <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                        {{ session('status') }}
                    </div>
                @endif

                <h1 class="Prisijunk">Prisijunk</h1>

                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="mb-4">
                        <input type="text" name="email" id="email" placeholder="El. paštas" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input type="password" name="password" id="password" placeholder="Slaptažodis" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                        @error('password')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" name="remember" id="remember" class="mr-2">
                            <label for="remember">Įsiminti mane</label>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Prisijungti</button>
                    </div>

                    <a href="" class="Help">Pamiršote slaptažodį?</a><br>
                    <a href="" class="Help">Reikia pagalbos?</a>
                </form>
            </div>
        </div>
    </div>
@endsection --}}
</body>
</html>