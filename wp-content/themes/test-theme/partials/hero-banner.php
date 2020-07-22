<?php
    $hero_image_mobile_id = get_field('hero_background_image_mobile');
    $hero_image_id = get_field('hero_background_image');
    $hero_image_alt = get_post_meta($hero_image_id, '_wp_attachment_image_alt', true);
?>

<div class="hero-banner__body row flex-grow-1 position-relative">

    <picture>
        <source media="(max-width: 499px)" srcset="<?= wp_get_attachment_url ( $hero_image_mobile_id ) ?>">
        <source media="(min-width: 500px)" srcset="<?= wp_get_attachment_url ( $hero_image_id) ?>">
        <img class="hero-banner__image" src="<?= wp_get_attachment_url ( $hero_image_id ) ?>" alt="<?= $hero_image_alt ?>">
    </picture>

    <span class="icon icon--hamburger d-lg-none" data-toggle-nav="mobile-menu">
        <span></span>
    </span>

    <div class="mobile-nav" id="mobile-menu">
        <img class="logo logo--big" src="<?= wp_get_attachment_url ( get_theme_mod('hd_centered_logo') ); ?>" alt="Applover">
        <nav class="mobile-nav__nav">
            <?php
                wp_nav_menu( array(
                    'theme_location'  => 'header',
                ) );
            ?>
        </nav>
    </div>

    <div class="hero-banner__content col h-100 text-center d-flex flex-column justify-content-center justify-content-xl-start align-items-center pb-4 position-static">
        <img class="logo logo--big" src="<?= wp_get_attachment_url ( get_theme_mod('hd_centered_logo') ); ?>" alt="Applover">
        <hr class="divider">
        <div class="text-white font-secondary flex-xl-grow-1">
            <p class="hero-banner__title">
                <?php the_field('hero_banner_text-1'); ?>
            </p>
            <h1 class="hero-banner__title hero-banner__title--big font-weight-bold">
                <?php the_field('hero_banner_h1'); ?>
            </h1>
            <p class="hero-banner__title">
                <?php the_field('hero_banner_text-2'); ?>
            </p>
        </div>
        <span class="icon icon--mouse d-none d-xl-inline"></span>
    </div>

    <nav class="hero-banner__nav d-none d-lg-flex h-100">
        <?php
            wp_nav_menu( array(
                'theme_location'  => 'header',
            ) );
        ?>
    </nav>

</div>
