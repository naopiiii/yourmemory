@extends('layouts.picturememory')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection
@section('content')


    <main>
        <form action="{{ route('pm.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="list">
            <div class="date">
                <input type="date" name="date">
            </div>

            <div class="img_upload">
                <label for="fileInput">画像投稿</label>
                <input type="file" id="fileInput" style="display: none;" name="img">
            </div>

            <div class="comment">
                <input type="text" name="comment">
            </div>
        </div>

        <div class="save">
            <button type="submit">保存</button>
        </div>
        </form>

        <div class="cancel">
            <a href="{{ route('pm.index') }}">キャンセル</a>
        </div>

    </main>

@endsection