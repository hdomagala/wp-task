<?php

abstract class HD_Color_Meta_Box
{
    public static function add()
    {
        $screens = ['articles'];
        foreach ($screens as $screen) {
            add_meta_box(
                'hd_color_box_id',
                'Circle color',
                [self::class, 'html'],
                $screen
            );
        }
    }

    public static function save($post_id)
    {
        if (array_key_exists('hd_color_picker_field', $_POST)) {
            update_post_meta(
                $post_id,
                '_hdcolor_meta_key',
                $_POST['hd_color_picker_field']
            );
        }
    }

    public static function html($post)
    {
        $value = get_post_meta($post->ID, '_hdcolor_meta_key', true);
        ?>
        <label for="hd_color_picker_field" class="f-bold">Pick circle icon color:</label>
        <input type="color" name="hd_color_picker_field" id="hd_color_picker_field" value="<?= $value ?>">
        <?php
    }
}
