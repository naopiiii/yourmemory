@extends('layouts.picturememory')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection
@section('content')


    <main>
        <div class="list">
            <div class="date">
                <p>2024-10-23</p>
            </div>

            <div class="picture">
                <img src="{{ asset('img/halohalo.JPG')}}" alt="">
            </div>

            <div class="goodpoint">
                <p>早起きができた</p>
            </div>
        </div>

        <div class="edit">
            <a href="#">編集</a>
        </div>

        <div class="destroy">
            <a href="#">削除</a>
        </div>

    </main>

@endsection