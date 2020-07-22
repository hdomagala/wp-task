<section class="articles">

    <?php
        $articles_args = array(
            'post_type' => 'articles',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'ASC',
            'cat' => 'home',
        );

        $articles_loop = new WP_Query( $articles_args );
        $article_counter = 0;


        while ( $articles_loop->have_posts() ) : $articles_loop->the_post();

        $side_img_url = get_the_post_thumbnail_url($post->ID, 'article');
        $side_img_alt = get_post_meta($post->ID, '_wp_attachment_image_alt', true);

        $is_image_left_aligned = !($article_counter % 2);

        $image_column_classes = $is_image_left_aligned ? "col-lg-6 overflow-hidden" : "col-lg-6 offset-lg-6 overflow-hidden";
        $content_column_classes = $is_image_left_aligned ? "col-lg-6 offset-lg-6 pl-lg-5 align-self-center" : "col-lg-6 pr-lg-5 align-self-center";

        $circle_color = get_post_meta( $post->ID, '_hdcolor_meta_key', true )
    ?>

    <article class="article d-flex flex-column d-lg-block">
        <div class="article__image container-fluid px-0">
            <div class="row no-gutters">
                <div class="<?= $image_column_classes ?>">
                    <img src="<?= $side_img_url ?>" alt="<?= $side_img_alt ?>">
                </div>
            </div>
        </div>
        <div class="article__body container py-5 py-lg-1 px-4 px-lg-0 font-secondary">
            <div class="row">
                <div class="<?= $content_column_classes ?>">
                    <h3 class="article__title">
                        <span class="icon icon--circle"
                              style="border-color: <?= $circle_color ?>"
                        ></span>
                        <?= $post->post_title ?>
                    </h3>
                    <?= $post->post_content ?>
                </div>
            </div>
        </div>
    </article>

    <?php
        $article_counter++;
        endwhile;
        wp_reset_postdata();
    ?>

</section>
