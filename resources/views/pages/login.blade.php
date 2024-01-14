@extends("layouts.app")

@section("content")
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <x-input name="login" text="Логин"/>
        <x-input name="password" type="password" text="Пароль"/>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection
