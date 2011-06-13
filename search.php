<?php get_header(); ?>
<div class="page-body">

  <?php if ( have_posts() ) : ?>
    <?php get_template_part( 'loop', 'search' ); ?>
  <?php else : ?>
    <h2><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
    <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
    <?php get_search_form(); ?>
  <?php endif; ?>

</div><!-- end page-body-->
<?php get_sidebar(); ?>
<div class="clear"></div>

<?php get_footer(); ?>
