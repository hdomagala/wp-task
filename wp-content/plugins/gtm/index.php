<?php
/*
 * Plugin Name: Google Tag Manager (GTM)
 * Version: 1.0.0
 * Author: Hanna Domagała
 */

// Register settings
function gtm_register_settings() {
    add_option( 'gtm_managerID', '');
    register_setting( 'gtm_options_group', 'gtm_managerID');
}

// Register settings page
function gtm_register_options_page() {
    add_options_page('Google Tag Manager', 'Google Tag Manager', 'manage_options', 'gtm', 'gtm_options_page');
}

// Template for settings page
function gtm_options_page() {
?>
    <div>
        <form method="post" action="options.php">

            <h2>Google Tag Manager (GTM)</h2>


            <?php settings_fields( 'gtm_options_group' ); ?>

            <table class="form-table" role="presentation">
                <tbody>
                <tr>
                    <th scope="row">
                        <label for="gtm_managerID">Google Tag Manager ID</label>
                    </th>
                    <td>
                        <input name="gtm_managerID" type="text" id="gtm_managerID" value="<?php echo get_option('gtm_managerID'); ?>" class="regular-text">
                    </td>
                </tr>
                </tbody>
            </table>

            <?php submit_button(); ?>

        </form>
    </div>
<?php
}

// Get GTM head script
function gtm_get_head_script() {
    $gtm_ID = get_option('gtm_managerID');

    if ($gtm_ID): ?>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','<?= $gtm_ID ?>');</script>
        <!-- End Google Tag Manager -->
    <?php endif;
}

// Get GTM body script
function gtm_get_body_script() {
    $gtm_ID = get_option('gtm_managerID');

    if ($gtm_ID): ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm_ID ?>"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php endif;
}

// Action hooks
add_action( 'admin_init', 'gtm_register_settings' );
add_action('admin_menu', 'gtm_register_options_page');
