@extends("layouts.base")

@section("content")
    <ul class="align-center px-[200px]">
{{--        {{ dd($posts[0]->user)  }}--}}
           @foreach($posts as $post)
               <li class="block mt-16 w-[1200px]">
                   <p class="font-bold text-9xl">{{ $post['id'] }}</p>
                   <p class="text-2xl mt-5">Автор: {{ $post['user']['name'] }}</p>
                   <p class="text-2xl mt-5">Автор: {{ $post['user']['email'] }}</p>
                   <p class="text-4xl mt-10">{{ $post['title'] }}</p>
                   <p class="text-2xl mt-5">{{ $post['content'] }}</p>
               </li>

           @endforeach
    </ul>

@endsection
[
