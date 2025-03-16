<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新フリマ</title>
</head>

<body>
    <div class="login-form">
        <h2 class="login-form__heading content__heading">ログイン</h2>
        <div class="login-form__inner">
            <form class="login-form__form" action="/" method="post">
                @csrf
                <div class="login-form__group">
                    <label class="login-form__label" for="email">メールアドレス</label>
                    <input class="login-form__input" type="email" name="email" id="email" value="{{ old('email') }}" />
                </div>
                <div class="login-form__group">
                    <label class="login-form__label" for="password">パスワード</label>
                    <input class="login-form__input" type="password" name="password" id="password" />
                </div>
                <input class="login-form__btn btn" type="submit" value="ログインする">
                <a href="/register" class="register">会員登録はこちら</a>
            </form>
        </div>
    </div>

</body>

</html>