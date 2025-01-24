@extends('layouts.wishlist')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection
@section('content')


    <main>
        <div class="list">
            <div class="date">
                <p>2024-10-23</p>
            </div>
            <div class="wish">
                <input type="checkbox" name="" value="">週に3日は早起きする<br>
                <input type="checkbox" name="" value="">週に3日は早起きする<br>
                <input type="checkbox" name="" value="">週に3日は早起きする<br>
                <input type="checkbox" name="" value="">週に3日は早起きする
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