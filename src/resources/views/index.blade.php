<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新フリマ</title>
    @if (Auth::check())
        <h1>
            <a>
                <image src="images/logo.svg" alt="COACHTECH">

            </a>
        </h1>
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

            </ul>
    @endif
    </nav>
</head>

<body>

</body>

</html>