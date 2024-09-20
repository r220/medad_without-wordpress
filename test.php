<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <title>مداد | الرئيسية</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/png" href="assets/svg/midad_logo.svg" />

  <link rel="stylesheet" href="css/main.min.css" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link
    href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
"
    rel="stylesheet" />
  <link rel="stylesheet" href="home.css" />
</head>

<body>
  <!-- HEADER -->
  <header
    id="header"
    class="navbar navbar-expand-lg sticky-top navbar-dark py-3 px-5">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvas"
        aria-controls="offcanvas"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a
        class="btn text-white mx-2"
        style="font-size: x-large"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        href=""
        target="#"
        rel="noreferrer"
        aria-label="البحث">
        <i class="bi bi-search"></i>
      </a>
      <!--  -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav p-0 text-center">
          <li class="nav-item">
            <a
              class="nav-link active"
              aria-current="page"
              href="#"
              style="font-size: 1.25rem">الـرئـيـسيـــــة</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" style="font-size: 1.25rem">خــــــدمــــاتنـــــا</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#" style="font-size: 1.25rem">عنّـــــــــــــــــــــا</a>
          </li>
        </ul>
      </div>
      <!-- nav-logo -->
      <div class="me-auto">
        <a class="navbar-brand" href="#">
          <img src="assets/svg/midad_logo.svg" style="height: 3rem" alt="" />
        </a>
      </div>
    </div>
  </header>

  <!-- search modal -->
  <div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
    style="top: 75px">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="input-group input-group-lg">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="ما الذي تبحث عنه..؟"
                    aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-lg" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- offcanvas -->
  <div
    class="offcanvas offcanvas-end bg-secondary"
    data-bs-scroll="true"
    tabindex="-1"
    id="offcanvas"
    aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">
        Backdrop with scrolling
      </h5>
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
        aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <p>Try scrolling the rest of the page to see this option in action.</p>
    </div>
  </div>
  <!-- HERO -->
  <section id="hero">
    <div class="container py-5 px-2 text-center">
      <!-- IMAGE -->
      <div class="py-5 mb-5" style="margin-top: 6rem">
        <img src="assets/svg/midad_logo.svg" style="height: 9rem" alt="" />
        <p class="text-white" style="font-size: 1.4rem">
          تُعرز ربحك، تحقق نجاحك
        </p>
      </div>
      <!-- vendor | client -->
      <div
        class="two-options d-flex flex-wrap justify-content-evenly align-items-center text-white">
        <!-- col 1 -->
        <div
          class="homecol my-3 p-5 d-flex justify-content-center align-items-center flex-column col-12 col-md-6 col-lg-6 col-xl-6 bg-secondary bg-opacity-50 rounded-4">
          <h1
            class="mt-4"
            style="
                text-shadow: 5px 6px 5.3px rgba(0, 0, 0, 0.3);
                font-weight: 600;
              ">
            مؤجــر
          </h1>
          <p class="my-4">
            تبحث عن ادوات للإيجار؟
            <strong class="text-primary"> هنا نجاحك</strong>
          </p>
          <button
            class="btn mb-5 bg-primary text-white border-0 rounded-1"
            style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)">
            استكشف
          </button>
        </div>
        <!-- col 2 -->
        <div
          class="homecol my-3 p-5 d-flex justify-content-center align-items-center flex-column col-12 col-md-6 col-lg-6 col-xl-6 bg-secondary bg-opacity-50 rounded-4">
          <h1
            class="mt-4"
            style="
                text-shadow: 5px 6px 5.3px rgba(0, 0, 0, 0.3);
                font-weight: 600;
              ">
            مستأجر
          </h1>
          <p class="my-4">
            لديك ادوات تود عرضها للتأجير؟
            <strong class="text-primary">هنا ربحك</strong>
          </p>
          <button
            class="btn mb-5 bg-primary text-white border-0 rounded-1"
            style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25)">
            استكشف
          </button>
        </div>
        <!-- ----- -->
      </div>
    </div>
  </section>

  <section id="reviews" class="home-block home-block--bg">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div
            class="title text-primary title--x-large title--has-dash mb-30">
            اراء العملاء
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="splide">
            <div class="splide__arrows">
              <button
                class="splide__arrow splide__arrow--prev"
                type="button"
                aria-controls="splide02-track"
                aria-label="Previous slide">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40"
                  width="40"
                  height="40">
                  <path
                    d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg>
              </button>
              <button
                class="splide__arrow splide__arrow--next"
                type="button"
                aria-controls="splide02-track"
                aria-label="Next slide">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 40 40"
                  width="40"
                  height="40">
                  <path
                    d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path>
                </svg>
              </button>
            </div>
            <div class="splide__slider">
              <div class="splide__track">
                <ul class="splide__list">
                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">محمد</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>
                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">محسن</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">عبدالله</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">طالب</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">عبدالاله</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">محمد</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">حسين</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">ابراهيم</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>

                  <li class="splide__slide">
                    <div class="card">
                      <div class="img-wrapper">
                        <img
                          src="assets/svg/iconamoon_profile.svg"
                          class="d-block"
                          alt="..." />
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">امل</h5>
                        <p class="card-text">
                          موقع ممتاز ووفر لي جميع احتياجاتي بسهوله
                        </p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div class="footer_top">
        <div class="row">
          <div class="col-md-4 col-sm-12">
            <div class="footer_block">
              <div class="store-links">
                <div class="title text-primary title--has-dash mb-4">
                  روابط مهمة
                </div>
                <ul class="footer-list store-links-items">
                  <li><a href="#" target="_blank">تواصل معنا</a></li>
                  <li><a href="#" target="_blank">الشحن والتوصيل</a></li>
                  <li><a href="#" target="_blank">الشروط والأحكام</a></li>
                  <li>
                    <a href="#" target="_blank">الخصوصية وسرية المعلومات</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
            <div class="footer_block">
              <div class="store-about">
                <div class="title text-primary title--has-dash mb-4">
                  من نحن
                </div>
                <p>
                  منصة مداد متخصصة في ربط الشركات بمزودي المعدات، موفرة
                  تأجيراً مرناً وآمناً.
                </p>
              </div>
              <ul
                class="footer-list footer-list--row footer-list--social-links">
                <li>
                  <a
                    href="https://www.instagram.com/"
                    target="_blank"
                    rel="noreferrer"
                    aria-label="انستقرام">
                    <i class="bi bi-instagram"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="https://twitter.com/"
                    target="_blank"
                    rel="noreferrer"
                    aria-label="تويتر">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.snapchat.com/"
                    target="_blank"
                    rel="noreferrer"
                    aria-label="سناب شات">
                    <i class="bi bi-snapchat"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.tiktok.com/"
                    target="_blank"
                    rel="noreferrer"
                    aria-label="تيك توك">
                    <i class="bi bi-tiktok"></i>
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.youtube.com/"
                    target="_blank"
                    rel="noreferrer"
                    aria-label="يوتيوب">
                    <i class="bi bi-youtube"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 col-sm-12">
            <div class="footer_block">
              <div class="store-contact-info">
                <div class="title text-primary title--has-dash mb-4">
                  تواصل معنا
                </div>
                <ul class="footer-list">
                  <li>
                    <a href="#">
                      <i class="bi bi-whatsapp"></i>
                      <span class="text-unicode">+966500000000</span>
                    </a>
                  </li>
                  <li>
                    <a href="midad@oooo.com">
                      <i class="bi bi-envelope"></i>
                      <span class="text-unicode">midad@oooooo.com</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer_bottom bg-black">
      <div class="container">
        <p class="text-white m-0 text-center">
          الحقوق محفوظة | 2024
          <a
            href="#"
            class="hover:text-primary"
            target="_blank"
            rel="noreferrer">مداد</a>
        </p>
      </div>
    </div>
  </footer>

  <!-- javascript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
    integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"
    integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"
    integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"></script>
  <script src="home.js"></script>
</body>

</html>