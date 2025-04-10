@extends('layouts.app')

<body>
    <h1>{{ $product->name }}</h1>

    <p>￥{{ $product->price }}(税込み)</p>
    <a href="" , ['id'=> $product->id] class=btn>購入手続きへ</a>

    <h2>商品説明{{ $product->description }}</h2>
    <p>カラー:</p>

    <h2>商品の情報</h2>
    <p>カテゴリー</p>
    <p>商品の状態</p>
</body>