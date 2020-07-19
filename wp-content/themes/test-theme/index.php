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
            <picture>
                <source media="(max-width: 499px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/hero-banner-mobile.jpg">
                <source media="(min-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/hero-banner.jpg">
                <img class="hero-banner__image" src="<?= get_template_directory_uri(); ?>/assets/images/hero-banner.jpg" alt="Mountains and river">
            </picture>
            <div class="hero-banner__content col h-100 text-center d-flex flex-column justify-content-center justify-content-xl-start align-items-center pb-4 position-static">
                <img class="logo logo--big" src="<?= get_template_directory_uri(); ?>/assets/images/logo-centered.svg" alt="Applover">
                <hr class="divider">
                <div class="text-white flex-xl-grow-1">
                    <p class="h3">
                        Lorem ipsum dolor sit amet, consetetur
                    </p>
                    <p class="h2 font-weight-bold">
                        nonumy eirmod tempor invidunt ut labore et
                    </p>
                    <p class="h3">
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
                    <div class="col-3 font-secondary font-weight-light">
                        powered by applover.com
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

    </main>
    <footer>

    </footer>
    <script src="<?= get_template_directory_uri(); ?>/assets/main.js"></script>
</body>
</html>
