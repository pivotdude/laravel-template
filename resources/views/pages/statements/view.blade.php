@extends("layouts.app")

@section("content")
        <div class="my-3">
            <span class="badge rounded-pill {{$color}}">{{($post->status->name)}}</span>
        </div>
        <div>
            <p>{{$post->description}}</p>
        </div>
        <p>Номер авто: {{$post->carNumber}}</p>
        <p>Автор: {{$post->user->name}}</p>
        @if($status === "new" && auth()->user()->isAdmin)
            <div class="d-flex gap-2">
                <form method="get" action="{{ route("statements.accepted", $post->id)  }}">
                    <button type="submit" class="btn btn-success">Принять</button>
                </form>
                <form method="get" action="{{ route("statements.declined", $post->id) }}">
                    <button type="submit" class="btn btn-danger" >Отклонить</button>
                </form>
            </div>
        @endif
@endsection
