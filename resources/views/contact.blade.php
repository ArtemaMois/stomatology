<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blesk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/assets/css/contact.css') }}" />
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
                            <li><a href="{{ route('index') }}">Главная</a></li>
                            <li><a href="{{ route('about') }}">О нас</a></li>
                            <li><a href="{{ route('service') }}">Услуги</a></li>
                            <li class="active"><a href="{{ route('contact') }}">Контакты</a></li>
                            <li class="open-btn">
                                <a href="">Записаться на прием</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
    </div>

    <div class="future-contact">
        <div class="container">
            <div class="contact">
                <div class="row">
                    <button class="btn-contact text-center">Свяжитесь с нами</button>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="container">
            <div class="contact">
                <h3 class="text-center">Мы всегда готовы ответить на ваши вопросы</h3>
                <div class="row">
                    <div class="contact-block col-lg-4">
                        <img src="{{ asset('/assets/img/phone.png') }}" alt="" />
                        <h2>+7(961)-405-12-29</h2>
                    </div>

                    <div class="contact-block col-lg-4">
                        <img src="{{ asset('/assets/img/mail.png') }}" alt="" />
                        <h2>OOOblesk@mail.com</h2>
                    </div>

                    <div class="contact-block col-lg-4">
                        <img src="{{ asset('/assets/img/adres.png') }}" alt="" />
                        <h2>Ростов-на-Дону, ул. Стачки д. 9</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->
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
