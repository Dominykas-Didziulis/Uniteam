<h1>Redaguoti rolę</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" readonly="readonly" name="id" value="{{$data['id']}}">
<input type="text" readonly="readonly" name="name" value="{{$data['name']}}"> <br> <br>
<input type="text" readonly="readonly" name="subname" value="{{$data['subname']}}"> <br> <br>
<input type="text" readonly="readonly" name="email" value="{{$data['email']}}"> <br> <br>
<input type="text" readonly="readonly" name="nickname" value="{{$data['nickname']}}"> <br> <br>
<input type="text" name="ulevel" value="{{$data['ulevel']}}"> <br> <br>
<button type="submit" >Atnaujinti</button>

</form>