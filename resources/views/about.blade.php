<?php
    session_start();
?>
<!DOCTYPE html>
<html >
<head>
    <title>UNITEAM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8 ">
    <link href="{{ URL::asset('css/about.css') }}" rel="stylesheet" type="text/css" >
    
    <?php if(isset($_SESSION['ulevel'])=="2"): ?>
    {
        @extends('layouts.user')";
    }
    <?php elseif(isset($_SESSION['ulevel'])== "1"): ?>
    {
       @extends('layouts.adminheader');
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
        <p class="Moto">APIE MUS IR MŪSŲ KURIAMĄ PROJEKTĄ</p>
        <img class="Group" src="Images/about.png" alt="Three people behind a big question mark inside bubble">
    </div>

    <p class="Comment">Darbinėje aplinkoje dažnai susiduriame su situacijomis kuomet tenka dirbti komandose, siekiant atlikti paskirtą užduotį ar išvystyti tam tikrą projektą. 
        Tokiu atveju nevisuomet yra lengva dirbti ir komunikuoti su mažai pažįstamais komandos nariais, motyvuotai ir efektyviai atlikti savo rolę. 
        Tam, kad darbas būtų lengvesnis, o ryšys tarp komandos narių būtų stipresnis, sukūrėme sistemą, kurioje komandos formavimo žaidimų dėka, nauji darbuotojai turės galimybę pažinti tiek senbūvius, tiek pristatyti save, dalyvauti virtualiuose komandos formavimo žaidimuose su kitais komandos nariais. 
        Seni įmonės darbuotojai taip pat turės galimybę sužinoti apie naujus darbuotojus, pažinti juos viktorinos formatu, padėti įsitraukti į komandą per komandos formavimo žaidimus. Manome, kad tokio pobūdžio užsiemimai padės jums ne tik efektyviai atlikti darbus, tačiau ir lengvai bendrauti tarpusavyje bei suformuoti stiprią ir ilgaamžišką komandą įmonėje.</p>

    <!-- <iframe class="Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2293.946230125583!2d23.955613315897768!3d54.90386598033489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7187d29c6ba9f%3A0x52d17f6fb6cbbe3f!2sStudent%C5%B3%20g.%2050%2C%20Kaunas%2051368!5e0!3m2!1slt!2slt!4v1647976918650!5m2!1slt!2slt" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->

    <div class="Footer">
        <img class="F_Logo" src="Images/TEAM.png" alt="Page logo" >
        <a class="F_Link" href="/">PAGRINDINIS</a>
        <a class="F_Link" href="">ŽAIDIMAI</a>
        <a class="F_Link" href="">PAGALBA</a>
        <a class="F_Link" href="about">APIE MUS</a>
        <p class="Copyright">© 2022 | COVID PAKIRSTI</p>
    </div>
</body>
</html>