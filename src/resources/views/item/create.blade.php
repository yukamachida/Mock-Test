@extends('layouts.app')

@section('content')
    <h1>商品の出品</h1>

    <label>商品名：</label>
    <input type="text" name="name" value="{{ old('name') }}"><br>
@endsection