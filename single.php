<?php get_header(); ?>

<div class="full-post">
  <div class="page-body">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <div class="posted-on"><?php twentyten_posted_on(); ?></div>

        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

        <div class="posted-in"><?php twentyten_posted_in(); ?></div>

        <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
  </div><!-- end page-body-->

  <?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
