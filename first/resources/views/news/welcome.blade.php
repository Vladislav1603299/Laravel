@extends('layouts.main')
@section('title') Добро пожаловать @parent @endsection
@section('header_category')
<div style=" margin: 0 auto; margin-top: 300px; border: 1px solid black; width: 500px"><h1 style="text-align:center">Welcome user to the news page</h1></div>
<p style="text-align:center">Посмотреть категорию новостей</p>
<div style="text-align:center; margin-bottom: 200px">
    <a href="/news/category">Категории</a>
</div>
@endsection