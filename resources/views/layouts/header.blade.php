<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goodpoint</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>
    <header class="header-container">
        <div class="header">
            <img src="{{ asset('img/header_logo.png')}}" alt="logo">
            <p>Good night .</p>
            <img src="{{ asset('img/balance.png')}}" alt="logo">
        </div>
        <div class="title">
            <p>Today good point</p>
        </div>
    </header>
    @yield('content')