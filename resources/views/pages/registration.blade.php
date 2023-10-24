@extends("layouts.base")

@section("content")
    <form class="h-[720px] flex items-center justify-center" method="POST" action="{{route('api.auth.registration')}}">
        <div class="center px-10 py-8 bg-black-400 mx-auto flex flex-col space-y-10 shadow-xl ">
            @csrf
            <p class="text-xl font-mono">Регистрация</p>

            <input class="border p-2 w-full" id="email" name="email" type="email" placeholder="Email" value="{{ old('email') }}">
            @error("email")
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <input class="border p-2 w-full" id="password" name="password" type="password" placeholder="Пароль" value="{{ old('password') }}">
            @error("password")
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <input class="border p-2 w-full" id="password_confirmation" name="password_confirmation" type="password" placeholder="Повторите пароль" value="{{ old('password_confirmation') }}">
            @error("password_confirmation")
                <div class="text-red-500">{{ $message }}</div>
            @enderror

            <x-submit />
        </div>
    </form>

@endsection
