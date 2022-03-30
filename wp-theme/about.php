<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

    <!-- HEADER -->
    <header data-jarallax data-speed=".8" style="background-image: url(img/blog-holder.jpg);">
        <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-6 text-center">
                <h1 class="display-6 fw-bold text-white">About Me</h1>
                </div>
            </div>
            </div>
        </div>
    </header>

    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">SODA &amp; COOKIES</h2>

            <!-- Subheading -->
            <p class="mb-6">
            This is about creative nostalgia. Going to the corner store as a kid this was my staple. My lunch money would never be used for actual food. Instead it would be used to buy a sprite and whatever the option of grandma's cookies that were available. I would find a spot alone to draw, jot down ideas and just have my head in the clouds..

As an adult, holding that mentality can be difficult. A way to catch my inspiration and get into a creative flow again was to give myself this site. A medium for my creative outlet and acting design journal. Hoping to bring back a spark of those carefree days.
            </p>

          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6 order-md-2">

            <!-- Image -->
            <img class="img-fluid mw-md-120 clip-top-start" src="<?php bloginfo('template_directory'); ?>/img/blog-holder.jpg" alt="...">

          </div>
          <div class="col-md-5 order-md-1">

            <!-- Text -->
            <p class="lead text-black">
              Mike Watford
            </p>

            <!-- Text -->
            <p class="mb-6">
            Pixel pusher from the east coast turned developer in the west coast. For five years I did freelance photography ran my own apparel company before making my way to silicon valley.
            </p>

          </div>
        </div>
      </div>
    </section>

    <?php get_template_part( 'inc/sessions' ); ?>

<?php get_footer(); ?>