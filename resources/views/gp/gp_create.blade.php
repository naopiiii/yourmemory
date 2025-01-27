@extends('layouts.goodpoint')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
@endsection
@section('content')


    <main>
        <form action="{{ route('gp.store') }}" method="POST">
            @csrf
        <div class="list">
            <div class="date">
                <input type="date" name="date">
            </div>

            <div class="goodpoint">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
                <input type="text" name="goodpoints[]">
            </div>
        </div>

        <div class="save">
            <button type="submit">保存</button>
        </div>
        </form>

        <div class="cancel">
            <a href="#">キャンセル</a>
        </div>

    </main>

@endsection