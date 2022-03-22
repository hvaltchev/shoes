<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<!-- WELCOME -->
<header data-jarallax data-speed=".8" style="background-image: url(img/blog-holder.jpg);">
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
          <div class="border bg-light bg-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/blog-holder.jpg); height: 480px;">
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
    <section class="py-7 py-md-9 bg-light bg-cover" style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/blog-holder.jpg); height: 350px;">
      <div class="container">
        
        <div class="row">
          <div class="eyebrow text-center">Lastest Drop</div>
        </div>

        <div class="row">
          <div class="shop-title text-center">Soulful of Rice</div>
        </div>

        <a href="/shop/">
          <div class="shop-home cta-button">Shop</div>
        </a>

      </div>
    </section>

    <!-- Blog Feature -->
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

        <div class="row justify-content-center bg-cover" style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/blog-holder.jpg); height: 350px;">
          <div class="col-12 col-md-8 col-lg-6 text-center featured-post">
            <div class="eyebrow">Featured</div>
            <div class="featured-title">Title of Post</div>
            <a href="#">
              <div class="cta-button center">Keep Reading</div>
            </a>
          </div>
        </div>

        <!-- Blog thumbnails-->
        <div class="row">
          <div class="col border bg-cover" style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/blog-holder.jpg); height: 480px;">
            <div class="col-12 col-md-8 col-lg-6 text-center blog-post-home center">
              <h3 class="blog-title-home">Title of Post</h3>
              <a href="#">
                <div class="cta-button center">Keep Reading</div>
              </a>
            </div>
          </div>
          <div class="col border bg-cover" style="background-image:linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url(img/blog-holder.jpg); height: 480px;">
            <div class="col-12 col-md-8 col-lg-6 text-center blog-post-home center">
              <h3 class="blog-title-home">Title of Post</h3>
              <a href="#">
                <div class="cta-button center">Keep Reading</div>
              </a>
            </div>
          </div>
        </div>

        <?php endwhile; ?>
	    <?php else : ?>

	    <?php get_template_part( 'inc/post-none' ); ?>

	    <?php endif; ?>

      </div>
    </section>


<?php get_footer(); ?>