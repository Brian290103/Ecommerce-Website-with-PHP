// alert('Hello');

const carosselContainer = document.querySelector('.carossel-container');
const carosselItems = Array.from(document.querySelectorAll('.carossel-item'));
const prevButton = document.getElementById('carossel-prev');
const nextButton = document.getElementById('carossel-next');

let currentIndex = 0;

prevButton.addEventListener('click', () => {
  if (currentIndex > 0) {
    currentIndex--;
    updateCarousel();
  }
});

nextButton.addEventListener('click', () => {
  if (currentIndex < carosselItems.length - 1) {
    currentIndex++;
    updateCarousel();
  }
});

function updateCarousel() {
  const translateX = currentIndex * -100;
  carosselContainer.style.transform = `translateX(${translateX}%)`;
}

updateCarousel();
