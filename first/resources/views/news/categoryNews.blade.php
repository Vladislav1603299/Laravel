@extends('layouts.main')
@section('title') Новости категории @parent @endsection
@section('header_category')
    <h1 style="text-align:center">{{ $newsList['category'] }}</h1>
@endsection
@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @foreach ($newsList['news'] as $key => $new) 
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $new['title'] }}</text></svg>

                <div class="card-body">
                <p class="card-text">{{ $new['description'] }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="/news/category/{{ $newsList['id'] }}/{{ $key }}"><button type="button" class="btn btn-sm btn-outline-secondary">Читать</button></a>
                    </div>
                    <small class="text-muted">{{ $new['autor'] }} - {{ $new['created_at'] }}</small>
                </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
<div style="text-align:center; margin-top: 50px;">
    <a href="/news/category">Назад</a>
</div><br><br><br>
      
@endsection


