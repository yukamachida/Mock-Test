<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>新フリマ</title>
    <h1>
        <a href="/">
            <img src="/images/logo.svg" alt="COACHTECH">
        </a>
    </h1>
    @if (Auth::check())
        <form action="/search" method="get" class="search-form">
            @csrf
            <input class="" type="text" value="なにをお探しですか?">
        </form>
        <nav>
            <ul class="header-nav">
                <li class="header-nav__item">
                    <form action="/logout" method="post">
                        @csrf
                        <button class="header-nav__button">ログアウト</button>
                    </form>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/mypage">マイページ</a>
                </li>
                <li class="header-nav__item">
                    <a href="/sell">出品</a>
                </li>
            </ul>
        </nav>
    @else
        <form action="/search" method="get" class="search-form">
            @csrf
            <input type="text"  name="keyword" value="{{ request('keyword') }}" placeholder="なにをお探しですか?">
        </form>
        <nav>
            <ul class="header-nav">
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/login">ログイン</a>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/mypage">マイページ</a>
                </li>
                <li class="header-nav__item">
                    <a href="/sell">出品</a>
                </li>
            </ul>
        </nav>
    @endif
</head>

<body>
    @yield('content')
</body>

</html>