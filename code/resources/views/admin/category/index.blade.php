@extends('layouts/admin')
@section('content')
    <br>
    <div style="text-align:center;">
      <a href="{{route('category.create')}}"><button type="button" class="btn btn-secondary">Добавить категорию</button></a>
    </div>
    <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
        @foreach($categories as $category)
          <a style="font-size: 24px;" class="p-2 link-secondary" href="{{ route('news.index', ['category' => $category->title]) }}">{{$category->title}}</a>
        @endforeach
      </nav>
    </div>
@endsection
