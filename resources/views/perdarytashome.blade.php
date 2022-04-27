<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>UNITEAM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8 ">
    <link href="{{ URL::asset('css/home.css') }}" rel="stylesheet" type="text/css" >
    
    <?php if(isset($_SESSION['ulevel'])== "1"): ?>
    {
       @extends('layouts.adminheader');
    }
    <?php elseif(isset($_SESSION['ulevel'])=="2"): ?>
    {
        @extends('layouts.user')";
    }
    <?php elseif(isset($_SESSION['ulevel'])=="3"): ?>
    {
        @extends('layouts.user')";
    }
    <?php elseif(isset($_SESSION['ulevel'])=="0"): ?>
    {
        @extends('layouts.user')";
    }
    
    <?php else: ?>
    {
        @extends('layouts.header')";
    }
    <?php endif; ?>
    
     
</head>
<body>
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
</body>
</html>