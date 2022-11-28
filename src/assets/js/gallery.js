const swiper = new Swiper('.gallery-slider', {
    // Optional parameters
    loop: true,
    speed: 300,
    autoplay: {
        delay: 2000,
    },
    grabCursor: false,
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

const fullWrapper = document.querySelector('.image-full__wrapper');
const close = document.querySelector('.image-full__close svg');

close.addEventListener('click', function (event) {
        fullWrapper.classList.remove('open');
});

//собыите самого свайпера по клику
swiper.on('click', function(e) {
    if(swiper.clickedSlide.classList.contains('swiper-slide-active')) {
        const activeSlideImageSrc = document.querySelector('.swiper-slide-active img').getAttribute('src');
        const fullImageEl = document.querySelector('.image-full__wrapper img');
        const descriptionText = document.querySelector('.swiper-slide-active .swiper-slide-description__item span').innerHTML;
        const fullDescriptionEl = document.querySelector('.image-full__wrapper .swiper-slide-description__item span');

        fullWrapper.classList.toggle('open');
        fullImageEl.setAttribute('src', activeSlideImageSrc);
        fullDescriptionEl.innerHTML = descriptionText;
    }
});