@extends("layouts.app")

@section("content")
    <form method="POST" action="{{route("register")}}">
        @csrf
        <x-input name="login" text="Логин"/>
        <x-input name="name" type="text" text="Имя"/>
        <x-input name="email" type="email" text="Email"/>
        <x-input name="phone" type="string" text="Телефон"/>
        <x-input name="password" type="password" text="Ваш пароль"/>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endsection

