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

@endsection