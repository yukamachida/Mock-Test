@extends('layouts/app')

@section('content')
    <h1>住所の変更</h1>
    <form action="/purchase/address/{{ $product->id ?? '' }}" method="post" class="update-form__form">
        @csrf
        <div class="update-form__group">
            <label class="update-form__label" for="postal_code">郵便番号</label>
            <input class="update-form__input" type="text" name="postal_code" id="postal_code"
                value="{{ old('postal_code', $user->postal_code) }}">
            @error('postal_code') {{ $message }} @enderror
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="address">住所</label>
            <input class="update-form__input" type="text" name="address" id="address"
                value="{{ old('address', $user->address) }}">
            @error('address') {{ $message }} @enderror
        </div>
        <div class="update-form__group">
            <label class="update-form__label" for="building">建物名</label>
            <input class="update-form__input" type="text" name="building" id="building"
                value="{{ old('building', $user->building) }}">
            @error('building') {{ $message }} @enderror
        </div>
        <input class="update-form__btn" type="submit" value="更新する">

    </form>
    </div>
@endsection