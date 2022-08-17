@extends('layouts.main')
@section('title') Категории новостей @parent @endsection
@section('header_category')
<section class="py-5 text-center container">
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1>Категории:</h1>
    </div>
</div>
</section>
@endsection
@section('content')
    @foreach ($category as $keyCategory => $categoryNews)
        <div class="col">
            <div>
                <a href="/news/category/{{ $keyCategory }}"><p style="text-align:center">{{ $categoryNews['category'] }}</p></a>
            </div>
        </div>
        
    @endforeach
    <div style="text-align:center; margin-top: 100px;">
        <a href="/news">Назад</a>
    </div>
      
@endsection


    



