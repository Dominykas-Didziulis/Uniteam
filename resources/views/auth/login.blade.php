<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uniteam</title>
    @extends('layouts.header')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    @section('content')
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
@endsection
</body>
</html>