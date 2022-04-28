<!DOCTYPE html>
<html >
<head>
    @extends('layouts.header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uniteam</title>
    <link rel="stylesheet" href="{{ asset('css/registracija.css') }}">
</head>
<body>
    @section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                <div class="Info1">

                    <h1 class="Reg">Registruoti naudotoją</h1>

                    @csrf
                    <div class="mb-4">
                        <input type="text" name="name" id="name" placeholder="Vardas" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                        @error('name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input type="text" name="subname" id="subname" placeholder="Pavardė" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('subname') border-red-500 @enderror" value="{{ old('subname') }}">

                        @error('nickname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <input type="text" name="nickname" id="nickname" placeholder="Slapyvardis" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('nickname') border-red-500 @enderror" value="{{ old('nickname') }}">

                        @error('nickname')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

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
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Pakartoti slaptažodį" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                        @error('password_confirmation')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="Btn" >Registruoti</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
</body>
</html>