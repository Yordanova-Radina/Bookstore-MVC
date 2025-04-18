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
        <h1>Вход</h1>
        <p>Моля, попълнете формата по-долу, за да използвате своя акаунт.</p>
        <hr>
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
        @if (Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success') }}
        </div>
        @endif
        <button type="submit" class="registerbtn">Вход</button>
    </div>
</form>
@endsection