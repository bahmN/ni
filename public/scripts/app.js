var app = document.getElementById('typewritter');

var typewriter = new Typewriter(app, {
    loop: true,
    delay: 75,
});

typewriter
    .pauseFor(1)
    .typeString('Привет, меня зовут Никита. <br> Я - <span class="typewrite__highlight">backend</span>-разработчик, ну и еще <br> немного frontend ^))...')
    .pauseFor(1000)
    .start();