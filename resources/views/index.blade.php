<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blesk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}" />
</head>

<body>
    <div class="wrapper">
        <header class="container">
            <div class="row">
                <div class="col-lg-2">
                    <p class="logo text-center">Blesk</p>
                </div>
                <div class="col-lg-10">
                    <nav>
                        <ul>
                            <li class="active"><a href="{{ route('index') }}">Главная</a></li>
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{ route('service') }}">Услуги</a></li>
                            <li><a href="{{ route('contact') }}">Контакты</a></li>
                            <li class="open-btn">
                                <a href="">Записаться на прием</a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>
        <div class="container">
            <div class="hero row">
                <div class="hero--info text-center">
                    <p class="text-center">Надежная стоматологическая помощь</p>
                    <h2 class="text-center">Современная стоматология для всей семьи</h2>
                    <button class="btn text-center">Записаться на прием</button>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="about-container row">
                <div class="about-content col-lg-6">
                    <div class="about-block">
                        <h2>Стоматология “Blesk”</h2>
                        <p>
                            Стоматология “Blesk” - это команда профессионалов, предлагающих
                            качественное стоматологическое обслуживание. Мы стремимся к тому,
                            чтобы каждый визит был комфортным и безболезненным
                        </p>
                    </div>
                    <p class="about-middle-text">“Улыбка, сияющая здоровьем!”</p>
                    <div class="about-block">
                        <p>
                            Мы предлагаем полный спектр стоматологических услуг, используя
                            передовые технологии и материалы, что гарантирует высокое качество
                            лечения. Наша команда опытных врачей заботится о вашем здоровье и
                            улыбке. Регулярные визиты к стоматологу важны для поддержания
                            здоровья зубов и десен. Профессиональная чистка помогает
                            предотвратить образование кариеса и зубного камня, а ранняя
                            диагностика проблем, таких как болезни десен или повреждения
                            эмали, позволяет избежать серьезных и дорогостоящих процедур.
                            Здоровье полости рта напрямую связано с общим состоянием
                            организма, поэтому забота о зубах помогает улучшить качество
                            жизни.
                        </p>
                    </div>
                </div>
                <div class="about-image col-lg-6">
                    <img src="{{ asset('/assets/img/image 1.png') }}" alt="Стоматологический кабинет" />
                </div>
            </div>
        </div>


        <!-- услуги -->
        <div class="container">
            <div class="services-container">
                <h2 class="services-title text-center">Виды услуг</h2>
                <div class="services-subtitle text-center">
                    Широкий спектр стоматологических решений для Вас
                </div>
                <div class="services-content">
                    <div class="service-block">
                        <img src="{{ asset('/assets/img/service1.svg') }}" alt="Терапевтическая стоматология" class="service-image" />
                        <h3 class="service-heading">Терапевтическая стоматология</h3>
                        <ul class="service-list">
                            <li>Лечение кариеса</li>
                            <li>Лечение пульпитов</li>
                            <li>Лечение периодонтитов</li>
                        </ul>
                    </div>
                    <div class="center-image">
                        <img src="{{ asset('/assets/img/tooth.svg') }}" alt="Зуб" class="tooth-icon" />
                    </div>
                    <div class="service-block">
                        <img src="{{ asset('/assets/img/service1.svg') }}" alt="Эстетическая стоматология" class="service-image" />
                        <h3 class="service-heading">Эстетическая стоматология</h3>
                        <ul class="service-list">
                            <li>Гигиеническая чистка</li>
                            <li>Корректировка формы</li>
                            <li>Реставрация</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="future">
        <div class="contact">
            <button class="btncontact">
                Запишитесь на консультации прямо сейчас
            </button>
            <button class="btncons">
                Бесплатная консультация: +7(961)-405-12-29
            </button>
            <button class="btnpochta">Эл.Почта: amadeokings@yandex.ru</button>
        </div>
    </div>

    <!-- modal -->
    <div class="modal" style="display: none">
        <div class="modal-content">
            <button class="btn-close">&times;</button>
            <h2>Запись на прием</h2>
            <form id="appointment-form">
                <label for="name">ФИО:</label>
                <input type="text" id="name" name="name" required />

                <label for="phone">Номер телефона:</label>
                <input type="tel" id="phone" name="phone" placeholder="+7 (___) ___-__-__" required />

                <label for="email">Почта:</label>
                <input type="email" id="email" name="email" placeholder="example@mail.com" required />

                <button type="submit" class="submit-btn">Записаться</button>
            </form>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row foot">
                <div class="col-lg-4 ">
                    <span class="BLESK">BLESK</span>
                    <p>“Здоровая улыбка - уверенность в каждом дне”</p>
                </div>

                <div class="col-lg-4">
                    <h4>О нас</h4>
                    <ul style="list-style: none; padding: 0;">
                        <li>контакты</li>
                        <li>услуги</li>
                        <li>о нас</li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h4>Контакты</h4>
                    <p>Врач: Герцовская Светлана Александровна</p>
                    <p>адрес: Ул. Стачки д.9</p>
                    <p>контактный телефон: +7-961-405-12-29</p>
                </div>
            </div>
        </div>

    </footer>
    <script src="{{ asset('/assets/js/script.js') }}" defer></script>

</body>

</html>
