<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="Description" content="SODA & COOKIES is about finding purpose through creative distraction. Follow photographer Mike Watford explore the creative journey." />
    <meta name="author" content="Mike Watford">
    <meta property="og:title" content="SODA & COOKIES" />
    <meta property="og:description" content="SODA & COOKIES is about finding purpose through creative distraction. Follow photographer Mike Watford explore the creative journey." />
    <meta property="og:url" content="https://www.sodaandcookies.com/" />
    <meta property="og:image" content="https://www.sodaandcookies.com/images/og.png" />
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="SODA & COOKIES" />
    <meta property="og:type" content="website" />
    <meta name="twitter:site" content="@bodegastaples" />
    <meta name="twitter:card" content="summary_large_image" />
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/site.webmanifest">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon" />
    <meta name="theme-color" content="#ffffff">
    
    <!-- Libs CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/theme.bundle.css" />
    <?php wp_head(); ?>
    
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400&family=Mulish:ital,wght@0,300;1,300&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    
    <!-- Title -->
    <title><?php wp_title(''); ?><?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?></title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
      <div class="container">
    
        <!-- Navbar brand (mobile) -->
        <a class="navbar-brand d-lg-none" href="/home">
          <div class="title">
            <div class="soda">soda</div> 
            <div class="amp">&amp;</div> 
            <div class="clear"></div>
            <div class="cookies">cookies</div>
          </div>
        </a>
    
        <!-- Navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog/">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/shop/">Shop</a>
            </li>
          </ul>
    
          <!-- Navbar brand -->
          <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="/home">
            <div class="title">
              <div class="soda">soda</div> 
              <div class="amp">&amp;</div> 
              <div class="clear"></div>
              <div class="cookies">cookies</div>
            </div>
          </a>
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/about/">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact/">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/bodegastaples/">Instagram</a>
            </li>
          </ul>
    
        </div>
      </div>
    </nav>