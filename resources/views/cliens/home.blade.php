@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('css')
<style>
    img{
        max-width: 100%;
        height: auto;
    }
</style>
@endsection

@section('sidebar')
    @parent
    <h3>Home sidebar</h3>
@endsection

@section('content')
    <h1>Trang chủ</h1>
    {{-- @datetime("2021-12-15 15:00:30")
    @datetime("2021-12-18 00:10:30") --}}
    @env('productsion')
        <p>moi truong productsion</p>
    @elseenv('test')
        <p>day la moi truong test</p>
    @else 
        <p>khong phai moi truong dev</p>
    @endenv
    <x-package-alert/>
    <x-inputs.botton/>
    <x-forms.botton/>

    <p><img src="https://i1-vnexpress.vnecdn.net/2023/12/07/399940232-1753266188505318-100-7513-3721-1701959940.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=-XAsVoD8777U2mgzXWYPpQ" alt=""></p>
    <p><a href="{{route('download-image').'?image=https://i1-vnexpress.vnecdn.net/2023/12/07/399940232-1753266188505318-100-7513-3721-1701959940.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=-XAsVoD8777U2mgzXWYPpQ'}}" class="btn btn-primary">down load anh</a></p>

@endsection

@section('js')
@endsection