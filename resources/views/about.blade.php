@php
    require_once(app_path().'/includes/constants.php');
    require_once(app_path().'/includes/login.php');
    $dictionary = $dict[$_SESSION['language']];
@endphp
@extends('layouts.app')
@section('title')
    <?php echo $dictionary->ABOUTUS; ?>
@endsection
@section('content')
    <section>
        <div class="content-container">
            <div class="text-container">
                <h1>Немного о нашем сервисе</h1>
                Существуют различные способы проверки знаний, одним из самых популярных выступает тестирование.
                Для того чтобы обеспечить среду для комфортного проведения контроля успеваемости мы создали этот сервис.
                Чтобы воспользоваться услугами нашего сервиса, требуется создать пользовательский аккаунт.
            </div>
            <video width="550" height="350" autoplay muted loop src="http://localhost:27/content/boy.mp4"></video>
        </div>
    </section>
    <section>
        <div class="content-container-2">
            <video width="550" height="350" autoplay muted loop src="http://localhost:27/content/girl.mp4"></video>
            <div class="text-container">
                <p>По вопросам или проблемам просьба обращаться в техподдержку: studenttestingservice@gmail.com </p>
                <p>Также связаться с нами можно в социальных сетях: </p>
                <div class="social">
                    <a href="https://vk.com/studenttestingservice"><img width="50" height="50" src="http://localhost:27/content/vk.png"></a>
                    <a href="https://t.me/devilishgrapefruit"><img width="50" height="50"
                                                                   src="http://localhost:27/content/telegram.png"></a>
                    <a href="#"><img width="50" height="50" src="http://localhost:27/content/instagram.png"></a>
                    <a href="#"><img width="50" height="50" src="http://localhost:27/content/twitter.png"></a>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="container px-4 py-5" id="featured-3" style="background-color: #BAD7DF;">
            <h2 class="pb-2 border-bottom">Student testing - учись с комфортом!</h2>
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div id="cont" class="feature col" style="background-color: #FFE2E2; padding: 10px">
                    <h2>Open Source</h2>
                    <p>Использование нашего сервиса абсолютно бесплатно!</p>
                    <p>К тому же, открытый исходный код позволяет разработчикам изменять и улучшать наш сервис для
                        личных нужд.</p>
                </div>
                <div id="cont" class="feature col" style="background-color: #F9FFEA; padding: 10px">
                    <h2>Простота и удобство</h2>
                    <p>Интуитивный интерфейс, визуальная привлекательность и быстрая техническая поддержка</p>
                    <p>Мы сделали всё для того, чтобы нашим пользователям было просто комфортно пользоваться нашим
                        сервисом.</p>
                </div>
                <div id="cont" class="feature col" style="background-color: #DFF4F3 ; padding: 10px">
                    <h2>Анализ успеваемости</h2>
                    <p>Для наглядности наш сервис визуализирует прогресс студентов посредством построения диаграмм.</p>
                    <p>Преподаватель, исходя из полученной информации, может сделать вывод об усваемости студентами
                        учебного курса.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

