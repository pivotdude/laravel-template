@extends("layouts.base")

@section("content")
    <form class="h-[90%] flex items-center justify-center" method="post" action="{{ route('auth.auth.login')  }}">
        <div class="center px-10 py-8 bg-black-400 mx-auto flex flex-col space-y-10 shadow-xl">
            @csrf
            <p class="text-xl font-mono">Авторизация</p>
            <input type="email" name="email" id="email" placeholder="Email" class="py-2 px-5 mx-3 rounded placeholder:text-slate-500 font-light border-black focus:outline-none border-b-2 focus:ring-sky-400" value="{{old('email')}}">
            @error("email")
            <div class="text-red-500">{{ $message }}</div>
            @enderror

            <input type="text" name="password" id="password" placeholder="Пароль" class="py-2 px-5 mx-3 rounded placeholder:text-slate-500 font-light border-black focus:outline-none border-b-2 focus:ring-sky-400" value="{{old('password')}}">
            @error("password")
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <x-submit />
        </div>
    </form>

@endsection
