@extends('layouts.picturememory')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index_pm.css') }}">
@endsection
@section('content')


    <main>
        <div class="register">
            <a href="{{ route('pm.create') }}">新規投稿</a>
        </div>
        @foreach($tables as $table)
        <div class="list">
            <a href="#">
                <img src="{{ asset('storage/posts/' . $table->img) }}" alt="投稿画像">
                <p>{{ $table ->created_at->format('Y-m-d') }}</p>
            </a>
        </div>
        @endforeach
    </main>

@endsection