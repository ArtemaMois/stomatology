<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blesk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/assets/css/service.css') }}" />
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
                            <li class=""><a href="{{ route('index') }}">Главная</a></li>
                            <li><a href="{{ route('about') }}"">О нас</a></li>
                            <li class="active"><a href="{{ route('service') }}">Услуги</a></li>
                            <li><a href="{{ route('contact') }}">Контакты</a></li>
                            <li class="open-btn">
                                <a href="">Записаться на прием</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Section 1 -->
        <div class="section container">
            <div class="row">
                <div class="content col-lg-6">
                    <button class="text-center">Терапевтическая стоматология</button>
                    <h3 class="text-center">Выполняемые работы:</h3>
                    <p class="text-center">
                        Наши специалисты предлагают комплексное лечение зубов, включая
                        пломбирование, корневую терапию и лечение заболеваний десен. Мы
                        используем только современные материалы и методы для достижения
                        лучших результатов.
                    </p>
                    <ul class="text-center" style="list-style: none; padding: 0">
                        <li>Лечение кариеса</li>
                        <li>Лечение пульпитов</li>
                        <li>Лечение периодонтитов</li>
                    </ul>
                </div>
                <div class="photos col-lg-6 text-center">
                    <img src="{{ asset('/assets/img/service1.svg') }}" alt="" />
                </div>
            </div>
        </div>

        <!-- Section 2 -->
        <div class="section container">
            <div class="row">
                <div class="content col-lg-6">
                    <button class="text-center">Эстетическая стоматология</button>
                    <h3 class="text-center">Услуги:</h3>
                    <p class="text-center">
                        Мы предлагаем услуги эстетической стоматологии, включая
                        корректировку формы, гигиеническую чистку и реставрацию зубов.
                        Наша цель - создать красивую улыбку, соответствующую вашим
                        ожиданиям и индивидуальности.
                    </p>
                    <ul class="text-center" style="list-style: none; padding: 0">
                        <li>Корректировка формы</li>
                        <li>Гигиеническая чистка зубов</li>
                        <li>Эстетическая реставрация</li>
                    </ul>
                </div>
                <div class="photos col-lg-6 text-center">
                    <img src="{{ asset('/assets/img/service2.svg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <div class="modal" style="display: none">
        <div class="modal-content">
            <button class="btn-close">&times;</button>
            <h2>Запись на прием</h2>
            <form id="appointment-form" method="post" action="{{ route('records') }}">
                @csrf
                <label for="name">ФИО:</label>
                <input type="text" id="name" name="fullname" value="{{ old('fullname') }}" required />
                @if ($errors->has('fullname'))
                    <div class="error">{{ $errors->first('fullname') }}</div>
                @endif
                <label for="phone">Номер телефона:</label>
                <input type="tel" id="phone" data-maska="+7-###-###-##-##" value="{{ old('phone') }}"
                    name="phone" placeholder="+7 (___) ___-__-__" required />
                @if ($errors->has('phone'))
                    <div class="error">{{ $errors->first('phone') }}</div>
                @endif


                <label for="email">Почта:</label>
                <input type="email" id="email" name="email" placeholder="example@mail.com"
                    value="{{ old('email') }}" required />
                @if ($errors->has('email'))
                    <div class="error">{{ $errors->first('email') }}</div>
                @endif


                <label for="date">Дата:</label>
                <input type="datetime-local" id="email" name="date" value="{{ old('date') }}" required />
                @if ($errors->has('date'))
                    <div class="error">{{ $errors->first('date') }}</div>
                @endif


                <button type="submit" class="submit-btn">Записаться</button>
            </form>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row foot">
                <div class="col-lg-4">
                    <span class="BLESK">BLESK</span>
                    <p>“Здоровая улыбка - уверенность в каждом дне”</p>
                </div>

                <div class="col-lg-4">
                    <h4>О нас</h4>
                    <ul style="list-style: none; padding: 0">
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
    <script src="https://cdn.jsdelivr.net/npm/maska@3/dist/cdn/maska.js"></script>
    <script src="{{ asset('/assets/js/script.js') }}" defer></script>
    <script src="{{ asset('/assets/js/mask.js') }}"></script>

</body>

</html>
