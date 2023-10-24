@extends("layouts.base")

@section("content")

<form class="p-10 bg-white rounded shadow" action="{{ route('api.post.create') }}" method="POST">
    @csrf

    <div class="mb-5">
        <label class="block font-bold mb-2" for="title">Заголовок</label>
        <input class="border p-2 w-full" id="title" name="title" type="text" value="{{ old('title') }}">
        @error('title')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-5">
        <label class="block font-bold mb-2" for="content">Контент</label>
        <textarea class="border p-2 w-full" name="content" id="content">{{old('content') }}</textarea>
        @error('content')
            <div class="text-red-500">{{ $message }}</div>
        @enderror
    </div>

{{--    @if($errors->any())--}}
{{--        {{ implode('', $errors->all('<div>:message</div>')) }}--}}
{{--    @endif--}}

    <button class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">Создать</button>

</form>

@endsection

