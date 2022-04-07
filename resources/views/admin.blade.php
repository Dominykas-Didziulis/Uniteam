<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UNITEAM</title>
    <link href="{{ URL::asset('css/admin.css') }}" rel="stylesheet" type="text/css" >
    @extends('layouts.adminheader')
</head>
<body>
    <form action='registracija' method='get'>
        <input type='hidden' name='staffId' id='staffId' value='$staffId'> 
        <td class=''>
          <input type='submit' name='submit' id='submit' value='Naujo naudotojo registracija' class='bg-white'>
        </td>
    </form>
    <table class="Lentele" cellspacing="0">
     
        <tr>
          <th scope="col" class="id">
                Id
          </th>
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
        </tr>
    
        @foreach($users as $user)
        <tr>
        <td scope="col" class="">
            {{ $user['id']}}
        </td>
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
            {{ $user['id']}}
        </td>
        </tr>
    
        @endforeach
    </table>
</body>
</html>