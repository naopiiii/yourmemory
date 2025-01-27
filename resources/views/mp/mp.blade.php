@extends('layouts.mypage')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection
@section('content')


    <main>
        <div class="list">
            <div class="picture">
                <img src="{{ asset('storage/icons/' . $tables->icon) }}" alt="">
            </div>

            <div class="username">
                <p>{{ $tables ->name }}</p>
            </div>

            <div class="all_goodpoint">
                <p>45 Good Point</p>
            </div>

            <div class="all_thankyou">
                <p>35 Thank you</p>
            </div>
        </div>

        <div class="edit">
            <a href="#">アカウント情報変更</a>
        </div>

    </main>

@endsection