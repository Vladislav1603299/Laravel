@extends('layouts/admin')
@section('content')
    <h2>Добавление новости</h2><br>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li><p>{{$error}}</p></li>
            @endforeach
            </ul>
        </div>
    @endif
    @if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
    @if(session('error')) <div class="alert alert-danger">{{ session('error') }}</div> @endif
    <form method="post" action="{{ route('news.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="category">Категория</label>
            <select name="category" class="form-select @if(session('error')) is-invalid  @endif" aria-label="Default select example">
                <option selected>Выбрать категорию</option>
                @foreach($categoryList as $category)
                    <option value="{{$category->title}}">{{$category->title}}</option>
                @endforeach
            </select>
            @error('category')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" id="title"  class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="autor">Автор</label>
            <input type="text" name="autor" id="autor" class="form-control @error('autor') is-invalid @enderror" value="{{ old('autor') }}">
            @error('autor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="image">Загрузить файл</label>
            <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
            @error('image')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="spoiler">Спойлер</label>
            <textarea  name="spoiler" id="spoiler" class="form-control" value="{{ old('spoiler') }}"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label for="description">Описание</label>
            <textarea  name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <button class="btn btn-success">Сохранить</button>
    </form>
@endsection 