@extends('layouts.app')

@section('content')
    @foreach ($products as $product)
        <div class="product-content">
            <a href="/item/{{ $product->id }}" class="product-link">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
                @if ($product->is_sold)
                    <span class="sold-badge">Sold</span>
                @endif
                <div class="detail-content">
                    <p>{{ $product->name }}</p>
                </div>
            </a>
        </div>
    @endforeach
@endsection