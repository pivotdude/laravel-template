@extends("layouts.app")

@section("content")
    <form method="POST" action="{{route("registerAction")}}">
        @csrf
        <x-input name="login" text="Логин" required="true" />
        <x-input name="name" type="text" text="ФИО" example="Иванов Иван Иванович" />
        <x-input name="email" type="email" text="Email" example="example@example.com" />
        <x-input name="phone" type="string" text="Телефон" example="+7(999)999-99-99" />
        <x-input name="password" type="password" text="Ваш пароль" example="" />
        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
@endsection

