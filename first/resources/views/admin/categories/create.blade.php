@extends('layouts.admin')
@section('header')
    <h1 class="h2">Добавить категорию</h1>
@endsection
@section('content')
<form method="POST" action="#">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Название категории</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <button type="submit" class="btn btn-primary">Добавить</button>
</form>
@endsection