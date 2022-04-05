<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Authentification</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <h4>Prisijunk</h4>
                <form action="{{route('login-user')}}" method="post"> 
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif
                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="nickname">Naudotojo vardas</label>
                        <input type="text" class="form-control" 
                        name="nickname" value="{{old('nickname')}}">
                        <span class="text-danger">@error('nickname') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="password">Slaptažodis</label>
                        <input type="password" class="form-control" 
                        name="password" value="">
                        <span class="text-danger">@error('password') {{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-block btn-primary" type="submit">Prisijunkti</button>
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