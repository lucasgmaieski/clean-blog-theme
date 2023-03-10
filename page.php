<?php get_header(); ?>

<?php if(have_posts()): ?>
    <?php the_post(); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('<?php echo get_template_directory_uri()."/assets/img/post-bg.jpg"; ?>')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="post-heading">
                    <h1> <?php the_title(); ?></h1>
                    <!-- verifica se a funão existe, se tem o plugin de subtitulo no tema  -->
                    <?php if(function_exists('the_subtitle')): ?>
                    <h2 class="subheading"><?php the_subtitle(); ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?php the_content(); ?>
        </div>
    </div>
    </div>
</article>

<hr>

<?php endif; ?>
<?php get_footer(); ?>