<?php get_header(); ?>

	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

<!-- HEADER -->
<header data-jarallax data-speed=".8" style="background-image: url(img/blog-holder.jpg);">
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white header-margin">Protraits</h1>
              <span class="sub-heading">Human faces are cool to see</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- GALLERY -->
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row gx-3" data-isotope>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/11.jpg" }'>
              <img class="img-fluid" src="img/11.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/16.jpg" }'>
              <img class="img-fluid" src="img/16.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/13.jpg" }'>
              <img class="img-fluid" src="img/13.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/15.jpg" }'>
              <img class="img-fluid" src="img/15.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/14.jpg" }'>
              <img class="img-fluid" src="img/14.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/18.jpg" }'>
              <img class="img-fluid" src="img/18.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/17.jpg" }'>
              <img class="img-fluid" src="img/17.jpg" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "img/12.jpg" }'>
              <img class="img-fluid" src="img/12.jpg" alt="...">
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

    <?php get_template_part( 'inc/sessions' ); ?>

    <?php get_footer(); ?>