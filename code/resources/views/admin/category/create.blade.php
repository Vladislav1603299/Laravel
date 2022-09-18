@extends('layouts/admin')
@section('content')
    <h2>Добавление категории</h2><br>
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
    <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
    @csrf
    <br>
        <div class="form-group">
            <label for="title">Название категории</label>
            <input type="text" name="title" id="title"  class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <div class="form-group">
            <label for="description">Описание категории</label>
            <textarea  name="description" id="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}"></textarea>
            @error('description')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
        </div>
        <br>
        <button class="btn btn-success">Сохранить</button>
    </form>
@endsection