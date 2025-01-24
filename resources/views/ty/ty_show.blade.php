@extends('layouts.thankyou')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection
@section('content')


    <main>
        <div class="list">
            <div class="date">
                <p>2024-10-23</p>
            </div>
            <div class="goodpoint">
                <p>早起きができた</p>
                <p>ゴミを拾った</p>
                <p>ばあちゃん助けた</p>
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