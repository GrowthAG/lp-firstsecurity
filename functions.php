<?php
function load_landing_assets() {
  if (is_page_template('landing-page.php')) {
    wp_enqueue_style('landing-css', get_template_directory_uri() . '/assets/index-CR34PgfL.css', array(), '1.0');
    wp_enqueue_script('landing-js', get_template_directory_uri() . '/assets/index-CWph2tFY.js', array(), null, true);
  }
}
add_action('wp_enqueue_scripts', 'load_landing_assets');
