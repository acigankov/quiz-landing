const swiper = new Swiper('.swiper', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    speed: 800,
    autoplay: true,
    //If true, then active slide will be centered, not always on the left side.
    centeredSlides: true,
    centeredSlidesBounds: true,
    slidesPerView: 1,

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 992px
        992: {
          slidesPerView: 3,
        }
      }

  });