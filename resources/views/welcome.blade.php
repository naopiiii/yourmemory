<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Good night .</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    </head>
    <body class="antialiased">
        <div class="top_title">
            <p>Good night .</p>
        </div>
        <div class="top_img">
            <img src="{{ asset('img/moon.png')}}" alt="ロゴ">
        </div>
        <div class="link">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <div class="home"><a href="{{ url('/home') }}" class="font-semibold">Home</a></div>
                    @else
                        <div class="login"><a href="{{ route('login') }}" class="font-semibold">ログイン</a></div>

                        @if (Route::has('register'))
                            <div class="register"><a href="{{ route('register') }}" class="ml-4">新規登録</a></div>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
