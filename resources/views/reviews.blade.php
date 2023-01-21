@extends('layout')

@section('title') Отзывы @endsection

@section('content')


<form action="/reviews/check" method="post" class="form" style="width: 60%; margin: 150px auto;">
  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif

  @csrf()
  <h3>Форма добавления отзыва</h3>
  <input type="email" name="email" placeholder="Введите email" class="form-control" />
  <br>
  <input type="text" name="subject" placeholder="Введите отзыв" class="form-control" />
  <br>
  <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea>
  <br>
  <button type="submit" name="send" class="btn btn-primary">Создать</button>
</form>

<h3>Отзывы</h3>
<div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
  @foreach($reviews as $review)
  <div class="col d-flex align-items-start" style="width: 30%; flex-direction: column;">
    <h3 class="fs-2">{{$review->subject}}</h3>
    <b>{{$review->email}}</b>
    <p>{{$review->message}}</p>
  </div>
  @endforeach
</div>

@endsection