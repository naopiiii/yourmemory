<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>how to use</title>
    <link rel="stylesheet" href="{{ asset('css/howto.css') }}">
</head>
    <header class="header-container">
        <div class="header">
            <img src="{{ asset('img/header_logo.png')}}" alt="logo">
            <p>Good night .</p>
            <img src="{{ asset('img/balance.png')}}" alt="logo">
        </div>
        <div class="title">
            <p>How to use</p>
        </div>
    </header>

<main>
    <div class="gp">
        <img src="{{ asset('img/goodpoint.png')}}" alt="">
        <p>good point</p>
        <p>今日のあなたのよかったこと<br>がんばったことを入力してください。</p>
    </div>

    <div class="ty">
        <img src="{{ asset('img/thankyou.png')}}" alt="">
        <p>Thank you</p>
        <p>今日感謝したいことを入力してください。</p>
    </div>

    <div class="pm">
        <img src="{{ asset('img/picturememory.png')}}" alt="">
        <p>Picture memory</p>
        <p>あなたにとってとっておきの<br>写真を保存してください。</p>
    </div>

    <div class="wl">
        <img src="{{ asset('img/wishlist.png')}}" alt="">
        <p>Wish list of year</p>
        <p>１年で叶えたいことを入力し<br>チェックしてください。</p>
    </div>

    <div class="wl">
        <img src="{{ asset('img/mypage.png')}}" alt="">
        <p>My page</p>
        <p>ユーザー情報の確認ができます。</p>
    </div>


</main>
<footer>
    <div class="footer">
        <a href="{{ route('gp.index') }}"><img src="{{ asset('img/goodpoint.png')}}" alt=""></a>
        <a href="{{ route('ty.index') }}"><img src="{{ asset('img/thankyou.png')}}" alt=""></a>
        <a href="{{ route('pm.index') }}"><img src="{{ asset('img/picturememory.png')}}" alt=""></a>
        <a href="{{ route('wl.index') }}"><img src="{{ asset('img/wishlist.png')}}" alt=""></a>
        <a href="{{ route('mp.index') }}"><img src="{{ asset('img/mypage.png')}}" alt=""></a>
    </div>
</footer>