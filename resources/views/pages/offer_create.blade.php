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
            <label class="block font-bold mb-2" for="content">Описание</label>
            <textarea class="border p-2 w-full" name="description" id="description">{{old('description') }}</textarea>
            @error('description')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block font-bold mb-2" for="content">Cтатус</label>
            <input class="border p-2 w-full" name="status" id="status" value="{{old('status') }}">
            @error('status')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-5">
            <label class="block font-bold mb-2" for="content">Дата доставки</label>
            <input type="date" class="border p-2 w-full" name="deliveryDate" id="deliveryDate" value="{{old('deliveryDate') }}">
            @error('deliveryDate')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block font-bold mb-2" for="content">Телефон</label>
            <input class="border p-2 w-full" name="phone" id="phone" value="{{old('phone') }}" type="phone">
            @error('phone')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-5">
            <label class="block font-bold mb-2" for="content">ФИО</label>
            <input class="border p-2 w-full" name="FCs" id="FCs" value="{{old('FCs') }}">
            @error('FCs')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>

        {{--    @if($errors->any())--}}
        {{--        {{ implode('', $errors->all('<div>:message</div>')) }}--}}
        {{--    @endif--}}

        <button class="bg-blue-500 text-white px-3 py-2 rounded hover:bg-blue-600">Создать</button>

    </form>

@endsection

