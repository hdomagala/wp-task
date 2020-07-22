<?php
    $cta_bg_image_mobile_id = get_field('cta_background_image_mobile');
    $cta_bg_image_id = get_field('cta_background_image');
    $cta_image_alt = get_post_meta($cta_bg_image_id, '_wp_attachment_image_alt', true);
?>

<section class="cta mt-5 mb-5 pt-4 pt-lg-5 overflow-hidden" id="section3">

    <h2 class="sr-only">
        <?= get_field('cta_title') ?>
    </h2>

    <picture>
        <source media="(max-width: 599px)" srcset="<?= wp_get_attachment_url ( $cta_bg_image_mobile_id ) ?>">
        <source media="(min-width: 600px)" srcset="<?= wp_get_attachment_url ( $cta_bg_image_id ) ?>">
        <img class="cta__background" src="<?= wp_get_attachment_url ( $cta_bg_image_id ) ?>" alt="<?= $cta_image_alt ?>">
    </picture>

    <div class="cta__body container text-center">
        <img class="logo logo--medium" src="<?= wp_get_attachment_url ( get_theme_mod('hd_centered_logo') ); ?>" alt="Applover">
        <p class="mx-auto text-white mt-4 mb-4 mb-lg-5">
            <?= get_field('cta_text_content') ?>
        </p>

        <?php
            $action_url = get_field('cta_button_url');
            if($action_url):
        ?>

        <a href="<?= $action_url ?>" class="btn btn-light font-weight-bold font-secondary">
            Learn more
        </a>

        <?php
            endif;
        ?>
    </div>

</section>
