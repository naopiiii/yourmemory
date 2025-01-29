@extends('layouts.wishlist')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')


    <main>
        <div class="register">
            <a href="{{ route('wl.create') }}">新規投稿</a>
        </div>
        @foreach($tables as $table)
        <div class="list">
            <a href="#">{{ $table ->created_at->year }}</a>
        </div>
        @endforeach
    </main>

@endsection