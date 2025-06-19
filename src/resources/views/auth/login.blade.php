<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">
    <title>新フリマ</title>
</head>

<body>

    <head>
        <link href="../css/app.css" rel="stylesheet">
        <div class="auth-header">
            <h1>
                <a href="/">
                    <img src="/images/logo.svg" alt="COACHTECH">
                </a>
            </h1>
        </div>
    </head>


    <link href="../css/login.css" rel="stylesheet">
    <div class="login-form">
        <h2 class="login-form__heading content__heading">ログイン</h2>
        <div class="login-form__inner">
            <form class="login-form__form" action="/login" method="post">
                @csrf
                <div class="login-form__group">
                    <label class="login-form__label" for="email">メールアドレス</label>
                    <input class="login-form__input" type="email" name="email" id="email" value="{{ old('email') }}" />
                    <p class="login-form__error-message">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="login-form__group">
                    <label class="login-form__label" for="password">パスワード</label>
                    <input class="login-form__input" type="password" name="password" id="password" />
                    <p class="login-form__error-message">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <input class="login-form__btn btn" type="submit" value="ログインする">
                <a href="/register" class="register">会員登録はこちら</a>
            </form>
        </div>
    </div>

</body>

</html>