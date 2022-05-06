<?php

/*
Template Name: Presets
*/

?>

<?php get_header('light'); ?>

<!-- ARTICLE -->
<article class="pt-10 pt-md-12 base-layer">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">

            <!-- Preheading -->
            <h6 class="text-xs text-primary">
              Lightroom Preset
            </h6>

            <!-- Heading -->
            <h1 class="display-2 mb-4">
              Base Layer
            </h1>

            <a href="<?php the_field('preset_url'); ?>">
              <div class="download">Download</div>
            </a>

          </div>

          <div class="col-lg-6">
            <p>
              Using other presets I found the one-click solution does not always work as advertisted. I always found myself doing heavy adjustments before getting to something I enjoyed. 
              <br><br>
              Along the way my process turned into steps or layers.
              <br><br>
              Base Layer, as the name implies sets a foundation for your editing process. Apply this as a starting point then continue with your workflow.
            </p>

          </div>
        </div>

        <div class="spacer"></div>

        <!-- Slider -->
        <div class="container slider">

          <div id="before-after-slider">
            <div id="before-image">
              <img src="<?php bloginfo('template_url'); ?>/img/before.jpg" alt="before"/>
            </div>
          
            <div id="after-image">
              <img src="<?php bloginfo('template_url'); ?>/img/after.jpg" alt="After"/>
            </div>
        
            <div id="resizer"></div>
          
         </div>
        </div>  
        <!-- Slider -->

        
          <div class="container">
            <div class="row gx-3" data-isotope>
              
              <!-- Item -->
              <div class="col-6 col-sm-6 col-md-4">
                <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php bloginfo('template_url'); ?>/img/sneakers-bl.jpg" }'>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/sneakers-bl.jpg" alt="...">
                </a>
              </div>
    
               <!-- Item -->
               <div class="col-6 col-sm-6 col-md-4">
                <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php bloginfo('template_url'); ?>/img/city-bl.jpg" }'>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/city-bl.jpg" alt="...">
                </a>
              </div>

              <!-- Item -->
              <div class="col-6 col-sm-6 col-md-4">
                <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "<?php bloginfo('template_url'); ?>/img/flower-bl.jpg" }'>
                  <img class="img-fluid" src="<?php bloginfo('template_url'); ?>/img/flower-bl.jpg" alt="...">
                </a>
              </div>
    
            </div>
          </div>
        

        <div class="row">
          <div class="col-12">
            <div class="accordion-body">
              <div class="accordion">
                <hr>
                <div class="container">
                  <div class="label">Install Instructions</div>
                    <div class="content">
                      Download the file to your desktop computer (not to your phone).
                      <br>
                      Open Lightroom and go to the Presets section. 
                      <br>
                      Click on File > Import Profiles & Presets.
                      <br>
                      Select the preset file(s) and click Import. → Selecting the preset(s) file.
                      <br>
                      Restart Lightroom and your preset(s) will now be listed in the Presets section.
                    </div>
                </div>
                <hr>
                <div class="container">
                  <div class="label">Mobile Setup</div>
                  <div class="content">
                    How do I get these to work on LR CC Mobile? <br>You'll need to install the presets on your desktop version of Lightroom CC FIRST,  <br>then they will auto-sync into your Lightroom CC Mobile App.
                  </div>
                </div>
                <hr>

              </div>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-12 text-center">Presets are not to be shared or resold in any manner.</div>
        </div>

      </div>
    </article>

<?php get_footer('presets'); ?>