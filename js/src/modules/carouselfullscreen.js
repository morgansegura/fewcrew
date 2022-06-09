if (document.getElementById('carouselFullScreen')) {
  var galleryTop = new Swiper('#carouselFullScreen', {
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    spaceBetween: 0,
    // preloadImages: true,
    // lazy: true,
    // thumbs: {
    //   swiper: galleryThumbs
    // },
    slidesPerView: 1,
    autoplay: {
      delay: 15000
      // disableOnInteraction: true
    },
    breakpoints: {
      320: {
        pagination: {
          el: '.swiper-pagination',
          clickable: true
        }
      }
    }
  })
}
