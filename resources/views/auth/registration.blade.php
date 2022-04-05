@extends('layouts.footer')
@section('Footer')
@endsection

@extends('layouts.header')
             <div class="Info">
                <div class="col-md-4 col-md-offset-4" style="margin: 10%">
                    <h4>Registracija</h4>
                    <form action="{{route('register-user')}}" method="post">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="name">Vardas</label>
                            <input type="text" class="form-control" 
                            name="name" value="{{old('name')}}">
                            <span class="text-danger">@error('name') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="subname">Pavardė</label>
                            <input type="text" class="form-control" 
                            name="subname" value="{{old('subname')}}">
                            <span class="text-danger">@error('subname') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Naudotojo vardas</label>
                            <input type="text" class="form-control" 
                            name="nickname" value="{{old('nickname')}}">
                            <span class="text-danger">@error('nickname') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="email">El. paštas</label>
                            <input type="text" class="form-control" 
                            name="email" value="{{old('email')}}">
                            <span class="text-danger">@error('email') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Slaptažodis</label>
                            <input type="password" class="form-control" 
                            name="password" value="{{old('password')}}">
                            <span class="text-danger">@error('password') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary" type="submit">Registruotis</button>
                        </div>
                    </form>
                </div>
           </div>
        </div>
