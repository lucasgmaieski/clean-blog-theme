<?php
function lc_theme_styles(){
    // wp_enqueue_style("bootstrap", get_template_directory_uri()."/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style("googlelora", "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,700;1,400;1,700&display=swap");
    wp_enqueue_style("googleopensans", "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800");
    
    wp_enqueue_style("cleanblog",  get_template_directory_uri()."/assets/css/style.min.css");
    wp_enqueue_script('bootstrap-min', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', '1.0', true);

    wp_enqueue_script('jquery-main', get_template_directory_uri() . '/assets/vendor/jquery/jquery-1.11.0.min.js', '1.0', true);
    
    wp_enqueue_script('js-main', get_template_directory_uri() . '/assets/js/scripts.min.js', wp_get_theme()->get( 'Version'));

}
function lc_after_setup(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post_thunbnails');
    
    register_nav_menu("primary", __('Primary Menu', 'clean-blog-theme'));

}