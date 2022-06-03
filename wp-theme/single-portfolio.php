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
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row gx-3" data-isotope>
        
        <?php
        if ( get_post_gallery() ) {

            $gallery        = get_post_gallery( get_the_ID(), false );
            $galleryIDS     = $gallery['ids'];
            $pieces         = explode(",", $galleryIDS);

            foreach ($pieces as $key => $value ) { 

                $image_medium   = wp_get_attachment_image_src( $value, 'medium'); 
                $image_full     = wp_get_attachment_image_src( $value, 'full'); 
            ?>

            <div class="col-6 col-sm-6 col-md-4">
                <!-- Item -->
                <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php echo $image_full[0] ?>" }'>
                    <img class="img-fluid" src="<?php echo $image_full[0] ?>" alt="...">
                </a>
            </div>
            <?php 
            }
        }
        ?>

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