<?php
    $footer_background_mobile_id = get_field('footer_background_image_mobile');
    $footer_background_image_id = get_field('footer_background_image');
    $footer_background_image_alt = get_post_meta($footer_background_image_id, '_wp_attachment_image_alt', true);
?>

<footer class="footer mt-5 mt-lg-0 position-relative overflow-hidden">

    <picture>
        <source media="(max-width: 599px)" srcset="<?= wp_get_attachment_url ( $footer_background_mobile_id ) ?>">
        <source media="(min-width: 600px)" srcset="<?= wp_get_attachment_url ( $footer_background_image_id ) ?>">
        <img class="footer__background" src="<?= wp_get_attachment_url ( $footer_background_image_id ) ?>" alt="<?= $footer_background_image_alt ?>">
    </picture>

    <div class="footer__body container">

        <div class="row">

            <div class="col col-12 col-lg-3">

                <img class="logo logo--black d-block d-lg-none mx-auto" src="<?= wp_get_attachment_url ( get_theme_mod('hd_centered_logo') ); ?>" alt="Applover">
                <img class="logo d-none d-lg-block " src="<?= wp_get_attachment_url ( get_theme_mod('hd_left_logo') ); ?>" alt="Applover">

                <p class="mt-4 px-2 px-lg-0 text-center text-lg-left font-weight-light font-small font-lg-base">
                    <?= get_field('footer_text') ?>
                </p>

                <ul class="socials list-inline px-2 px-lg-0 text-center text-lg-left">
                    <?php
                        $socials = array(
                            'linkedin'  => array( "url" => get_field('footer_linkedin_url'), "icon" => "fab fa-linkedin-in", "name" => "LinkedIn" ),
                            'facebook'  => array( "url" => get_field('footer_facebook_url'), "icon" => "fab fa-facebook-f", "name" => "Facebook" ),
                            'pinterest' => array( "url" => get_field('footer_pinterest_url'), "icon" => "fab fa-pinterest-p", "name" => "Pinterest" ),
                        );

                        foreach($socials as $social):
                    ?>

                    <li class="list-inline-item">
                        <a href="<?= $social["url"] ?>" class="socials__icon" target="_blank" rel="noopener">
                            <span class="<?= $social["icon"] ?> text-white">
                                <span class="sr-only">
                                    <?= $social["name"] ?>
                                </span>
                            </span>
                        </a>
                    </li>

                    <?php
                        endforeach;;
                    ?>
                </ul>

            </div>

            <div class="col col-12 col-lg-4 offset-lg-1">

                <nav class="footer__nav text-center text-lg-left mt-4 mt-lg-0">

                    <h3 class="font-weight-bolder font-small font-lg-base text-uppercase">
                        Menu
                    </h3>

                    <?php
                        wp_nav_menu( array(
                            'theme_location'  => 'footer',
                        ) );
                    ?>

                </nav>

            </div>

            <div class="col col-12 col-lg-3 offset-lg-1">

                <div class="text-center text-lg-left text-lg-left mt-5 mt-lg-0">

                    <h3 class="font-weight-bolder font-base text-uppercase">
                        Contact
                    </h3>

                    <p class="font-weight-light mt-3 mb-5 px-2 px-lg-0">
                        <?= get_field('footer_text') ?>
                    </p>

                    <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" viewBox="0 0 24 20">
                            <g transform="translate(-2 -7)">
                                <path fill="var(--primary)" d="M23.6,7H4.4A2.4,2.4,0,0,0,2,9.4V24.6A2.4,2.4,0,0,0,4.4,27H23.6A2.4,2.4,0,0,0,26,24.6V9.4A2.4,2.4,0,0,0,23.6,7ZM9.517,18.044l-4,5.2a.4.4,0,1,1-.634-.487l4-5.2a.4.4,0,1,1,.634.487Zm13.526,5.274a.4.4,0,0,1-.56-.074l-4-5.2a.4.4,0,1,1,.634-.487l4,5.2A.4.4,0,0,1,23.044,23.317Zm.032-12.828-8.8,8.4a.4.4,0,0,1-.552,0l-8.8-8.4a.4.4,0,1,1,.552-.579L14,18.047,22.524,9.91a.4.4,0,0,1,.552.579Z" transform="translate(0 0)"/>
                            </g>
                        </svg>

                        <span class="font-weight-bold ml-4 d-block d-lg-inline mt-3 mt-lg-0">
                                <a class="footer__contact-link" href="mailto:<?= get_field('contact_email') ?>"><?= get_field('contact_email') ?></a>
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
