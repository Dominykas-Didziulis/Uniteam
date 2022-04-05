<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNITEAM</title>
    @extends('layouts.header') 
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h4 class="Prisijunk">Prisijunk</h4>
                <form action="{{route('login-user')}}" method="post"> 
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" 
                        name="nickname" value="{{old('nickname')}}" placeholder="Naudotojo vardas">
                        <span class="text-danger">@error('nickname') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" 
                        name="password" value="" placeholder="Slaptažodis">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Prisijungti</button>
                    </div>
                    <br>
                    <a class="Help" href="">Pamiršote slaptažodį?</a><br>
                    <a class="Help" href="">Reikia pagalbos?</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>