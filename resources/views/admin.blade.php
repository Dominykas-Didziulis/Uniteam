<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uniteam</title>
    <link href="{{ URL::asset('css/admin.css') }}" rel="stylesheet" type="text/css" >
    @extends('layouts.header')
</head>
<body>  
    <form action="{{ route('register') }}" method="get">
        <input type='hidden' name='staffId' id='staffId' value='$staffId'> 
        <input type='submit' name='submit' id='submit' value='Naujo naudotojo registracija' class='bg-white'>
    </form>
 
        
    </a>   



    @section('content')    
    <table class="Lentele" cellspacing="0">
     
        <tr>
          <th scope="col" class="">
              Vardas
          </th>
          <th scope="col" class="">
              Pavardė
          </th>
          <th scope="col" class="Pastas">
              El. paštas
          </th>
          <th scope="col" class="">
              Slapyvardis
          </th>
          <th scope="col" class="">
            Rolė
          </th>
          <th scope="col" class="Red">
            Redagavimas
          </th>
        </tr>
    
        @foreach($users as $user)
        <tr>
        <td scope="col" class="">
            {{ $user['name']}}
        </td>
        <td scope="col" class="">
            {{ $user['subname']}}
        </td>
        <td scope="col" class="">
            {{ $user['email']}}
        </td>
        <td scope="col" class="">
            {{ $user['nickname']}}
        </td>
        <td scope="col" class="">
            <?php if( $user['ulevel'] == 1){
                echo ("Administratorius");
            }
            elseif ( $user['ulevel'] == 2) { 
                echo ("Komandos vadovas");
            }
            elseif ($user['ulevel'] == 3) {  
                echo ("Komandos narys");
            }
            else {
                echo ("Nenustatyta");
            }  
            ?>  
        </td>
        <td>
            <a href={{"edit/".$user['id']}} class="Redg">Redaguoti</a>
        </td>
        </tr>
    
        @endforeach
    </table>
    @endsection
</body>
</html>