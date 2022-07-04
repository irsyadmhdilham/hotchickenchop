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
      slidesPerView: 2,
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

const tabletSize = window.matchMedia('(max-width: 1024px)');
if (tabletSize.matches) {
  const merekaSuka = document.getElementById('hcc-mereka-semua-suka');
  merekaSuka.innerHTML = 'Mereka semua <span>suka makanan kami</span>';
}