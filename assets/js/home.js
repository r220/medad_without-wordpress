// REVIEWS splide
var splide_reviews = new Splide('#splide_reviews', {
  type: 'loop',
  direction: 'rtl',
  autoWidth: true,
  pagination: false,
  drag: 'free',
  autoplay: true,
  interval: 4000,
  speed: 600,
  gap: 20,
  perPage: 4,
  height: "21rem",
  focus: 4,
  padding: {
    left: 20,
    right: 40,
  },

  breakpoints: {
    1280: {
      gap: 20,
      perPage: 4,
      height: "21rem",
      focus: 4,
      padding: {
        left: 20,
        right: 20,
      },
    },
    1000: {
      gap: 20,
      perPage: 4,
      height: "21rem",
      focus: 4,
      padding: {
        left: 20,
        right: 20,
      },
    },
    992: {
      gap: 20,
      perPage: 3,
      height: "22rem",
      focus: 'center',
      padding: {
        left: 13,
        right: 13,
      }
    },
    768: {
      gap: 25,
      perPage: 2,
      height: "24rem",
      focus: 2,
      padding: {
        left: 30,
        right: 24,
      }
    },
    557: {
      gap: 20,
      perPage: 1,
      height: "35rem",
      focus: 'center'
    }
  }
});



splide_reviews.mount();

// PRODUCTS splide
var splide_popular_products = new Splide('#splide_popular_products', {
  type: 'loop',
  direction: 'rtl',
  autoWidth: true,
  pagination: false,
  drag: 'free',
  autoplay: true,
  interval: 4000,
  speed: 600,
  gap: 30,
  perPage: 3,
  height: "30rem",
  focus: 3,
  padding: {
    left: 30,
    right: 60,
  },

  breakpoints: {
    1280: {
      gap: 40,
      perPage: 3,
      height: "30rem",
      focus: 3,
    },
    1000: {
      gap: 40,
      perPage: 4,
      height: "28rem",
      focus: 4,
      padding: {
        left: 20,
        right: 20,
      },
    },
    992: {
      gap: 30,
      perPage: 2,
      height: "28rem",
      focus: 2,
      padding: {
        left: 70,
        right: 70,
      }
    },
    768: {
      gap: 25,
      perPage: 2,
      height: "28rem",
      focus: 2,
      padding: {
        left: 30,
        right: 24,
      }
    },
    600: {
      gap: 20,
      perPage: 1,
      height: "40rem",
      focus: 'center'
    }
  }
});

splide_popular_products.mount();


