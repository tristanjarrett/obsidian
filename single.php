<?php get_header(); ?>

  <div class="my-main">
    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'template-parts/post-content', get_post_format() );

    endwhile; endif;
    ?>
  </div>

<?php get_footer(); ?>