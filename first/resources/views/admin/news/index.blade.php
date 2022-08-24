@extends('layouts.admin')
@section('header')
    <h1 class="h2">Новости</h1>
@endsection
@section('button_header')
<a href="/admin/news/add"><button class="btn btn-info">Добавить</button></a>
@endsection
@section('content')
@foreach ($newsList as $keyCategory => $news) 
<div style="display:flex">
    @foreach ($news['news'] as $keyNews => $new)
    <div class="col" style="width: 30%">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{ $new['title'] }}</text></svg>

                <div class="card-body">
                <p class="card-text">{{ $new['description'] }}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="/admin/news/edit/{{$keyCategory}}/{{$keyNews}}"><button type="button" class="btn btn-sm btn-outline-secondary">Редактировать</button></a>
                    </div>
                    <small class="text-muted">{{ $new['autor'] }} - {{ $new['created_at'] }}</small>
                </div>
                </div>
            </div>
    </div>
    <br>
    <br>
    @endforeach
    </div>
@endforeach
@endsection
