<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/assets/main.css">
        <meta name="theme-color" content="<?= get_theme_mod('hd_primary_color', '#40AE49'); ?>">
        <title> <?php wp_title(''); ?> </title>
        <style>
            :root {
                --primary: <?php echo get_theme_mod('hd_primary_color', '#40AE49'); ?> !important;
            }
        </style>

        <?php gtm_get_head_script(); ?>
    </head>

    <body <?php body_class(); ?>>
