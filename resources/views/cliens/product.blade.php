@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('css')
    <style>
        header{
            background: yellow;
        }
    </style>
@endsection

@section('sidebar')
    @parent
    <h3>Products sidebar</h3>
@endsection

@section('content')
    <h1>SẢN PHẨM</h1>
    <button id="show">alert thử js</button>
@endsection

@section('js')
document.getElementById('show').onclick = function(){alert("Trang sản phẩm");} 
@endsection