@extends('layouts.app')

@section('maincontent')
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="containerRegister">
        <h1>Добавете нов отзив</h1>
        <p>Изразете своето мнение за книга тук</p>
        <hr>

        @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @error('title')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="title"><b>Моля, попълнете заглавието на книгата</b></label>
        <input type="text" value="{{ old('title') }}" placeholder="Въведете заглавие" name="title" id="title" required>

        @error('content')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="content"><b>Оставете своя отзив тук</b></label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>

        @error('name')
        <p class="alert alert-danger">{{ $message }}</p>
        @enderror
        <label for="name"><b>Автор на отзив</b></label>
        <input type="text" value="{{ old('name') }}" placeholder="Въведете своето име" name="name" id="name" required>

        <button type="submit" class="registerbtn">Изпрати отзив</button>
    </div>
</form>
@endsection