<?php get_header('light'); ?>

	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

<!-- ARTICLE -->
<article class="pt-10 pt-md-12">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 text-center">

          <!-- Preheading -->
          <h6 class="text-xs text-primary"><?php the_time('jS F Y'); ?> </h6>

          <!-- Heading -->
          <h1 class="display-2 mb-4"><?php the_title(); ?></h1>

          <!-- Subheading -->
          <p class="mb-6">
            Jennifer. About 30 years, it's a nice round number. It's my dad. Yeah, he's right here. He's a peeping tom. Dad.
          </p>

        </div>
      </div>
      <div class="row">
        <div class="col-12">

          <!-- Image -->
          <figure class="mb-6 text-center">
            <img class="img-fluid" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo 'src="url('. $url.');" alt="..."' ?>>
          </figure>

        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
          <?php the_content(' '); ?> 
        </div>
      </div>
    </div>
  </article>

  <section>
    <div class="container">
      <div class="mt-6 mt-md-9 mb-0 divider"></div>
    </div>
  </section>

  <?php endwhile; ?>
  <?php else : ?>

  <?php get_template_part( 'inc/post-none' ); ?>

  <?php endif; ?>

  <!-- Next/Previous Post-->
  <section class="router">
  <?php
	$previous = get_previous_post();
	$next = get_next_post();
  ?>
    <div class="container">
      <div class="row">

    <?php if ($previous != NULL) { ?>
          <div class="col-lg-6 col-sm-12 border bg-cover" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($previous->ID) ); echo 'style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.'); height: 250px;"' ?>>
            <a href="<?php echo get_permalink($previous->ID); ?>">
              <div class="col-12 col-md-8 col-lg-6 router-post">
                <span class="router-eyebrow">Previous Post</span>
                <h3 class="router-title"><?php echo esc_attr($previous->post_title); ?></h3>
              </div>
            </a>
          </div>
    
    <?php } else { ?>

        <div class="col-lg-6 col-sm-12 border bg-cover">
            <a href="<?php echo get_permalink($previous->ID); ?>">
              <div class="col-12 col-md-8 col-lg-6 router-post">
                <span class="router-eyebrow">First things first</span>
                <h3 class="router-title">Take it from the top</h3>
              </div>
            </a>
          </div>
    
    <?php } ?>

    <?php if ($next != NULL) { ?>

        <div class="col-lg-6 col-sm-12 border bg-cover" <?php $url = wp_get_attachment_url( get_post_thumbnail_id($next->ID) ); echo 'style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('. $url.'); height: 250px;"' ?>>
          <a href="<?php echo get_permalink($next->ID); ?>">
            <div class="col-12 col-md-8 col-lg-6 router-post align-right">
              <span class="router-eyebrow">Next Post</span>
              <h3 class="router-title"><?php echo esc_attr($next->post_title); ?></h3>
            </div>
          </a>
        </div>
        
    <?php } else { ?>

        <div class="col-lg-6 col-sm-12 border bg-cover">
          <a href="<?php echo get_permalink($next->ID); ?>">
            <div class="col-12 col-md-8 col-lg-6 router-post align-right">
              <span class="router-eyebrow">Last but not least</span>
              <h3 class="router-title">New stuff coming soon</h3>
            </div>
          </a>
        </div>

    <?php } ?>

      </div>
    </div>
  </section>

<?php get_footer(); ?>