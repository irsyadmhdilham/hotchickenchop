const swiperSocialProof = new Swiper('.swiper-social-proof', {
  pagination: {
    el: '.swiper-pagination'
  },
  pauseOnMouseEnter: true,
  autoplay: {
    delay: 4000
  },
  loop: true,
  breakpoints: {
    480: {
      slidesPerView: 1,
      spaceBetween: 50
    },
    800: {
      slidesPerView: 2,
      spaceBetween: 70
    },
    1200: {
      slidesPerView: 3,
      spaceBetween: 100
    }
  }
});

function socialProofNextButton() {
  swiperSocialProof.slideNext();
}

function socialProofPrevButton() {
  swiperSocialProof.slidePrev();
}

const swiperCustomerImage = new Swiper('.swiper-customer-image', {
  autoplay: {
    delay: 4000,
    loop: true
  }
});