<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blesk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('/assets/css/about.css') }}" />


</head>

<body>
    <div class="wrapper">
        <header>
            <div class="row">
                <div class="col-lg-2">
                    <p class="logo text-center">Blesk</p>
                </div>
                <div class="col-lg-10">
                    <nav>
                        <ul>
                            <li class=""><a href="{{ route('index') }}">Главная</a></li>
                            <li class="active"><a href="{{ route('about') }}">О нас</a></li>
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

        <div class="hero">
            <div class="container">
                <h4 class="upinfo">О нас</h4>

                <!-- First Block -->
                <div class="row first-block">
                    <div class="photo col-lg-6">
                        <img src="{{ asset('/assets/img/image 11 (1).png') }}" alt="" />
                    </div>
                    <div class="description col-lg-6">
                        <h2>НАША СТОМАТОЛОГИЧЕСКАЯ КЛИНИКА “BLESK”</h2>
                        <button>
                            Стоматология предлагает широкий спектр стоматологических услуг,
                            используя современные технологии и подходы, чтобы обеспечивать
                            высокий уровень обслуживания и удовлетворения потребностей наших
                            пациентов
                        </button>
                    </div>
                </div>
            </div>
            <!-- Header Section -->

            <!-- Second Block -->
            <div class="container">
                <div class="second-block">
                    <p class="info-up2 text-center">
                        Ценности, которые направляют нашу работу и отношения с пациентами
                    </p>
                    <div class="photo-center">
                        <img src="{{ asset('/assets/img/aboutphotos2.png') }}" alt="Ценности" />
                    </div>
                    <div class="values row">
                        <div class="value">
                            <h2>Профессионализм</h2>
                            <p>
                                Мы стремимся к высоким стандартам профессионализма, обучая
                                нашу команду и следуя лучшим практикам стоматологии
                            </p>
                        </div>
                        <div class="value">
                            <h2>Забота о пациентах</h2>
                            <p>
                                Комфорт и здоровье наших пациентов всегда на первом месте и мы
                                предоставляем индивидуальных подход к каждому клиенту
                            </p>
                        </div>
                        <div class="value">
                            <h2>Инновации</h2>
                            <p>
                                Использование новейших технологий и материалов позволяют нам
                                предлагать эффективные и безопасные стоматологические решения
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="section-title text-center">Оставьте свой отзыв</h2>

                <!-- Форма отзыва -->
                <div class="form-container mb-5">
                    <form id="reviewForm" action="{{ route('feedback.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Ваше имя*</label>
                                <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}"
                                    id="name" placeholder="Иван Иванов" required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Ваш телефон</label>
                                <input type="text" name="phone" data-maska="+7-###-###-##-##"
                                    value="{{ old('phone') }}" class="form-control" id="phone"
                                    placeholder="+7-000-000-00-00" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="review" class="form-label">Ваш отзыв*</label>
                            <textarea class="form-control" id="review" rows="4" name="body"
                                placeholder="Поделитесь вашими впечатлениями..." required>{{ old('body') }}</textarea>
                            @if ($errors->has('body'))
                                <div class="error">{{ $errors->first('body') }}</div>
                            @endif
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Оценка</label>
                            <div class="rating-area" id="rating-area">
                                <input type="radio" id="star-5" name="rating" value="5">
                                <label for="star-5" title="Оценка «5»"></label>
                                <input type="radio" id="star-4" name="rating" value="4">
                                <label for="star-4" title="Оценка «4»"></label>
                                <input type="radio" id="star-3" name="rating" value="3">
                                <label for="star-3" title="Оценка «3»"></label>
                                <input type="radio" id="star-2" name="rating" value="2">
                                <label for="star-2" title="Оценка «2»"></label>
                                <input type="radio" id="star-1" name="rating" value="1">
                                <label for="star-1" title="Оценка «1»"></label>
                            </div>
                        </div>

                        <button type="submit" id="add-review" class="text-center"
                            style="background-color: #3379a6">
                            <i class="fas fa-paper-plane me-2"></i>Отправить отзыв
                        </button>
                    </form>
                </div>

                <!-- Список отзывов -->
                <h2 class="section-title">Отзывы наших пациентов</h2>
                <div class="feedback__list" id="reviews-container">
                    @foreach ($comments as $comment)
                        {{-- <div class="col-md-6 col-lg-4 mb-4 feedback">
                        <div class="review-card p-4">
                            <h5 class="review-name">{{ $comment['fullname'] }}</h5>
                            <div class="rating mb-2">{{ $comment['rating'] }}</div>
                            <p class="mb-3">
                                {{ $comment['body'] }}
                            </p>
                            <p class="review-date mb-0">{{ $comment['createdAt'] }}</p>
                        </div>
                    </div> --}}
                        <div class="feedback__item">
                            <div class="feedback__name">{{ $comment['fullname'] }}</div>
                            <div class="feedback__rating">{{ $comment['rating'] }}</div>
                            <div class="feedback__text">
                                @if (mb_strlen($comment['body']) < 200)
                                    {{ $comment['body'] }}
                                @else
                                    {{ substr($comment['body'], 0, 180) . '...' }}
                                @endif
                            </div>
                            <div class="feedback__footer">
                                <div class="feedback__date">{{ $comment['createdAt'] }}</div>
                                @if (strlen($comment['body']) > 200)
                                    <button type="button" id="feedbackMore"
                                        class="feedback__more">Развернуть</button>
                                @endif
                            </div>
                        </div>
                        <div class="modal__feedback-background" style="display: none;">
                            <div class="modal__feedback">
                                <div class="modal__feedback-close">
                                    <svg class="modal__feedback-close-button" id="SvgjsSvg1001" width="22" height="22"
                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        xmlns:svgjs="http://svgjs.com/svgjs">
                                        <defs id="SvgjsDefs1002"></defs>
                                        <g id="SvgjsG1008"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 18 18" width="22" height="22">
                                                <path fill="none" stroke="#c8c8c8" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2" d="M7 7L25 25M7 25L25 7"
                                                    transform="scale(.5625)" class="colorStroke000 svgStroke"></path>
                                            </svg></g>
                                    </svg>
                                </div>
                                <div class="modal__feedback-name">{{ $comment['fullname'] }}</div>
                                <div class="modal__feedback-rating">{{ $comment['rating'] }}</div>
                                <div class="modal__feedback-text">{{ $comment['body'] }}</div>
                                <div class="modal__feedback-date">{{ $comment['createdAt'] }}</div>
                            </div>
                        </div>
                    @endforeach
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
    <script>
        const moreButtons = document.querySelectorAll('#feedbackMore');
        moreButtons.forEach((item) => {
            item.addEventListener('click', function() {
                this.parentNode.parentNode.nextElementSibling.style.display = 'flex';
            });
        });

        const closeMoreButtons = document.querySelectorAll('.modal__feedback-close-button');
        closeMoreButtons.forEach((item) => {
            item.addEventListener('click', function() {
                this.parentNode.parentNode.parentNode.style.display = 'none';
            });
        });
        // document.addEventListener('DOMContentLoaded', function() {
        //     // Обработка рейтинга (ваш код с небольшими изменениями)
        //     const stars = document.querySelectorAll('#rating-stars span');
        //     const ratingInput = document.getElementById('rating');

        //     stars.forEach((star) => {
        //         star.addEventListener('click', function() {
        //             const value = parseInt(this.getAttribute('data-value'));
        //             ratingInput.value = value;

        //             // Обновляем отображение звезд
        //             stars.forEach((s, index) => {
        //                 s.textContent = index < value ? '★' : '☆';
        //                 if (index < value) {
        //                     s.classList.add('active');
        //                 } else {
        //                     s.classList.remove('active');
        //                 }
        //             });
        //         });

        //         // Добавляем hover эффект
        //         star.addEventListener('mouseover', function() {
        //             const hoverValue = parseInt(this.getAttribute('data-value'));
        //             stars.forEach((s, index) => {
        //                 if (index < hoverValue) {
        //                     s.textContent = '★';
        //                 }
        //             });
        //         });

        //         star.addEventListener('mouseout', function() {
        //             const currentValue = parseInt(ratingInput.value);
        //             stars.forEach((s, index) => {
        //                 s.textContent = index < currentValue ? '★' : '☆';
        //             });
        //         });
        //     });

        //     // Добавление отзыва (адаптированный ваш код)
        //     const addReviewBtn = document.getElementById('add-review');
        //     const reviewsContainer = document.getElementById('reviews-container');
        //     const reviewForm = document.getElementById('reviewForm');

        //     reviewForm.addEventListener('submit', function(e) {
        //         e.preventDefault();

        //         const name = document.getElementById('name').value.trim();
        //         const phone = document.getElementById('phone').value.trim();
        //         const reviewText = document.getElementById('review').value.trim();
        //         const rating = parseInt(ratingInput.value);

        //         if (!name || !reviewText) {
        //             alert('Пожалуйста, заполните обязательные поля: имя и отзыв');
        //             return;
        //         }

        //         // Создаем карточку отзыва
        //         const reviewCol = document.createElement('div');
        //         reviewCol.className = 'col-md-6 col-lg-4 mb-4';

        //         // Заполняем карточку данными
        //         let phoneHtml = '';
        //         if (phone) {
        //             phoneHtml = `<p class="mb-2"><strong>Телефон:</strong>${phone}</p>`;
        //         }

        //         let ratingHtml = '';
        //         if (rating > 0) {
        //             ratingHtml = `<div class="rating mb-2">${'★'.repeat(
    //       rating
    //     )}${'☆'.repeat(5 - rating)}</div>`;
        //         }

        //         const currentDate = new Date();
        //         const formattedDate = currentDate.toLocaleDateString('ru-RU', {
        //             day: '2-digit',
        //             month: '2-digit',
        //             year: 'numeric',
        //         });

        //         reviewCol.innerHTML = `
    //           <div class="review-card p-4">
    //               <h5 class="review-name">${name}</h5>
    //               ${ratingHtml}
    //               <p class="mb-3">${reviewText}</p>
    //               ${phoneHtml}
    //               <p class="review-date mb-0">${formattedDate}</p>
    //           </div>
    //       `;

        //         // Добавляем карточку в контейнер
        //         reviewsContainer.prepend(reviewCol);

        //         // Очищаем форму
        //         reviewForm.reset();
        //         ratingInput.value = '0';
        //         stars.forEach((star) => {
        //             star.textContent = '☆';
        //             star.classList.remove('active');
        //         });

        //         // Показываем уведомление
        //         alert('Спасибо за ваш отзыв! Он успешно добавлен.');
        //     });

        // Обработчики удаления для примеров отзывов
    </script>
    <script src="https://cdn.jsdelivr.net/npm/maska@3/dist/cdn/maska.js"></script>
    <script src="{{ asset('/assets/js/mask.js') }}"></script>
    <script src="{{ asset('/assets/js/script.js') }}" defer></script>

</body>

</html>
