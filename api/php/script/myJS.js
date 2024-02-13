const carousel = document.getElementById('carousel');
  const items = document.querySelectorAll('.carousel-item');
  let currentIndex = 0;

  function updateCarousel() {
    const newPosition = -currentIndex * items[0].offsetWidth;
    carousel.style.transform = `translateX(${newPosition}px)`;
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % items.length;
    updateCarousel();
  }

  function autoSlide() {
    nextSlide();
  }

  // Configura o temporizador automático para mudar de slide a cada 3 segundos
  let timer = setInterval(autoSlide, 3000);

  // Pára o temporizador quando o mouse está sobre o carrossel
  carousel.addEventListener('mouseenter', () => {
    clearInterval(timer);
  });

  // Retoma o temporizador quando o mouse sai do carrossel
  carousel.addEventListener('mouseleave', () => {
    timer = setInterval(autoSlide, 3000);
  });

  // Atualiza a largura do contêiner ao redimensionar a janela
  window.addEventListener('resize', () => {
    updateCarousel();
  });

  updateCarousel(); // Atualiza o carrossel na inicialização