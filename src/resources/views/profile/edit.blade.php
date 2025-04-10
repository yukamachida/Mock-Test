@extends('layouts/app')

@section('content')
    <div class="setting-form">
        <h2>プロフィール設定</h2>
        <form action="/mypage/profile" method="post" class="edit-form__form">
            @csrf
            <a class="profile_link" href="/profile/photo">写真を選択する</a>

            <div class="edit-form__group">
                <label class="edit-form__label" for="name">ユーザー名</label>
                <input class="edit-form__input" type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
                <p class="edit-form__error-message">
                    @error('name') {{ $message }} @enderror
                </p>

            </div>
            <div class="edit-form__group">
                <label class="edit-form__label" for="postal_code">郵便番号</label>
                <input class="edit-form__input" type="text" name="postal_code" id="postal_code"
                    value="{{ old('postal_code', $user->postal_code) }}">
                @error('postal_code') {{ $message }} @enderror
            </div>
            <div class="edit-form__group">
                <label class="edit-form__label" for="address">住所</label>
                <input class="edit-form__input" type="text" name="address" id="address"
                    value="{{ old('address', $user->address) }}">
                @error('address') {{ $message }} @enderror
            </div>
            <div class="edit-form__group">
                <label class="edit-form__label" for="building">建物名</label>
                <input class="edit-form__input" type="text" name="building" id="building"
                    value="{{ old('building', $user->building) }}">
                @error('building') {{ $message }} @enderror
            </div>
            <input class="edit-form__btn" type="submit" value="更新する">
        </form>
    </div>
@endsection