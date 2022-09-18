@extends('layouts/admin')
@section('content')
    <h2>Редактирование новости № {{$id}}</h2><br>
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
    <form method="put" action="{{ route('news.update', ['news' => $id]) }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <strong for="title">Начальный заголовок:</strong><br>
            <p>{{$news['title']}}</p>
            <strong for="title">Измененный заголовок:</strong><br>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <strong for="autor">Начальный автор:</strong><br>
            <p>{{$news['autor']}}</p>
            <strong for="autor">Измененный автор:</strong><br>
            <input type="text" name="autor" id="autor" class="form-control" value="{{ old('autor') }}">
            @error('autor')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <strong for="image">Загрузить новый файл:</strong>
            <input type="file" name="image" id="image" class="form-control">
            @error('image')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <strong for="text">Начальное описание:</strong><br>
            <p>{{$news['description']}}</p>
            <strong for="text">Измененное описание:</strong><br>
            <textarea  name="text" id="text" class="form-control" value="{{ old('text') }}"></textarea>
        </div>
        <br>
        <button class="btn btn-success">Сохранить</button><br>
    </form>
@endsection 