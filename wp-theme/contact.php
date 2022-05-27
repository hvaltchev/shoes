<?php

/*
Template Name: Contact
*/

?>

<?php get_header('light'); ?>

<div class="spacer"></div>

<!-- CONTACT -->
<section class="py-7 py-md-9">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 text-center">
      
      <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <!-- Heading -->
        <h2 class="mb-2">
        <?php the_title(); ?>
        </h2>

        <!-- Subheading -->
        <p class="mb-6">
          Have a question? Looking to collab on a project? Send over an email!
        </p>

      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 center order-md-1">

      <?php the_content(' '); ?> 

      </div>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
    
  </div>
</section>
      
<script>
  document.getElementById("g100-name").setAttribute("placeholder","Full Name");
  document.getElementById("g100-email").setAttribute("placeholder","Email Address");
  document.getElementById("contact-form-comment-g100-message").setAttribute("placeholder","Message");
</script>

<?php get_footer(); ?>