@extends("layouts.base")

@section("content")
    <ul class="align-center px-[200px]">

           @foreach($posts as $post)
               <li class="block mt-10 w-[1200px]">
                   <p class="font-bold text-9xl">{{ $post['id'] }}</p>
                   <p class="text-4xl mt-10">{{ $post['title'] }}</p>
                   <p class="text-2xl mt-5">{{ $post['content'] }}</p>
               </li>

           @endforeach
    </ul>

@endsection
