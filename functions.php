<?php
// include
require get_template_directory().'/include/setup.php';


// Hooks
add_action("wp_enqueue_scripts", "lc_theme_styles");
add_action("after_setup_theme", "lc_after_setup");