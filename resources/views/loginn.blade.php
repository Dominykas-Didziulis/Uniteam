<!DOCTYPE html>
<html >
<head>
    <title>UNITEAM</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8 ">
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="Fixed">
        <img class="Logo" src="Images/TEAM.png" alt="Page logo" >
        <a class="Link" href="/">PAGRINDINIS</a>
        <a class="Link" href="">ŽAIDIMAI</a>
        <a class="Link" href="">PAGALBA</a>
        <a class="Link" href="about">APIE MUS</a>
        <a class="Dash" href="">|</a>
        <a class="Link" href="prisijungti"><strong><img src="Images/add.png" alt="Add user" style="height: 20px; width: 20px;"> PRISIJUNGTI</strong></a>
    </div>

    <div class="Info">
        <h2 class="Prisijunk">Prisijunk</h2>
        <input type="text" id="Name" name="Name" placeholder="Vartotojo vardas arba el. paštas"><br>
        <input type="password" id="Password" name="Password" placeholder="Slaptažodis"><br>
        <input type="submit" value="Prisijungti">
        <br><a class="Help" href="">Pamiršote slaptažodį?</a><br>
        <a class="Help" href="">Reikia pagalbos?</a>
    </div>
</body>
</html>