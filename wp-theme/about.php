<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

    <!-- HEADER -->
    <header data-jarallax data-speed=".8" style="margin-top: -50px; background-image: url(<?php bloginfo('template_url'); ?>/img/about-me.jpg);">
        <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">
                <h1 class="display-6 fw-bold text-white">About Mike</h1>
                </div>
            </div>
            </div>
        </div>
    </header>

    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9 text-center">
          
          <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <!-- Heading -->
            <h2 class="mb-2">
              <?php the_field('heading'); ?>
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
              <?php the_field('sub-heading'); ?>
            </p>

          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6 order-md-2">

            <!-- Image -->
            <img class="img-fluid mw-md-120 clip-top-start" src="<?php bloginfo('template_directory'); ?>/img/about-sc.jpg" alt="About Soda and Cookies">

          </div>
          <div class="col-md-5 order-md-1">

            <!-- Text -->
            <p class="lead text-black">
            <?php the_field('lead-heading'); ?>
            </p>

            <!-- Text -->
            <p class="mb-6">
            <?php the_field('lead-content'); ?>
            </p>
          
            <?php endwhile; ?>

            <?php endif; ?>


          </div>
        </div>
      </div>
    </section>

    <?php get_template_part( 'inc/booking' ); ?>

<?php get_footer(); ?>