@extends("layouts.base")

@section("content")
    <form action="{{route('auth.registration')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">ФИО</label>
            <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        @error("name")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Эмайл адрес</label>
            <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error("email")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input name="password" value="{{ old("password")  }}" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error("password")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
            <input name="password_confirmation" value="{{ old("password_confirmed")  }}" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error("password")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <div class="mb-3 form-check">
            <input value="{{ old("agreement") }}" name="agreement" type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        @error("agreement")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

