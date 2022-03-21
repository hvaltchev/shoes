<?php get_header('light'); ?>

<!-- ARTICLE -->
<article class="pt-10 pt-md-12">
    <div class="container">
    
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>


      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 text-center">
          <!-- Heading -->
          <h2 class="mb-2">
            <?php the_title(); ?>
          </h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">

        <?php the_content(' '); ?> 

        </div>
      </div>

      <?php endwhile; ?>

      <?php endif; ?>

    </div>
  </article>

  <section>
    <div class="container">
      <div class="mt-6 mt-md-9 mb-0 divider"></div>
    </div>
  </section>

  <?php get_footer(); ?>