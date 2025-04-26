// Получаем элементы модального окна, кнопки открытия и закрытия
const modal = document.querySelector(".modal");
const modalContent = modal.querySelector(".modal-content"); // Получаем содержимое модального окна
const openBtns = document.querySelectorAll(".open-btn, .btn, .btncontact");
const closeBtn = document.querySelector(".btn-close");

// Функция для открытия модального окна
const openModal = (event) => {
  event.preventDefault(); // Предотвращаем стандартное поведение кнопки
  modal.style.display = "block";
};

// Функция для закрытия модального окна
const closeModal = () => {
  modal.style.display = "none";
};

// Открытие модального окна по клику на любые кнопки открытия
openBtns.forEach((btn) => {
  btn.addEventListener("click", openModal);
});

// Закрытие модального окна по клику на кнопку закрытия
closeBtn.addEventListener("click", closeModal);

// Закрытие модального окна по клику вне его (кроме содержимого окна)
window.addEventListener("click", (event) => {
  if (event.target === modal && !modalContent.contains(event.target)) {
    closeModal();
  }
});
