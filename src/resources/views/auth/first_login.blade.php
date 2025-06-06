<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新フリマ</title>
    <h1>
        <image src="images/logo.svg" alt="COACHTECH"></image>
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

            </ul>
    @endif
    </nav>
</head>

<body>
    <div class="setting-form">
        <h2>プロフィール設定</h2>
        <h3>初回ログインです</h3>
        <form action="/firstlogin" method="post" class="register-form__form">
            @csrf
            <a class="profile_link" href="/profile/photo">写真を選択する</a>

            <div class="register-form__group">
                <label class="register-form__label" for="name">ユーザー名</label>
                <input class="register-form__input" type="text" name="name" id="name"
                    value="{{  old('name', $registeredName) }}">
                <p class="register-form__error-message">
                    @error('name') {{ $message }} @enderror
                </p>

            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="postal_code">郵便番号</label>
                <input class="register-form__input" type="text" name="postal_code" id="postal_code"
                    value="{{ old('postal_code') }}">
                @error('postal_code') {{ $message }} @enderror
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="address">住所</label>
                <input class="register-form__input" type="text" name="address" id="address"
                    value="{{ old('address') }}">
                @error('address') {{ $message }} @enderror
            </div>
            <div class="register-form__group">
                <label class="register-form__label" for="building">建物名</label>
                <input class="register-form__input" type="text" name="building" id="building"
                    value="{{ old('building') }}">
                @error('building') {{ $message }} @enderror
            </div>
            <input class="register-form__btn" type="submit" value="更新する">
        </form>
    </div>
</body>

</html>