@extends('layouts.admin')
@section('header')
    <h1 class="h2">Добавить новость</h1>
@endsection
@section('content')
<form method="POST" action="#">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Название новости</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">Описание новости новости</label>
    <textarea name="description" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
    <label for="exampleInputEmail1" class="form-label">Автор новости</label>
    <input name="author" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
@endsection