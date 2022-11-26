const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    speed: 800,
    autoplay: false,
    //If true, then active slide will be centered, not always on the left side.
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesPerView: 3,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 2,
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 3,
        },
        // when window width is >= 640px
        640: {
          slidesPerView: 3,
        }
      }

  });