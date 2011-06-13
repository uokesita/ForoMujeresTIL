<?php get_header(); ?>
<div class="page-body">

  <?php
    $category_description = category_description();
    if ( ! empty( $category_description ) )
    echo '' . $category_description . '';

    get_template_part( 'loop', 'category' );
  ?>

</div><!-- end page-body-->
<?php get_sidebar(); ?>
<div class="clear"></div>

<?php get_footer(); ?>
