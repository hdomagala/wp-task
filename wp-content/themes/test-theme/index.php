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
        <div class="hero-banner__content row flex-grow-1">
            <picture>
                <source media="(max-width: 499px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/hero-banner-mobile.jpg">
                <source media="(min-width: 500px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/hero-banner.jpg">
                <img class="hero-banner__image" src="<?= get_template_directory_uri(); ?>/assets/images/hero-banner.jpg" alt="Mountains and river">
            </picture>
            <div class="col h-100 text-center d-flex flex-column justify-content-center justify-content-xl-start align-items-center pb-4">
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
        </div>
        <div class="ticker shadow row d-none d-xl-block bg-white">
            <div class="container py-3">
                <div class="row align-items-center">
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
</body>
</html>
