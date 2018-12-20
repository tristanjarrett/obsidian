<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo('name') . " | " . get_bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">
    <?php wp_head();?>
  </head>
  <body>

    <header class="my-header">
      <a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo('name'); ?></a>
      <?php wp_list_pages( '&title_li=' ); ?>
    </header>