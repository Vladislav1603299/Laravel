@extends('layouts/user')
@section('main_header')
  <h1 class="display-4 fst-italic">{{$category}}</h1>
@endsection
@section('content')
@foreach($news as $news)
<div style="width: 650px;" class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col p-4 d-flex flex-column position-static">
            <h3 class="mb-0">{{$news->news_title}}</h3>
            <div class="mb-1 text-muted">{{$news->news_autor}}</div>
            <p class="card-text mb-auto">{{$news->news_spoiler}}</p>
            <a href="{{ route('page.news.show', ['newsId' => $news->news_id]) }}" class="stretched-link">Continue reading</a>
          </div>
          <div class="col-auto d-none d-lg-block">
          <image style="width: 250px;" class="bd-placeholder-img" src="http://first.test/storage/news/{{$news->news_image}}" width="200" height="250" />
          </div>
        </div>
</div>
@endforeach
@endsection
