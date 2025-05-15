<?php
function landing_security_first_assets() {
    // CSS
    wp_enqueue_style('landing-css', get_template_directory_uri() . '/assets/index-CR34PgfL.css');

    // JS
    wp_enqueue_script('landing-js', get_template_directory_uri() . '/assets/index-CWph2tFY.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'landing_security_first_assets');
