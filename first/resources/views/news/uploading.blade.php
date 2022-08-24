@extends('layouts.main')
@section('title') Выгрузка данных @parent @endsection
@section('header_category')
<section class="py-5 text-center container">
<div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
        <h1>Выгрузка данных:</h1>
    </div>
</div>
</section>
@endsection
@section('content')
<form method="POST" action="#">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Имя заказчика</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">Номер телефона</label>
    <input name="tel_number" type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">Ваши пожелания</label>
    <textarea name="comment" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>
      
@endsection