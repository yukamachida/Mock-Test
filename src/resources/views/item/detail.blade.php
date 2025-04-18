@extends('layouts.app')

@section('content')

    <div class="left-content">
        <img src="{{ asset($product->image) }}" alt="商品画像" class="image-content" />
    </div>

    <div class="right-content">
        <h1>{{ $product->name }}</h1>

        <p>￥{{ $product->price }}(税込み)</p>
        <a href=" /purchase/{{ $product->id }}" class=btn>購入手続きへ</a>
        <form action="/like" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">

            @php
                $liked = $product->likes->where('user_id', auth()->id())->first();
            @endphp

            <button type="submit">
                {{ $liked ? '☆解除' : '☆' }}
            </button>
        </form>
        <p>いいね{{ $product->likes->count() }}</p>
        <p>コメント{{ $product->comments->count() }}</p>


        <h2>商品説明{{ $product->description }}</h2>
        <p>カラー:</p>

        <h2>商品の情報</h2>
        <p>カテゴリー</p>
        <p>商品の状態{{ $product->condition }}</p>
        <p>コメント</p>
        <div>
            @foreach ($product->comments as $comment)
                {{ $comment->user->name }}:{{ $comment->content }}
            @endforeach
        </div>
        @auth
            <p>商品へのコメント</p>
            <form action="/comment" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <textarea name="content"></textarea>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                <button type="submit">コメントを送信する</button>
        @endauth
        </form>
    </div>

@endsection