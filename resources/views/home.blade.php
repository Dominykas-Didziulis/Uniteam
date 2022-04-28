<!DOCTYPE html>
<html>
<head>
    @extends('layouts.header')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Uniteam</title>
</head>
<body>
    @section('content')
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
@endsection
</body>
</html>
