<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>picturememory</title>
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
            <p>Picture memory</p>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="footer">
            <a href="{{ route('gp.index') }}"><img src="{{ asset('img/goodpoint.png')}}" alt=""></a>
            <a href="{{ route('ty.index') }}"><img src="{{ asset('img/thankyou.png')}}" alt=""></a>
            <a href="{{ route('pm.index') }}"><img src="{{ asset('img/picturememory.png')}}" alt=""></a>
            <a href="{{ route('wl.index') }}"><img src="{{ asset('img/wishlist.png')}}" alt=""></a>
            <a href="{{ route('mp.index') }}"><img src="{{ asset('img/mypage.png')}}" alt=""></a>
        </div>
    </footer>
    