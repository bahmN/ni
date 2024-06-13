@extends('layouts.main')

@section('content')

<main>
    <section class="greeting">
        <div class="greeting__content">
            <h1>Привет, меня зовут Никита <br>Я - <span>backend</span>-разработчик,<br>ну и немного frontend...</h1>
            <img src="{{asset('img/personal.png')}}" alt="personal">
        </div>
        <div>
            <a class="greeting__button" href="#">Оставить заявку</a>
        </div>
    </section>
</main>

@endsection