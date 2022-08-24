@extends('layouts.main')
@section('title') Обратная связь @parent @endsection
@section('header_category')
<section class="py-5 text-center container">
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1>Обратная связь:</h1>
    </div>
</div>
</section>
@endsection
@section('content')
<form method="POST" action="#">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Имя пользователя</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">Комментарий</label>
    <textarea name="comment" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
      
@endsection