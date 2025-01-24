@extends('layouts.picturememory')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index_pm.css') }}">
@endsection
@section('content')


    <main>
        <div class="register">
            <a href="#">新規投稿</a>
        </div>
        <div class="list">
            <a href="#">
                <img src="{{ asset('img/halohalo.JPG')}}" alt="">
                <p>2024-10-23</p>
            </a>
        </div>
    </main>

@endsection