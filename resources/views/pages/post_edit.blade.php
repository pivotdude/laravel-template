@extends("layouts.base")

@section("content")
    <ul class="align-center px-[200px]">
        <li class="block mt-16 w-[1200px]">

            @error("content")
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <form method="POST" action="{{ route('post.update', $post['id'])  }}">
                @method("PUT")
                @csrf

                <div class="flex flex-col">
                    <label for="title" class="font-bold mb-2">Заголовок:</label>
                    <input type="text" id="title" name="title" value="{{ $post['title'] }}" class="border border-gray-300 p-2 mb-4" />
                </div>
                @error("title")
                <div class="text-red-500">{{ $message }}</div>
                @enderror

                <div class="flex flex-col">
                    <label for="content" class="font-bold mb-2">Контент:</label>
                    <textarea id="content" name="content" class="border border-gray-300 p-2 h-[600px]">{{ $post['content'] }}</textarea>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600 mt-5">Сохранить</button>
            </form>
        </li>
    </ul>

@endsection
