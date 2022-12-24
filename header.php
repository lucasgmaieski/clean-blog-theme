<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <?php wp_head(); ?>

  </head>

  <body>

    <!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-dark fixed-top" id="mainNav" >
  <div class="container">

  <?php  if(has_custom_logo()){
    the_custom_logo();
  }
  
  ?>

    <a class="navbar-brand" href="#">Start Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <?php 
    if(has_nav_menu('primary')){
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'fallback_cb' => false,
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'menu_class' => 'navbar-nav mb-2 mb-lg-0'
        ));
    }
    ?>
    
  </div>
</nav>