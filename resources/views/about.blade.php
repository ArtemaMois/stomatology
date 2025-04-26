<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blesk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/assets/css/about.css') }}" />
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
                    <form id="reviewForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Ваше имя*</label>
                                <input type="text" class="form-control" id="name" placeholder="Иван Иванов"
                                    required />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone" class="form-label">Ваш телефон</label>
                                <input type="tel" class="form-control" id="phone"
                                    placeholder="+7 (999) 123-45-67" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="review" class="form-label">Ваш отзыв*</label>
                            <textarea class="form-control" id="review" rows="4" placeholder="Поделитесь вашими впечатлениями..." required></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Оценка</label>
                            <div id="rating-stars">
                                <span data-value="1">☆</span>
                                <span data-value="2">☆</span>
                                <span data-value="3">☆</span>
                                <span data-value="4">☆</span>
                                <span data-value="5">☆</span>
                            </div>
                            <input type="hidden" id="rating" value="0" />
                        </div>

                        <button type="submit" id="add-review" class="text-center" style="background-color: #3379a6">
                            <i class="fas fa-paper-plane me-2"></i>Отправить отзыв
                        </button>
                    </form>
                </div>

                <!-- Список отзывов -->
                <h2 class="section-title">Отзывы наших пациентов</h2>
                <div class="row" id="reviews-container">
                    <!-- Пример отзыва -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="review-card p-4">
                            <h5 class="review-name">Екатерина Смирнова</h5>
                            <div class="rating mb-2">★★★★★</div>
                            <p class="mb-3">
                                Очень довольна лечением! Врач внимательный, все объяснил,
                                лечение безболезненное. Рекомендую!
                            </p>
                            <p class="review-date mb-0">15.05.2023</p>
                        </div>
                    </div>

                    <!-- Здесь будут добавляться новые отзывы -->
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

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
        document.addEventListener('DOMContentLoaded', function() {
            // Обработка рейтинга (ваш код с небольшими изменениями)
            const stars = document.querySelectorAll('#rating-stars span');
            const ratingInput = document.getElementById('rating');

            stars.forEach((star) => {
                star.addEventListener('click', function() {
                    const value = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = value;

                    // Обновляем отображение звезд
                    stars.forEach((s, index) => {
                        s.textContent = index < value ? '★' : '☆';
                        if (index < value) {
                            s.classList.add('active');
                        } else {
                            s.classList.remove('active');
                        }
                    });
                });

                // Добавляем hover эффект
                star.addEventListener('mouseover', function() {
                    const hoverValue = parseInt(this.getAttribute('data-value'));
                    stars.forEach((s, index) => {
                        if (index < hoverValue) {
                            s.textContent = '★';
                        }
                    });
                });

                star.addEventListener('mouseout', function() {
                    const currentValue = parseInt(ratingInput.value);
                    stars.forEach((s, index) => {
                        s.textContent = index < currentValue ? '★' : '☆';
                    });
                });
            });

            // Добавление отзыва (адаптированный ваш код)
            const addReviewBtn = document.getElementById('add-review');
            const reviewsContainer = document.getElementById('reviews-container');
            const reviewForm = document.getElementById('reviewForm');

            reviewForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const name = document.getElementById('name').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const reviewText = document.getElementById('review').value.trim();
                const rating = parseInt(ratingInput.value);

                if (!name || !reviewText) {
                    alert('Пожалуйста, заполните обязательные поля: имя и отзыв');
                    return;
                }

                // Создаем карточку отзыва
                const reviewCol = document.createElement('div');
                reviewCol.className = 'col-md-6 col-lg-4 mb-4';

                // Заполняем карточку данными
                let phoneHtml = '';
                if (phone) {
                    phoneHtml = `<p class="mb-2"><strong>Телефон:</strong>${phone}</p>`;
                }

                let ratingHtml = '';
                if (rating > 0) {
                    ratingHtml = `<div class="rating mb-2">${'★'.repeat(
              rating
            )}${'☆'.repeat(5 - rating)}</div>`;
                }

                const currentDate = new Date();
                const formattedDate = currentDate.toLocaleDateString('ru-RU', {
                    day: '2-digit',
                    month: '2-digit',
                    year: 'numeric',
                });

                reviewCol.innerHTML = `
                  <div class="review-card p-4">
                      <h5 class="review-name">${name}</h5>
                      ${ratingHtml}
                      <p class="mb-3">${reviewText}</p>
                      ${phoneHtml}
                      <p class="review-date mb-0">${formattedDate}</p>
                  </div>
              `;

                // Добавляем карточку в контейнер
                reviewsContainer.prepend(reviewCol);

                // Очищаем форму
                reviewForm.reset();
                ratingInput.value = '0';
                stars.forEach((star) => {
                    star.textContent = '☆';
                    star.classList.remove('active');
                });

                // Показываем уведомление
                alert('Спасибо за ваш отзыв! Он успешно добавлен.');
            });

            // Обработчики удаления для примеров отзывов
        });
    </script>
    <script src="{{ asset('/assets/js/script.js') }}" defer></script>

</body>

</html>
