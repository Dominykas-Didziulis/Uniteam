{{-- @extends('layouts.footer')
@section('Footer')
@endsection --}}
{{-- Nemanau kad reikia to footerio išvis šitam lange nes realiai tu niekur nenuskrolini
    nuo headerio. Aišku jeigu netiks pataisysiu :D Nedas --}}
<!DOCTYPE html>
<html>
<head>
    @extends('layouts.adminheader') 
    <link href="{{ URL::asset('css/registracija.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="Info1">
        <h4 class="Reg">Registruoti naudotoją</h4>
        <form action="{{route('register-user')}}" method="post">
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" 
                name="name" value="{{old('name')}}" placeholder="Vardas">
                <span class="text-danger">@error('name') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" 
                name="subname" value="{{old('subname')}}" placeholder="Pavardė">
                <span class="text-danger">@error('subname') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" 
                name="nickname" value="{{old('nickname')}}" placeholder="Naudotojo vardas">
                <span class="text-danger">@error('nickname') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" 
                name="email" value="{{old('email')}}" placeholder="El. paštas">
                <span class="text-danger">@error('email') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" 
                name="password" value="{{old('password')}}" placeholder="Slaptažodis">
                <span class="text-danger">@error('password') {{$message}} @enderror</span>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary" type="submit">Registruoti</button>
            </div>
        </form>
    </div>
</body>
</html>



        
