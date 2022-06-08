if (document.getElementById('heroFullScreen')) {
  // var galleryThumbs = new Swiper('#hero-swiperhome-description', {
  //   slidesPerView: 1.5,
  //   watchSlidesVisibility: true,
  //   watchSlidesProgress: true,
  //   spaceBetween: 0,
  //   breakpoints: {
  //     768: {
  //       slidesPerView: 3
  //     },
  //     1200: {
  //       slidesPerView: 5
  //     },
  //     1024: {
  //       slidesPerView: 5
  //     }
  //   }
  // })

  var galleryTop = new Swiper('#heroFullScreen', {
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
