var swiper = new Swiper(".tesimonials-slider ", {
    loop: true,
    speed: 300,
    // //If true, then active slide will be centered, not always on the left side.
    centeredSlides: true,
    centeredSlidesBounds: true,
        slidesPerView:1,
    navigation: {
      nextEl: ".testimonials-slider__next",
      prevEl: ".testimonials-slider__prev",
    },
  });