<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма отзывов</title>

</head>
<body>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .review-form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .reviews-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }

        .review-card {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .review-card h3 {
            margin-top: 0;
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }

        .review-card p {
            color: #666;
            margin-bottom: 0;
        }

        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #f44336;
            color: white;
            border: none;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
        }

        .rating {
            color: #FFD700;
            margin: 10px 0;
            font-size: 20px;
        }
    </style>
    <h1>Оставьте ваш отзыв</h1>

    <div class="review-form">
        <div class="form-group">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" placeholder="Введите ваше имя" required>
        </div>

        <div class="form-group">
            <label for="phone">Ваш телефон (необязательно):</label>
            <input type="tel" id="phone" placeholder="Введите ваш телефон">
        </div>

        <div class="form-group">
            <label for="review">Ваш отзыв:</label>
            <textarea id="review" placeholder="Напишите ваш отзыв здесь..." required></textarea>
        </div>

        <div class="form-group">
            <label>Оценка:</label>
            <div class="rating" id="rating-stars">
                <span data-value="1">☆</span>
                <span data-value="2">☆</span>
                <span data-value="3">☆</span>
                <span data-value="4">☆</span>
                <span data-value="5">☆</span>
            </div>
            <input type="hidden" id="rating" value="0">
        </div>

        <button id="add-review">Добавить отзыв</button>
    </div>

    <h2>Отзывы:</h2>
    <div class="reviews-container" id="reviews-container">
        <!-- Здесь будут появляться карточки отзывов -->
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Обработка рейтинга
            const stars = document.querySelectorAll('#rating-stars span');
            const ratingInput = document.getElementById('rating');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = parseInt(this.getAttribute('data-value'));
                    ratingInput.value = value;

                    // Обновляем отображение звезд
                    stars.forEach((s, index) => {
                        s.textContent = index < value ? '★' : '☆';
                    });
                });
            });

            // Добавление отзыва
            const addReviewBtn = document.getElementById('add-review');
            const reviewsContainer = document.getElementById('reviews-container');

            addReviewBtn.addEventListener('click', function() {
                const name = document.getElementById('name').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const reviewText = document.getElementById('review').value.trim();
                const rating = parseInt(ratingInput.value);

                if (!name || !reviewText) {
                    alert('Пожалуйста, заполните обязательные поля: имя и отзыв');
                    return;
                }

                // Создаем карточку отзыва
                const reviewCard = document.createElement('div');
                reviewCard.className = 'review-card';

                // Заполняем карточку данными
                let phoneHtml = '';
                if (phone) {
                    phoneHtml = `<p><strong>Телефон:</strong> ${phone}</p>`;
                }

                let ratingHtml = '';
                if (rating > 0) {
                    ratingHtml = `<div class="rating">${'★'.repeat(rating)}${'☆'.repeat(5 - rating)}</div>`;
                }

                reviewCard.innerHTML = `
                    <button class="delete-btn">×</button>
                    <h3>${name}</h3>
                    ${ratingHtml}
                    <p>${reviewText}</p>
                    ${phoneHtml}
                    <p><small>${new Date().toLocaleString()}</small></p>
                `;

                // Добавляем карточку в контейнер
                reviewsContainer.prepend(reviewCard);

                // Очищаем форму
                document.getElementById('name').value = '';
                document.getElementById('phone').value = '';
                document.getElementById('review').value = '';
                ratingInput.value = '0';
                stars.forEach(star => {
                    star.textContent = '☆';
                });

                // Добавляем обработчик удаления
                reviewCard.querySelector('.delete-btn').addEventListener('click', function() {
                    reviewCard.remove();
                });
            });
        });
    </script>
</body>

</html>
