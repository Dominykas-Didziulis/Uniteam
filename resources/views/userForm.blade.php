<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <title>Uniteam</title>
    <link rel="stylesheet" href="{{ asset('css/registracija.css') }}">
</head>
<body>
<form action="/userForm" method="POST">
    @csrf
    <label for="vardas">Vardas:</label>
    <input type="text" name="vardas"></br>
    <label for="pavarde">Pavardė:</label>
    <input type="text" name="pavarde"></br>
    <label for="el_Pastas">Elektroninis paštas:</label>
    <input type="text" name="el_Pastas"></br>
    <label for="gimimo_Data">Gimimo data:</label>
    <input type="data" name="gimimo_Data"></br>
    <label for="gimimo_Miestas">Miestas kuriame gimiau:</label>
    <input type="text" name="gimimo_Miestas"></br>
    <label for="trys_Zodziai">Trys žodžiai apibūdinantys mane:</label>
    <input type="text" name="trys_Zodziai"></br>
    <label for="pomegiai">Mano pomėgiai:</label>
    <input type="text" name="pomegiai"></br>
    <label for="auto_Marke">Mano vairuojamo automobilio markė:</label>
    <input type="text" name="auto_Marke"></br>
    <label for="muzikos_Zanras">Mano mėgstamiausias muzikos žanras:</label>
    <input type="text" name="muzikos_Zanras"></br>
    <label for="filmas">Mėgstamiausias filmas:</label>
    <input type="text" name="filmas"></br>
    <label for="didziausia_Baime">Didžiausia baimė yra:</label>
    <input type="text" name="didziausia_Baime"></br>
    <label for="salis_Aplankyti">Šalis kurią norėčiau labiausiai aplankyti:</label>
    <input type="text" name="salis_Aplankyti"></br>
    <label for="kreiptis_galima">Į mane kreiptis galima dėl:</label>
    <input type="data" name="kreiptis_galima"></br>
    <button type="submit" class="btn">Išsaugoti</button>
</form>
</body>
</html>