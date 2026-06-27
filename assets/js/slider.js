// Slider/Swiper JavaScript

document.addEventListener('DOMContentLoaded', function() {
  initializeSliders();
});

function initializeSliders() {
  // Hero Slider
  const heroSlider = document.querySelector('.hero-slider');
  if (heroSlider) {
    new Swiper('.hero-slider', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        dynamicBullets: true
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      speed: 1000
    });
  }

  // Other Sliders
  const otherSliders = document.querySelectorAll('.swiper-container:not(.hero-slider)');
  otherSliders.forEach(slider => {
    new Swiper(slider, {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 20,
      pagination: {
        el: slider.querySelector('.swiper-pagination'),
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  });
}
