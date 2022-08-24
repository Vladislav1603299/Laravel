@extends('layouts.admin')
@section('header')
    <h1 class="h2">Категории</h1>
@endsection
@section('button_header')
<a href="/admin/category/add"><button class="btn btn-info">Добавить</button></a>
@endsection
@section('content')
@foreach ($category as $keyCategory => $categoryNews)
        
            <div>
                <a href="#"><p style="text-align:center">{{ $categoryNews['category'] }}</p></a>
            </div>
       
        
    @endforeach
@endsection