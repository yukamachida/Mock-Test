@extends('layouts.app')

@section('content')
    @foreach ($products as $product)
        <div class="product-content">
            <a href="/item/{{ $product->id }}" class="product-link">
                <img src="{{ asset($product->image) }}" alt="商品画像" class="img-content" />
                <div class="detail-content">
                    <p>{{$product->name}}</p>
                </div>
            </a>
        </div>
    @endforeach
@endsection