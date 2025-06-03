@extends('layouts/app')

@section('content')
    <a href="/mypage/profile">プロフィールを編集</a>

    <h2>プロフィール画面</h2>
    <div Class="toppage-list">
        <div class="toppage-list_list">
            <a href="/mypage?tab=sell">出品した商品</a>
            <a href="/mypage?tab=buy">購入した商品</a>
        </div>
    </div>
    <div class="product-sample-data">
        @foreach ($products as $item)
            @php
                $product = $viewType === 'sell' ? $item : $item->product;
            @endphp
            <div class="product-sample-data">
                <img src="{{ asset($product->image) }}" alt="商品画像" width="150">
                <p>{{ $product->name }}</p>
            </div>
        @endforeach
    </div>




@endsection