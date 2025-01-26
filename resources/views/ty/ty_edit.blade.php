@extends('layouts.thankyou')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection
@section('content')


    <main>
        <div class="list">
            <div class="date">
                <input type="date">
            </div>

            <div class="goodpoint">
                <input type="text">
            </div>
        </div>

        <div class="save">
            <a href="#">保存</a>
        </div>

        <div class="cancel">
            <a href="#">キャンセル</a>
        </div>

    </main>

@endsection