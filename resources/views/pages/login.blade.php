@extends("layouts.base")

@section("content")
    <form class="h-[90%] flex items-center justify-center" method="post" action="{{ route('auth.login.submit')  }}">
        <div class="center px-10 py-8 bg-black-400 mx-auto flex flex-col space-y-10 shadow-xl">
            @csrf
            <p class="text-xl font-mono">Авторизация</p>
            <x-input type="login" name="login" id="login" placeholder="Логин" />
            <x-input type="password" name="password" id="password" placeholder="Пароль" />
            <x-submit />
        </div>
    </form>

@endsection
