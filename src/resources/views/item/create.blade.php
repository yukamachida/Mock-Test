@extends('layouts.app')

@section('content')
    <h1>商品の出品</h1>

    <form class="contents-form" action="/sell">
        @csrf
        <div class="product_image">
            <label class="image-label">商品画像</label>
            <input type="file" name="image"><br>
        </div>
        <h2>商品の詳細</h2>
        <div class="product_category">
            <label class="category-label">カテゴリー</label>
            @foreach ($categories as $category)
                <label>
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}">
                    {{ $category->name }}
                </label><br>
            @endforeach
        </div>

        <div class="product_condition">
            <label class="condition-label">商品の状態</label>
            <select name="condition_id">
                <option value="" selected disabled>選択してください</option>
                @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}">{{ $condition->name }}</option>
                @endforeach
            </select>
        </div>
        <h2>商品名と説明</h2>
        <div class="product-name">
            <label class="name-label">商品名</label>
            <input type="text" name="name" value="{{ old('name') }}"><br>
        </div>
        <div class="product_brand">
            <label class="brand-label">ブランド</label>
            <input type="text" name="brand" value="{{ old('brand') }}"><br>
        </div>
        
    </form>
@endsection