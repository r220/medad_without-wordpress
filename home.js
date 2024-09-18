// $(document).ready(function () {
//   var owl = $(".owl-carousel");
//   owl.owlCarousel({
//     rtl: true,
//     // loop: true,
//     center: true,
//     margin: 0,
//     nav: true,
//     autoPlay: true,
//     responsive: {
//       0: { items: 1 },
//       600: { items: 3 },
//       1000: { items: 4 },
//     },
//   });
// });


var splide = new Splide('.splide', {
  perPage: 4,
  perMove: 4,
  direction: 'rtl',
  gap: 20,
  height: '20rem',
  focus: 'center',
  pagination: !1,
  autoWidth: true,
  breakpoints: {
    640: {
      perPage: 2,
      // gap: '2rem',
      // height : '6rem',
    },
    480: {
      perPage: 1,
      // gap: '3rem',
      // height : '6rem',
    },
  },

    breakpoints: {
      1280: {
          gap: 15,
          perPage: 4,
          padding: {
              left: 20,
              right: 20,
          }
      },
      1200: {
          gap: 15,
          perPage: 4,
          padding: {
            left: 20,
            right: 20,
        }
      },
      992: {
          gap: 30,
          perPage: 3,
          // padding: {
          //     left: 50,
          //     right: 15
          // }
      },
      768: {
          // gap: 15,
          perPage: 3,
          padding: {
              left: 50,
              right: 15
          }
      },
      557: {
          gap: 10,
          perPage: 1,
          height: "24rem",
          padding: {
              left: "4rem",
              right: 15
          }
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