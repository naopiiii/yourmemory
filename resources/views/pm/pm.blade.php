@extends('layouts.picturememory')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index_pm.css') }}">
@endsection
@section('content')


    <main>
        <div class="register">
            <a href="#">新規投稿</a>
        </div>
        @foreach($tables as $table)
        <div class="list">
            <a href="#">
                <img src="{{ $table ->img }}" alt="">
                <p>{{ $table ->created_at->format('Y-m-d') }}</p>
            </a>
        </div>
        @endforeach
    </main>

@endsection