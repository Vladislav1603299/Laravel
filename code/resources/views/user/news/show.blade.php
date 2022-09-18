@extends('layouts/user')
@section('content')
<hr>
@foreach($news as $news)
<div style="border: 1px solid black; min-height: 500px; display:flex; justify-content:space-around; padding-top:20px">
    <image src="http://first.test/storage/news/{{$news->image}}" width="45%" height="450px" />
    <div style="width:45%;">
        <h2 class="blog-post-title mb-1">{{ $news->title }}</h2>
        <p class="blog-post-meta">{{ $news->autor }}</p>
        <p>{{ $news->description }}</p>
    </div>
</div>
@endforeach
@endsection