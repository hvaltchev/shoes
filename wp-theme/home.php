<?php

/*
Template Name: Home
*/

$sticky = get_option( 'sticky_posts' );
if ( !empty( $sticky ) ) { 
    $args = array(
        'posts_per_page' => 1,
        'post__in'  => $sticky,
    );

    $query = new WP_Query( $args );
}

$home = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'post__not_in' => get_option( 'sticky_posts' ),
  );

  $loop = new WP_Query( $home );

?>

<?php get_header(); ?>

<!-- WELCOME -->
<header data-jarallax data-speed=".8" style="margin-top: -50px; background-image: url(<?php bloginfo('template_url'); ?>/img/header.jpg);">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
        <div class="container my-auto">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-1 text-white mb-4">
                Purpose Through Creative Distraction
              </h1>

              <!-- Subheading -->
              <p class="text-center mb-7 white">
                Hi there, I'm Mike Watford. <br>I'm a professional photographer and short form video creator based in Northern California.
              </p>

              <!-- Button -->
              <a class="main-button mb-7 mb-md-0" href="/about/">
                The Full Story
              </a>
            </div>
          </div>
        </div>
        
      </div>
    </header>

    <section>
      <div class="row g-0">
        <div class="col">
          <div class="border bg-light bg-cover youtube-bg">
            <div class="container">
              <div class="row youtube">
                <div class="col white">
                  <div class="thumb-title-home">The Youtube Channel</div>
                  <p>Videos on photography, sneakers, and creative indevours</p>
                    <a href="https://www.youtube.com/channel/UCvVv-RxIdEKAaLT1ilc6bLw">
                      <div class="col-sm-3 cta-button">Subscribe</div>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="border bg-light bg-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/blog-holder.jpg); height: 480px;">
            <div class="container">
              <div class="row align-self-end portfolio-home">
                <div class="col white">
                  <div class="thumb-title-home">The Portfolio</div>
                  <p>Portaits, landscape, and more</p>
                    <a href="/portfolio/">
                      <div class="col-sm-4 right cta-button">The Collection</div>
                    </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Shop Feature -->
    <section class="py-7 py-md-9 bg-light bg-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(<?php the_field('featured_image'); ?>); height: 350px;">
      <div class="container">
        
        <div class="row">
          <div class="eyebrow text-center">Lastest Drop</div>
        </div>

        <div class="row">
          <div class="shop-title text-center"><?php the_field('title'); ?></div>
        </div>

        <a href="<?php the_field('shop_link'); ?>">
          <div class="shop-home cta-button">Shop</div>
        </a>

      </div>
    </section>

    <section class="py-7">
      <div class="container">
        
        <div class="row g-0 blog-section-home">
          <div class="col latest-blog">
            <strong>Latest on the blog</strong>
          </div>
          <div class="col">
            <a href="/blog/">
              <div class="browse-post-home">Browse all Posts</div>
            </a>
          </div>
        </div>
 
        <!-- Blog Feature -->
        <div class="row">
        
        <?php if ( $query->have_posts() ) : ?>
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col justify-content-center bg-cover" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'style="height: 350px; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.');"' ?>>
                <div class="col-12 text-center featured-post">
                    <div class="eyebrow">Featured</div>
                    <div class="featured-title"><?php the_title(); ?></div>
                    <a href="<?php the_permalink(); ?>">
                    <div class="cta-button center">Keep Reading</div>
                    </a>
                </div>
            </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>

        </div>

        <!-- Blog recent-->
        <div class="row">
              
        <?php if ( $loop->have_posts() ) : ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
            <div class="col border bg-cover" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'style="height: 480px; background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.');"' ?>>
                <div class="col-12 col-md-8 col-lg-6 text-center blog-post-home center">
                    <h3 class="blog-title-home"><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>">
                        <div class="cta-button center">Keep Reading</div>
                    </a>
                </div>
            </div>

            <?php endwhile; ?>
          
        </div>

        <?php endif; ?>
        <?php wp_reset_query(); ?>

      </div>
    </section>


<?php get_footer(); ?>