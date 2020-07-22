<section class="cta mt-5 mb-5 pt-4 pt-lg-5 overflow-hidden">

    <picture>
        <source media="(max-width: 599px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/bg-leaves-mobile.jpg">
        <source media="(min-width: 600px)" srcset="<?= get_template_directory_uri(); ?>/assets/images/bg-leaves.jpg">
        <img class="cta__background" src="<?= get_template_directory_uri(); ?>/assets/images/bg-leaves.jpg" alt="">
    </picture>

    <div class="cta__body container text-center">
        <img class="logo logo--medium" src="<?= wp_get_attachment_url ( get_theme_mod('hd_centered_logo') ); ?>" alt="Applover">
        <p class="mx-auto text-white mt-4 mb-4 mb-lg-5">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore.
        </p>
        <button class="btn btn-light font-weight-bold font-secondary">
            Learn more
        </button>
    </div>

</section>
