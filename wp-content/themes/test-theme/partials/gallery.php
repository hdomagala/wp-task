<section class="gallery mb-lg-5">

    <header class="container pt-5 mt-5 pb-4 px-4 px-lg-0">
        <h2 class="gallery__title text-uppercase font-weight-bolder text-center">
            <?= get_field('gallery_section_title') ?>
        </h2>
        <hr class="separator separator--with-circle">
    </header>

    <div class="container mt-5 px-4 px-lg-0">
        <div class="row no-gutters">
            <?php
            $gallery_images = get_field('gallery_images');

            foreach ($gallery_images as $i=>$image):
                if ($i > 11) {
                    break;
                }
                $image_src = get_the_post_thumbnail_url($image->ID, 'medium');
                $image_alt = get_post_meta($hero_image_id, '_wp_attachment_image_alt', true);
                ?>
                <div class="col-6 col-md-4 col-lg-2 <?= $i > 7 ? "d-none d-lg-block" : "" ?>">
                    <img class="w-100" src="<?= $image_src ?>" alt="<?= $image_alt  ?>">
                </div>
            <?php
                endforeach;
            ?>
        </div>
    </div>

</section>
