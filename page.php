<?php get_header(); ?>


<div class="page-body">

  <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <?php if ( is_front_page() ) { ?>
      <h2><?php the_title(); ?></h2>
    <?php } else { ?>	
      <h1><?php the_title(); ?></h1>
    <?php } ?>				
    
    <?php the_content(); ?>
    
    <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
    <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>


  <?php endwhile; ?>

</div><!-- end page-body-->

<div class="clear"></div>
<?php get_footer(); ?>
