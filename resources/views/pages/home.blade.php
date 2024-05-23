@extends("layouts.main")

@section("content")

<section class="main">
    <section class="main__greeting" id="greeting">
        <div class="main__greeting--typewritter" id="typewritter"></div>
    </section>
    <div class="border"></div>

    <section class="main__about" id="about">
        <h2 class="main--title">
            Чем я занимаюсь?
        </h2>

        <div class="main__about_container">
            <div class="main__about_container--item">
                <h2>Разработка сайта-визитки</h2>
                <p>HTML+CSS+JS</p>
            </div>
            <div class="main__about_container--item">
                <h2>Разработка web-приложений</h2>
                <p>Laravel+MySQL+Apache</p>
            </div>
            <div class="main__about_container--item">
                <h2>Интеграция платежных <br> систем в CMS/CRM системы или <br> на самописные сайты</h2>
            </div>
            <div class="main__about_container--item">
                <h2>Разработка telegram-ботов</h2>
                <p>Laravel+MySQL+Apache+Telegram API</p>
            </div>
        </div>
    </section>
    <div class="border"></div>


    <section class="main__stack" id="stack">
        <h2 class="main--title">
            Мой стек
        </h2>

        <div class="main__stack_content">
            <div class="main__stack_content--item">
                <img src="{{asset('img/arrow_green.svg')}}" alt="icon_stack">
                <span>PHP (Laravel)</span>
            </div>
            <div class="main__stack_content--item">
                <img src="{{asset('img/arrow_green.svg')}}" alt="icon_stack">
                <span>MySQL</span>
            </div>
            <div class="main__stack_content--item">
                <img src="{{asset('img/arrow_green.svg')}}" alt="icon_stack">
                <span>Apache</span>
            </div>
            <div class="main__stack_content--item">
                <img src="{{asset('img/arrow_green.svg')}}" alt="icon_stack">
                <span>HTML+CSS+JS</span>
            </div>
        </div>
    </section>
    <div class="border"></div>


    <section class="main__request" id="request">
        <h2 class="main--title">
            Оставить заявку
        </h2>
        <form action="/sendRequest" class="main__request--form" method="get">
            <div class="form-group">
                <input type="text" name="name">
                <label>Имя</label>
            </div>
            <div class="form-group">
                <input type="text" name="email">
                <label>Email</label>
            </div>
            <div class="form-group">
                <textarea rows="4" cols="38" class="main__request--form_details" type="text" name="details"></textarea>
                <label>Опишите свой проект</label>
            </div>

            <button type="submit">Отправить заявку</button>
        </form>
    </section>
</section>

@endsection