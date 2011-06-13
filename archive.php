<?php get_header(); ?>

<div class="page-body">
  <?php
    if ( have_posts() )
    the_post();
  ?>

  <?php
    rewind_posts();
    get_template_part( 'loop', 'archive' );
  ?>

</div><!-- end page-body-->
<?php get_sidebar(); ?>
<div class="clear"></div>

<?php get_footer(); ?>
