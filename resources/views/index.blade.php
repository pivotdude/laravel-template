@extends('layouts.main');

@section('title', 'Home');

@section('content')
    <x-alert :$name />
    Hello world!
    Hello, {{ $name }}.
    The current UNIX timestamp is {{ time() }}.
@endsection
