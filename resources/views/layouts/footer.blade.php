{{-- Footeris tik kam mums jo reikia jei realiai headeris visad matomas --}}
<!DOCTYPE html>
<html>
<head>
    <link href="{{ URL::asset('css/footer.css') }}" rel="stylesheet" type="text/css" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNITEAM</title>
</head>
<body>
    <footer class="Footer">
        <img class="F_Logo" src="Images/TEAM.png" alt="Page logo" >
        <a class="F_Link" href="/">PAGRINDINIS</a>
        <a class="F_Link" href="">ŽAIDIMAI</a>
        <a class="F_Link" href="">PAGALBA</a>
        <a class="F_Link" href="{{ route('about') }}">APIE MUS</a>
        <p class="Copyright">© 2022 | COVID PAKIRSTI</p>
</footer>
</body>
</html>


