@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-4/12 bg-white p-6 rounded-lg">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="name" class="sr-only">Vardas</label>
                    <input type="text" name="name" id="name" placeholder="Vardas" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name') }}">

                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="subname" class="sr-only">Pavardė</label>
                    <input type="text" name="subname" id="subname" placeholder="Pavardė" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('subname') border-red-500 @enderror" value="{{ old('subname') }}">

                    @error('nickname')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nickname" class="sr-only">Slapyvardis</label>
                    <input type="text" name="nickname" id="nickname" placeholder="Slapyvardis" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('nickname') border-red-500 @enderror" value="{{ old('nickname') }}">

                    @error('nickname')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">El. paštas</label>
                    <input type="text" name="email" id="email" placeholder="El. paštas" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email') }}">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Slaptažodis</label>
                    <input type="password" name="password" id="password" placeholder="Slaptažodis" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" value="">

                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Pakartoti slaptažodį</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Pakartoti slaptažodį" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password_confirmation') border-red-500 @enderror" value="">

                    @error('password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Registruotis</button>
                </div>
            </form>
        </div>
    </div>
@endsection