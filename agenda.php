<?php
/*
    Template Name: Agenda
*/
?>
<?php get_header(); ?>

    <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri().'/assets/img/home-bg.jpg'?>')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1> <?php bloginfo('name') ?></h1>
              <span class="subheading"> <?php bloginfo('description') ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            
        <?php echo do_shortcode( '[events_calendar long_events=0 ]' ); ?>
      <?php echo do_shortcode( '[events_list_grouped limit=5 pagination=1]' ); ?>
            
        </div>
      </div>
    </div>

    <hr>

<?php get_footer(); ?>