<?php
/*
Template Name: Porfolio
Template Post Types: 
*/

$args = array(  
    'post_type' => 'portfolio',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'date',
   );

$loop = new WP_Query( $args );

$link = get_field('');

?>

<?php get_header(); ?>

 <!-- HEADER -->
 <header data-jarallax data-speed=".8" style="background-image: url(img/blog-holder.jpg);">
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white header-margin">The Portfolio</h1>
              <span class="sub-heading">Human faces are cool to see</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row g-2">
        
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <div class="col-6">
            <a href="<?php echo $link; ?>">
              <div class="p-3 border bg-cover thumb-height bg-black-50" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.');"' ?>>
                <div class="col-12 col-md-8 col-lg-6 text-center blog-post-home center">
                  <h3 class="blog-title-home"><?php the_field('title'); ?></h3>
                </div>
              </div>
            </a>
          </div>
          
          <?php endwhile; ?>

        </div>
      </div>
    </section>

    <?php get_template_part( 'inc/sessions' ); ?> 

    <?php wp_reset_postdata(); ?>

<?php get_footer(); ?>