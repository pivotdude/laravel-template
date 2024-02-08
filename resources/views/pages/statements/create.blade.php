@extends("layouts.app")

@section("content")
    <form method="post" action="{{route("statements.createAction")}}">
        @csrf
        <x-input name="carNumber" type="text" text="Номер" />
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            @error("description")
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success" >Создать</button>
    </form>
@endsection
