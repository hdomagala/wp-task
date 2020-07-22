<div class="ticker shadow row d-none d-lg-block bg-white">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-2">
                <img class="logo logo--small" src="<?= wp_get_attachment_url ( get_theme_mod('hd_left_logo') ); ?>" alt="Applover">
            </div>
            <div class="col-7 font-secondary text-uppercase font-weight-bold">
                <?php the_field('ticker_text'); ?>
            </div>
            <div class="col-3 font-secondary font-weight-light text-right">
                powered by applover.com
            </div>
        </div>
    </div>
</div>
