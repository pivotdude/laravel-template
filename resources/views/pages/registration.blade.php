@extends("layouts.base")

@section("content")
    <form class="h-[720px] flex items-center justify-center" method="POST">
        <div class="center px-10 py-8 bg-black-400 mx-auto flex flex-col space-y-10 shadow-xl ">
            @csrf
            <p class="text-xl font-mono">Регистрация</p>
            <x-input type="login" name="login" id="login" placeholder="Логин" />
            <x-input type="password" name="password" id="password" placeholder="Пароль" />
            <x-input type="repeatPassword" name="repeatPassword" id="repeatPassword" placeholder="Повторите пароль" />
            <x-submit />
        </div>
    </form>

@endsection
