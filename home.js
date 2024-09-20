var splide = new Splide('.splide', {
  type: 'loop',
  direction: 'rtl',
  height: '22rem',
  autoWidth: true,
  speed: 600,
  padding: '1rem',
  pagination: !1,
  // focus: 'center',

  drag: 'free',
  autoScroll: {
    speed: 1,
  },
  breakpoints: {
    1280: {
      gap: 20,
      perPage: 4,
      autoHeight: true,
      padding: {
        left: 15,
        right: 15,
      }
    },
    1000: {
      gap: 40,
      perPage: 4,
      padding: {
        left: 20,
        right: 20,
      }
    },
    992: {
      gap: 40,
      perPage: 4,
    },
    600: {
      gap: 40,
      perPage: 2,
      height: "23rem",
    },
    557: {
      gap: 20,
      perPage: 1,
      height: "35rem",
      focus: 'center'
    }
  }




  // type: "fade",
  // direction: 'rtl',
  // perPage: 4,
  // // focus: !1,
  // perMove: 2,
  // gap: 20,
  // pagination: !1,
  // autoplay: !(0,
  // i.s2)(),
  // breakpoints: {
  //     1280: {
  //         gap: 15,
  //         perPage: 4,
  //         padding: {
  //             left: 50,
  //             right: 15
  //         }
  //     },
  //     1200: {
  //         gap: 15,
  //         perPage: 4,
  //         padding: {
  //             left: 50,
  //             right: 15
  //         }
  //     },
  //     992: {
  //         gap: 15,
  //         perPage: 3,
  //         padding: {
  //             left: 50,
  //             right: 15
  //         }
  //     },
  //     768: {
  //         gap: 15,
  //         perPage: 2,
  //         padding: {
  //             left: 50,
  //             right: 15
  //         }
  //     },
  //     557: {
  //         gap: 10,
  //         perPage: 1,
  //         padding: {
  //             left: "4rem",
  //             right: 15
  //         }
  //     }
  // }
});



splide.mount();