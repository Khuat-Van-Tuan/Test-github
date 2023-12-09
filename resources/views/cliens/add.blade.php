@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('css')
@endsection

@section('content')
    <h1>Thêm sản phẩm</h1>
    <form action="" method="POST">
        @csrf
        @method('put')
        <input type="text" name="username">
        <button type="submit">cập nhật</button>
    </form>
@endsection

@section('js')
@endsection