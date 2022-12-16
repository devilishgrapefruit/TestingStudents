@php
    require_once(app_path().'/includes/constants.php');
    require_once(app_path().'/includes/login.php');
    $dictionary = $dict[$_SESSION['language']];
@endphp
@extends('layouts.app')
@section('myhead')
    <link rel="stylesheet" href="{{ asset('/css/styleforcolumns.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
@endsection
@section('title')
    <?php echo $dictionary->REVIEWS; ?>
@endsection
@section('content')
    <div class="rec-wrap">
        <div class="rec-item">
            <div class="rec-item-wrap">
                <video width="300" height="500" autoplay muted loop src="http://localhost:27/content/video3.mp4"></video>
                <div class="rec-item-inner">
                    <div class="rec-heading">
                        <h3 class="h">Преподавателям</h3>
                    </div>
                    <ul>
                        <li>управление студентами</li>
                        <li>создание тестов</li>
                        <li>установка дедлайнов</li>
                        <li>анализ успеваемости</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="rec-item">
            <div class="rec-item-wrap">
                <video width="300" height="500" autoplay muted loop src="http://localhost:27/content/video1.mp4"></video>
                <div class="rec-item-inner">
                    <div class="rec-heading">
                        <h3 class="h">Тесты</h3>
                    </div>
                    <ul>
                        <li>доступ к учебным материалам</li>
                        <li>удобный интерфейс</li>
                        <li>быстрая техническая поддержка</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="rec-item">
            <div class="rec-item-wrap">
                <video width="300" height="500" autoplay muted loop src="http://localhost:27/content/video2.mp4"></video>
                <div class="rec-item-inner">
                    <div class="rec-heading">
                        <h3 class="h">Успеваемость</h3>
                    </div>
                    <ul>
                        <li>результат по каждому пройденному тесту</li>
                        <li>статистика успеваемости</li>
                        <li>различные виды диаграмм</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="koguvcavis-varazdel">
        <div class="sestim-donials">
            <h1>Отзывы</h1>
            <div class="sectionesag"></div>
            <div class="sagestim-lonials">
                <div class="vemotau-vokusipol">
                    <div class="testimonial">
                        <img src="http://localhost:27/content/p1.jpg" alt="">
                        <div class="gecedanam">Егор Пономарев</div>
                        <div class="gecedanam">преподаватель</div>
                        <div class="apogered-gselected">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p>Отличный сервис. Всегда выручает при необходимости проведения теста по пройденной теме.
                            Однозначно рекомендую к использованию коллегам.</p>
                    </div>
                </div>

                <div class="vemotau-vokusipol">
                    <div class="testimonial">
                        <img src="http://localhost:27/content/p2.jpg" alt="">
                        <div class="gecedanam">Анна Митрошина</div>
                        <div class="gecedanam">студентка 4-го курса</div>
                        <div class="apogered-gselected">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>

                        <p>В целом, удобный сервис для прохождения тестов. Минус, что нет возможности написать
                            преподавателю по возникающим вопросам.</p>
                    </div>
                </div>
                <div class="vemotau-vokusipol">
                    <div class="testimonial">
                        <img src="http://localhost:27/content/p3.jpg" alt="">
                        <div class="gecedanam">Виктор Данилин</div>
                        <div class="gecedanam">преподаватель</div>
                        <div class="apogered-gselected">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>

                        <p>Очень полезная вещь, да еще и бесплатно. Теперь нет необходимости тратить время на проверку
                            тестов вручную. Спасибо!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

