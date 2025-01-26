@extends('layouts.picturememory')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection
@section('content')


    <main>
        <div class="list">
            <div class="date">
                <input type="date">
            </div>

            <div class="img_upload">
                <label for="fileInput">画像変更</label>
                <input type="file" id="fileInput" style="display: none;">
            </div>

            <div class="comment">
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