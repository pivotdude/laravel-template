@extends("layouts.app")

@section("content")
    <div class="list-group">
    @foreach($posts as $post)
        <a href="{{route("statement", $post->id)}}" class="list-group-item list-group-item-action" aria-current="true">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">{{$post->user->name}}</h5>
            <small>
                <span class="badge rounded-pill {{$post->color}}">{{($post->status->name)}}</span>
            </small>
            </div>
            <p class="mb-1">{{($post->carNumber)}}</p>
            <p class="mb-1">{{($post->description)}}</p>
        </a>
    @endforeach
    </div>
@endsection
