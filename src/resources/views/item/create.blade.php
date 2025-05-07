@extends('layouts.app')

@section('content')
    <h1>商品の出品</h1>

    <form method="post" action="/sell" enctype="multipart/form-data">
        @csrf
        <div class="product_image">
            <label class="image-label">商品画像</label>
            <input type="file" name="images"><br>
            @error('images')
                {{ $message }}
            @enderror
        </div>
        <h2>商品の詳細</h2>
        <div class="product-category">
            <label class="category-label">カテゴリー</label>
            @foreach ($categories as $category)
                <label>
                    <input type="checkbox" name="categories[]" value="{{ $category->id }}" {{ in_array($category->id, old('categories', [])) ? 'checked' : '' }}>
                    {{ $category->name }}
                </label><br>
            @endforeach
            @error('categories')
                {{ $message }}
            @enderror
        </div>

        <div class="product-condition">
            <label class="condition-label">商品の状態</label>
            <select name="condition_id">
                <option value="" disabled {{ old('condition_id') ? '' : 'selected' }}>選択してください</option>
                @foreach ($conditions as $condition)
                    <option value="{{ $condition->id }}" {{ old('condition_id') == $condition->id ? 'selected' : ''}}>
                        {{ $condition->name }}
                    </option>
                @endforeach
            </select>
            @error('condition_id')
                {{ $message }}
            @enderror
        </div>
        <h2>商品名と説明</h2>
        <div class="product-name">
            <label class="name-label">商品名</label><br>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                {{ $message }}
            @enderror
        </div>
        <div class="product_brand">
            <label class="brand-label">ブランド</label><br>
            <input type="text" name="brand" value="{{ old('brand') }}">
        </div>
        <div class="product-description">
            <label class="description-label">商品説明</label><br>
            <textarea name="description"> {{ old('description') }} </textarea>
            @error('description')
                {{ $message }}
            @enderror
        </div>
        <div class="product-price">
            <label class="price-label" value="{{ old('price') }}">販売価格</label><br>
            <input type="number" name="price" value="{{ old('price') }}">
            @error('price')
                {{ $message }}
            @enderror
        </div>
        <button type="submit" class="button-sell">出品する</button>
    </form>
@endsection