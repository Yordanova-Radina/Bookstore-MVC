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

        <h1>Регистрация</h1>
        <p>Моля, попълнете формата по-долу, за да създадете своя акаунт.</p>
        <hr>

        @error('name')
        <p class="alert-danger">{{ $errors->first('name') }} </p>
        @enderror

        <label for="name"><b>Име</b></label>
        <input type="text" value="{{old('name')}}" placeholder="Въведете своето име" name="name" id="name" required>

        @error('email')
        <p class="alert-danger">{{ $errors->first('email') }} </p>
        @enderror

        <label for="email"><b>Имейл</b></label>
        <input type="text" value="{{old('email')}}" placeholder="Въведете своя имейл адрес" name="email" id="email" required>

        @error('password')
        <p class="alert-danger">{{ $errors->first('password') }} </p>
        @enderror

        <label for="password"><b>Парола</b></label>
        <input type="password" placeholder="Въведете парола" name="password" id="password" required>

        @error('psw-repeat')
        <p class="alert-danger">{{ $errors->first('psw-repeat') }} </p>
        @enderror

        <label for="psw-repeat"><b>Повтори парола</b></label>
        <input type="password" placeholder="Повторете парола" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <p>С избор за създаване на акаунт, Вие се съгласявате с нашите <a href="#">Политики за сигурност</a>.</p>
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success') }}
        </div>
        @endif


        <button type="submit" class="registerbtn">Регистрация</button>
    </div>

    <div class="container signin">
        <p>Имате акаунт? <a href="{{route('login')}}">Влезте в акаунта си</a>.</p>
    </div>
</form>
@endsection