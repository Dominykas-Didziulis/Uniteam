@extends('layouts.footer')
@section('Footer')
@endsection

@extends('layouts.adminheader')

<form action='registracija' method='get' style="margin: 10%">
    <input type='hidden' name='staffId' id='staffId' value='$staffId'> 
    <td class=''>
      <input type='submit' name='submit' id='submit' value='Naujo naudotojo registracija' class='bg-white'>
    </td>
</form>
<table style=""; border="1">
 
    <tr>
      <th scope="col" class="">
            ID
      </th>
      <th scope="col" class="">
          VARDAS
      </th>
      <th scope="col" class="">
          PAVARDĖ
      </th>
      <th scope="col" class="">
          ELEKTRONINIS PAŠTAS
      </th>
      <th scope="col" class="">
          Slapyvardis
      </th>
      <th scope="col" class="">
        Rolė
      </th>
      <th scope="col" class="">
        Redagavimas
      </th>
    </tr>

    @foreach($users as $user)
    <tr>
    <th scope="col" class="">
        {{ $user['id']}}
    </th>
    <th scope="col" class="">
        {{ $user['name']}}
    </th>
    <th scope="col" class="">
        {{ $user['subname']}}
    </th>
    <th scope="col" class="">
        {{ $user['email']}}
    </th>
    <th scope="col" class="">
        {{ $user['nickname']}}
    </th>
    <th scope="col" class="">
        {{ $user['ulevel']}}
    </th>
    <th>
        <a href={{"edit/".$user['id']}}>Redaguoti</a>
    </th>
    
    </tr>

    @endforeach
</table>