@extends('layouts/admin')
    @section('content')
    <div style="height: 80px; border: 1px solid dimgrey; text-align:center; background-color:dimgrey">
      <h3 class="display-4 fst-italic" style="color: white;">{{$category}}</h3>
    </div>
    <br>
    <div style="text-align:center;">
      <a href="{{route('news.create', ['category' => $category])}}"><button type="button" class="btn btn-secondary">Добавить новость</button></a>
    </div>
    <br>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @forelse($newsList as $news)
        <br>
          <div class="col">
            <div class="card shadow-sm">
           <image src="http://first.test/storage/news/{{$news->news_image}}" width="100%" height="100%" />
              <div class="card-body">
                <strong style="font-size:24px;">{{$news->news_title}}</strong>
                <p class="card-text">{{ $news->news_spoiler }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group" style="width: 220px; display: flex; justify-content: space-around;">
                      <a href="{{route('news.edit', ['news' => $news->news_id])}}"><button type="button" class="btn btn-info">Редактировать</button></a>
                      <a href="#"><button type="button" class="btn btn-danger">Удалить</button></a>
                  </div>
                  <small class="text-muted">{{ $news->news_autor }}</small>
                </div>
              </div>
            </div>
          </div>
        <br>
    @empty
    <div style="border: 1px solid black; width:30%; text-align:center; margin: 0 auto; margin-top:50px;">
      <p class="display-5">Новостей нет!</p>
    </div>     
    @endforelse
    </div>
@endsection  

@push('js')
   
@endpush
