<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo get_bloginfo('name') . " | " . get_bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">
    <?php wp_head();?>
  </head>
  <body>

    <header class="my-header">

      <div class="container">

        <div class="d-flex align-items-center justify-content-between navbar-expand-md navbar-light">

          <div>
            <a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo('name'); ?></a>
          </div>

          <div>
            <span class="d-none d-md-block">
              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </span>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>

        </div>

        <div class="collapse navbar-collapse d-md-none" id="navbarNav">
          <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>

      </div>

    </header>
