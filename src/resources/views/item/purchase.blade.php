@extends('layouts.app')

@section('content')
    <h1>購入画面</h1>
    <div class="left-content-image">
        <img src="{{ asset($product->image) }}" alt="商品画像" class="image-content">
    </div>
    <div class="left-content-name">
        <h2>{{ $product->name }}</h2>
    </div>
    <div class="left-content-payment">
        <label for="payment method">支払い方法</label>
        <select name="payment method" id="payment method">
            <option value="">選択してください</option>
            <option value="convenience">コンビニ支払い</option>
            <option value="credit">カード支払い</option>
        </select>
    </div>
    <h3>配送先</h3>
    <div class="shipping-address-form__group">
        <p>〒{{ $user->postal_code }}</p>
        <p>{{ $user->address }}</p>
        <p>{{ $user->building }}</p>
    </div>
    <a href="/change">変更する</ahref>
@endsection