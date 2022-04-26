<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNITEAM</title>
    <link href="{{ URL::asset('css/edit.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="Info">
        <h1 class="RedRol">Redaguoti naudotoją</h1>
        <form action="/edit" method="POST">
            @csrf
        <input type="hidden" name="id" value="{{$data['id']}}">
        <label for="name">Vardas</label><br>
        <input type="text" name="name" value="{{$data['name']}}"><br><br>
        <label for="subname">Pavardė</label><br>
        <input type="text"  name="subname" value="{{$data['subname']}}"><br><br>
        <label for="email">El. Paštas</label><br>
        <input type="text"  name="email" value="{{$data['email']}}"><br><br>
        <label for="nickname">Slapyvardis</label><br>
        <input type="text" name="nickname" value="{{$data['nickname']}}"><br><br>
        <label for="ulevel">Rolė</label><br>
        {{-- <input type="text" name="ulevel" value="{{$data['ulevel']}}"><br><br> --}}
        <select name="ulevel" readonly="readonly">
            <option value={{$data['ulevel']}}><?php if( $data['ulevel'] == 1){
                echo ("Administratorius");
            }
            elseif ( $data['ulevel'] == 2) { 
                echo ("Komandos vadovas");
            }
            elseif ($data['ulevel'] == 3) {  
                echo ("Komandos narys");
            }
            else {
                echo ("Nenustatyta");
            }  
            ?> </option>

        </select><br><br>
        <button type="submit" >Atnaujinti</button><br>
        <a href="user"><button class="Atgal">Grįžti</button></a>
    </div>
</form>
</body>
</html>