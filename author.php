<?php get_header(); ?>
<div class="page-body">

<?php
  if ( have_posts() )
  the_post();
?>

<?php
if ( get_the_author_meta( 'description' ) ) : ?>
  <div class="bio">
    <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
    <h2><?php printf( __( 'Acerca de %s', 'twentyten' ), get_the_author() ); ?></h2>
    <?php the_author_meta( 'description' ); ?>
  </div>
<?php endif; ?>

<?php
  rewind_posts();
  get_template_part( 'loop', 'author' );
?>

</div><!-- end page-body-->
<?php get_sidebar(); ?>
<div class="clear"></div>

<?php get_footer(); ?>
