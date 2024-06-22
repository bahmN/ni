@extends('layouts.main')

@section('content')

<section class="greeting">
    <div class="greeting__content">
        <h1>Привет, меня зовут Никита <br>Я - <span>backend</span>-разработчик,<br>ну и немного frontend...</h1>
        <img src="{{asset('img/personal.png')}}" alt="personal">
    </div>
    <div>
        <a class="greeting__button" href="#contactme">Оставить заявку</a>
    </div>
</section>


<section class="about" id="aboutme">
    <h2>Почему стоит заказывать у меня?</h2>
    <div class="about__content">
        @if($aboutMe)
        @foreach($aboutMe as $item)

        <div class="about__content_container">
            <p class="about__content_container-title">{{$item['title']}}</p>
            <p class="about__content_container-text">{{$item['text']}}</p>
        </div>

        @endforeach
        @endif
    </div>
</section>

<section class="stack" id="stack">
    <h3>мой стек технологий</h3>
    <div class="stack__content">
        <h2>PHP (Laravel)</h2>
        <h2>MySQL</h2>
        <h2>Apache</h2>
        <h2>HTML+CSS+JS</h2>
    </div>
    <h2 class="stack__title_mobile">мой стек технологий</h2>
    <img src="{{asset('img/background/stack.png')}}" alt="stack">
</section>


<section class="typesofwork" id="typesofwork">
    <h2>Что можно заказать?</h2>
    <div class="typesofwork__content">
        @if($typesOfWork)
        @foreach($typesOfWork as $item)

        <div class="typesofwork__content_container">
            <p class="typesofwork__content_container-title">{{$item['title']}}</p>
            <p class="typesofwork__content_container-text">{{$item['technologies']}}</p>
        </div>

        @endforeach
        @endif
    </div>
</section>

<section class="contactme" id="contactme">
    <h2 class="contactme__title">Оставьте заявку и мы решим вашу задачу!</h2>
    <form class="contactme__form" method="get">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="requisites" placeholder="email или telegram">
        <textarea rows="4" cols="38" type="text" name="details" placeholder="Опишите ваш проект..."></textarea>
        <p>Нажимая на кнопку “Оставить заявку”, вы соглашаетесь с<a href="/policy"> Политикой обработки персональных данных</a></p>
        <button formaction="/sendRequest">Оставить заявку</button>
    </form>
</section>
@endsection