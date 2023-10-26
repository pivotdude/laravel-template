@extends("layouts.base")

@section("content")
    <form action="{{route('auth.login')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input value="{{ old('email') }}" name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        @error("email")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input name="password" value="{{ old("password")  }}" type="password" class="form-control" id="exampleInputPassword1">
        </div>
        @error("password")
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

