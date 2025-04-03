<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新フリマ</title>
    @if (Auth::check())
        <h1>
            <a href="/">
                <img src="images/logo.svg" alt="COACHTECH">
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
                        <button type="submit" class="header-nav__link">ログアウト</button>
                    </form>
                </li>
                <li class="header-nav__item">
                    <a class="header-nav__link" href="/mypage">マイページ</a>
                </li>
                <li class="header-nav__item">
                    <a href="/sell">出品</a>
                </li>

            </ul>
    @endif
    </nav>
</head>

<body>
    @foreach ($products as $product)
        <div class="product-content">
            <a href="/products/detail/{{$product->id}}" class="product-link">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
                <div class="detail-content">
                    <p>{{$product->name}}</p>
                </div>
            </a>
        </div>
    @endforeach
</body>

</html>