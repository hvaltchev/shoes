<?php get_header(); ?>

	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

    <!-- HEADER --> 
    <header data-jarallax data-speed=".8" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'style="margin-top: -50px; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.');"' ?>>
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white header-margin"><?php the_title(); ?></h1>
              <span class="sub-heading"><?php the_field('sub-heading'); ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- GALLERY -->
    <!-- GALLERY -->
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row gx-3" data-isotope>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php the_field('gallery_1'); ?>" }'>
              <img class="img-fluid" src="<?php the_field('gallery_1'); ?>" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php the_field('gallery_2'); ?>" }'>
              <img class="img-fluid" src="<?php the_field('gallery_2'); ?>" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php the_field('gallery_3'); ?>" }'>
              <img class="img-fluid" src="<?php the_field('gallery_3'); ?>" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php the_field('gallery_4'); ?>" }'>
              <img class="img-fluid" src="<?php the_field('gallery_4'); ?>" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php the_field('gallery_5'); ?>" }'>
              <img class="img-fluid" src="<?php the_field('gallery_5'); ?>" alt="...">
            </a>

          </div>
          
        </div>
      </div>
    </section>

    <?php endwhile; ?>

    <?php else : ?>

    <?php get_template_part( 'inc/post-none' ); ?>

    <?php endif; ?>

    <section>
      <div class="container">
        <div class="mt-6 mt-md-9 mb-0 divider"></div>
      </div>
    </section>

    <?php get_template_part( 'inc/booking' ); ?>

    <?php get_footer(); ?>