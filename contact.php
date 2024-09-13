<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تواصل معنا | مداد</title>
    <?php require 'head.php'; ?>
</head>

<body>
    <?php require 'header.php'; ?>
    <section id="reviews" class="home-block home-block--bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title text-primary title--x-large title--has-dash mb-30">اراء العملاء</div>
                </div>
                <div class="col-sm-12"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <p></p>
                </div>
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>
    <?php require 'script.php'; ?>
</body>

</html>





<nav
      id="header"
      class="navbar navbar-expand-lg sticky-top navbar-dark bg-black py-1 py-1 m-3 rounded-4"
      style="
        display: flex;
        position: fixed;
        width: calc(100% - 2rem);
        top: 0;
        z-index: 9999;
        /* height: 4.5rem; */
        align-items: center;
      "
    >
      <div class="container px-4 py-2">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvas"
          aria-controls="offcanvas"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <!--  -->
        <a
          class="btn text-white"
          style="font-size: x-large"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
          href=""
          target="#"
          rel="noreferrer"
          aria-label="البحث"
        >
          <i class="bi bi-search"></i>
        </a>
        <!--  -->
        <div class="dropdown">
          <a
            class="text-white"
            style="font-size: 24px"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
          >
            <i class="bi bi-cart-fill"></i>
          </a>
          <ul class="dropdown-menu bg-black" style="direction: rtl">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
        <!--  -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav p-0 text-center">
            <li class="nav-item">
              <a
                class="nav-link active"
                aria-current="page"
                href="#"
                style="font-size: 1.25rem"
                >الـرئـيـسيـــــة</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" style="font-size: 1.25rem"
                >خــــــدمــــاتنـــــا</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#" style="font-size: 1.25rem"
                >عنّـــــــــــــــــــــا</a
              >
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
    </nav>
