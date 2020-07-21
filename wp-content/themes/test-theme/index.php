<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/main.css">
    <title>Applover Test Task</title>
</head>
<body>
    <header class="hero-banner container-fluid d-flex flex-column vh-100">

        <div class="hero-banner__body row flex-grow-1 position-relative">

            <picture>
                <source media="(max-width: 499px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/hero-banner-mobile.jpg">
                <source media="(min-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/hero-banner.jpg">
                <img class="hero-banner__image" src="<?= get_template_directory_uri(); ?>/assets/images/hero-banner.jpg" alt="Mountains and river">
            </picture>

            <span class="icon icon--hamburger d-lg-none" data-toggle-nav="mobile-menu">
                <span></span>
            </span>

            <div class="mobile-nav" id="mobile-menu">
                <img class="logo logo--big" src="<?= get_template_directory_uri(); ?>/assets/images/logo-centered.svg" alt="Applover">
                <nav class="mobile-nav__nav">
                    <ul>
                        <li><a class="text-white" href="#section1">Section 1</a></li>
                        <li><a class="text-white" href="#section2">Section 2</a></li>
                        <li><a class="text-white" href="#section3">Section 3</a></li>
                    </ul>
                </nav>
            </div>

            <div class="hero-banner__content col h-100 text-center d-flex flex-column justify-content-center justify-content-xl-start align-items-center pb-4 position-static">
                <img class="logo logo--big" src="<?= get_template_directory_uri(); ?>/assets/images/logo-centered.svg" alt="Applover">
                <hr class="divider">
                <div class="text-white font-secondary flex-xl-grow-1">
                    <p class="hero-banner__title">
                        Lorem ipsum dolor sit amet, consetetur
                    </p>
                    <p class="hero-banner__title hero-banner__title--big font-weight-bold">
                        nonumy eirmod tempor invidunt ut labore et
                    </p>
                    <p class="hero-banner__title">
                        aliquyam erat, sed diam voluptua.
                    </p>
                </div>
                <span class="icon icon--mouse d-none d-xl-inline"></span>
            </div>

            <nav class="hero-banner__nav d-none d-lg-flex h-100">
                <ul>
                    <li><a class="text-white" href="#section1">Section 1</a></li>
                    <li><a class="text-white" href="#section2">Section 2</a></li>
                    <li><a class="text-white" href="#section3">Section 3</a></li>
                </ul>
            </nav>

        </div>

        <div class="ticker shadow row d-none d-lg-block bg-white">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-2">
                        <img class="logo" src="<?= get_template_directory_uri(); ?>/assets/images/logo-left.svg" alt="Applover">
                    </div>
                    <div class="col-7 font-secondary text-uppercase font-weight-bold">
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </div>
                    <div class="col-3 font-secondary font-weight-light text-right">
                        powered by applover.com
                    </div>
                </div>
            </div>
        </div>

    </header>

    <main class="py-4 pt-lg-5 mt-lg-5">

        <section class="articles">

            <article class="article d-flex flex-column d-lg-block">
                <div class="article__image container-fluid px-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6 overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/articles/1.jpg" alt="Mountains">
                        </div>
                    </div>
                </div>
                <div class="article__body container py-5 py-lg-1 px-4 px-lg-0 font-secondary">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 pl-lg-5 align-self-center">
                            <h3 class="article__title">
                                <span class="icon icon--circle"></span>
                                Lorem ipsum
                            </h3>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <strong>At vero eos et accusam et justo duo dolores et ea rebum.</strong> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        </div>
                    </div>
                </div>
            </article>

            <article class="article d-flex flex-column d-lg-block">
                <div class="article__image container-fluid px-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6 offset-lg-6 overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/articles/2.jpg" alt="Mountains">
                        </div>
                    </div>
                </div>
                <div class="article__body container py-5 py-lg-1 px-4 px-lg-0 font-secondary">
                    <div class="row">
                        <div class="col-lg-6 pr-lg-5 align-self-center">
                            <h3 class="article__title">
                                <span class="icon icon--circle"></span>
                                Lorem ipsum
                            </h3>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <strong>At vero eos et accusam et justo duo dolores et ea rebum.</strong> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        </div>
                    </div>
                </div>
            </article>

            <article class="article d-flex flex-column d-lg-block">
                <div class="article__image container-fluid px-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6 overflow-hidden">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/articles/3.jpg" alt="Mountains">
                        </div>
                    </div>
                </div>
                <div class="article__body container py-5 py-lg-1 px-4 px-lg-0 font-secondary">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-6 pl-lg-5 align-self-center">
                            <h3 class="article__title">
                                <span class="icon icon--circle"></span>
                                Lorem ipsum
                            </h3>
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. <strong>At vero eos et accusam et justo duo dolores et ea rebum.</strong> Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                        </div>
                    </div>
                </div>
            </article>

        </section>

        <section class="gallery mb-lg-5">

            <header class="container pt-5 mt-5 pb-4 px-4 px-lg-0">
                <h2 class="gallery__title text-uppercase font-weight-bolder text-center">Section 2</h2>
                <hr class="separator separator--with-circle">
            </header>

            <div class="container mt-5 px-4 px-lg-0">
                <div class="row no-gutters">
                    <div class="col-6 col-md-4 col-lg-2">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 d-none d-lg-block">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 d-none d-lg-block">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 d-none d-lg-block">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 d-none d-lg-block">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/1.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 d-none d-lg-block">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/2.jpg" alt="Mountains">
                    </div>
                    <div class="col-6 col-md-4 col-lg-2 d-none d-lg-block">
                        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/images/gallery/3.jpg" alt="Mountains">
                    </div>
                </div>
            </div>

        </section>

        <section class="cta mt-5 mb-5 pt-4 pt-lg-5 overflow-hidden">

            <picture>
                <source media="(max-width: 599px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/bg-leaves-mobile.jpg">
                <source media="(min-width: 600px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/bg-leaves.jpg">
                <img class="cta__background" src="<?= get_template_directory_uri(); ?>/assets/images/bg-leaves.jpg" alt="">
            </picture>

            <div class="cta__body container text-center">
                <img class="logo" src="<?= get_template_directory_uri(); ?>/assets/images/logo-centered.svg" alt="Applover">
                <p class="mx-auto text-white mt-4 mb-4 mb-lg-5">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.
                </p>
                <button class="btn btn-light font-weight-bold font-secondary">
                    Learn more
                </button>
            </div>

        </section>

    </main>

    <footer class="footer mt-5 mt-lg-0 position-relative overflow-hidden">

        <picture>
            <source media="(max-width: 599px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/bg-footer-mobile.jpg">
            <source media="(min-width: 600px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/bg-footer.jpg">
            <img class="footer__background" src="<?= get_template_directory_uri(); ?>/assets/images/bg-footer.jpg" alt="">
        </picture>

        <div class="footer__body container">

            <div class="row">

                <div class="col col-12 col-lg-3">

                    <img class="logo logo--black d-block d-lg-none mx-auto" src="<?= get_template_directory_uri(); ?>/assets/images/logo-centered.svg" alt="Applover">
                    <img class="logo d-none d-lg-block " src="<?= get_template_directory_uri(); ?>/assets/images/logo-left.svg" alt="Applover">

                    <p class="mt-4 px-2 px-lg-0 text-center text-lg-left font-weight-light font-small font-lg-base">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
                    </p>

                    <ul class="socials list-inline px-2 px-lg-0 text-center text-lg-left">
                        <li class="list-inline-item">
                            <a href="" class="socials__icon">
                                <span class="fab fa-facebook-f text-white"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="socials__icon">
                                <span class="fab fa-facebook-f text-white"></span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="" class="socials__icon">
                                <span class="fab fa-facebook-f text-white"></span>
                            </a>
                        </li>
                    </ul>

                </div>

                <div class="col col-12 col-lg-4 offset-lg-1">

                    <nav class="footer__nav text-center text-lg-left mt-4 mt-lg-0">

                        <h3 class="font-weight-bolder font-small font-lg-base text-uppercase">
                            Menu
                        </h3>

                        <ul>
                            <li>
                                <a href="#">Section 1</a>
                            </li>
                            <li>
                                <a href="#">Section 1</a>
                            </li>
                            <li>
                                <a href="#">Section 1</a>
                            </li>
                            <li>
                                <a href="#">Section 1</a>
                            </li>
                            <li>
                                <a href="#">Section 1</a>
                            </li>
                            <li>
                                <a href="#">Section 1</a>
                            </li>
                        </ul>

                    </nav>

                </div>

                <div class="col col-12 col-lg-3 offset-lg-1">

                    <div class="text-center text-lg-left text-lg-left mt-5 mt-lg-0">

                        <h3 class="font-weight-bolder font-base text-uppercase">
                            Contact
                        </h3>

                        <p class="font-weight-light mt-3 mb-5 px-2 px-lg-0">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        </p>

                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20">
                                <g transform="translate(-2 -7)">
                                    <path fill="var(--primary)" d="M23.6,7H4.4A2.4,2.4,0,0,0,2,9.4V24.6A2.4,2.4,0,0,0,4.4,27H23.6A2.4,2.4,0,0,0,26,24.6V9.4A2.4,2.4,0,0,0,23.6,7ZM9.517,18.044l-4,5.2a.4.4,0,1,1-.634-.487l4-5.2a.4.4,0,1,1,.634.487Zm13.526,5.274a.4.4,0,0,1-.56-.074l-4-5.2a.4.4,0,1,1,.634-.487l4,5.2A.4.4,0,0,1,23.044,23.317Zm.032-12.828-8.8,8.4a.4.4,0,0,1-.552,0l-8.8-8.4a.4.4,0,1,1,.552-.579L14,18.047,22.524,9.91a.4.4,0,0,1,.552.579Z" transform="translate(0 0)"/>
                                </g>
                            </svg>

                            <span class="font-weight-bold ml-4">
                                <a class="text-black" href="mailto:loremipsum@gmail.com">loremipsum@gmail.com</a>
                            </span>
                        </p>

                    </div>

                    <p class="text-white px-2 mt-4 text-center d-lg-none">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                    </p>

                    <p class="text-white font-small font-secondary mt-5 text-center d-lg-none">
                        powered by applover.com
                    </p>

                </div>

            </div>

        </div>

    </footer>

    <script src="<?= get_template_directory_uri(); ?>/assets/main.js"></script>
</body>
</html>
