$(document).ready(function () {
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      rtl: true,
      // loop: true,
      center: true,
      margin: 20,
      nav: true,
      autoPlay: true,
      responsive: {
        0: { items: 1 },
        600: { items: 3 },
        1000: { items: 4 },
      },
    });
  });
