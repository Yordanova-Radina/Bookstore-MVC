@extends('layouts.app')


@section('maincontent')
<form action="{{route('user.store')}}" method="POST">
    @csrf
    <div class="containerRegister">
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success') }}
        </div>
        @endif

        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        @error('name')
        <p class="alert-danger">{{ $errors->first('name') }} </p>
        @enderror

        <label for="name"><b>Name</b></label>
        <input type="text" value="{{old('name')}}" placeholder="Enter name" name="name" id="name" required>

        @error('email')
        <p class="alert-danger">{{ $errors->first('email') }} </p>
        @enderror

        <label for="email"><b>Email</b></label>
        <input type="text" value="{{old('email')}}" placeholder="Enter Email" name="email" id="email" required>

        @error('password')
        <p class="alert-danger">{{ $errors->first('password') }} </p>
        @enderror

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>

        @error('psw-repeat')
        <p class="alert-danger">{{ $errors->first('psw-repeat') }} </p>
        @enderror

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success') }}
        </div>
        @endif


        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="container signin">
        <p>Already have an account? <a href="#">Sign in</a>.</p>
    </div>
</form>
@endsection