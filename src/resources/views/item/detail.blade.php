@extends('layouts.app')

@section('content')
    @auth
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

                <form action="/comment" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <textarea name="content" maxlength="255"></textarea>
                    <button type="submit">コメントを送信する</button>


                </form>

                <h2>商品説明{{ $product->description }}</h2>
                <p>カラー:</p>

                <h2>商品の情報</h2>
                <p>カテゴリー</p>
                <p>商品の状態{{ $product->condition }}</p>
    @endauth
@endsection