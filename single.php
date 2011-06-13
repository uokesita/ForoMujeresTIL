<?php get_header(); ?>

<div class="full-post">
  <div class="page-body">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>

        <div class="posted-on"><?php twentyten_posted_on(); ?></div>

        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

        <?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
          <?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
          <h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
          <?php the_author_meta( 'description' ); ?>
          <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
            <?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
          </a>
        <?php endif; ?>

        <div class="posted-in"><?php twentyten_posted_in(); ?></div>

        <?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

        <?php comments_template( '', true ); ?>

      <?php endwhile; // end of the loop. ?>
  </div><!-- end page-body-->

  <?php get_sidebar(); ?>
</div>
<div class="clear"></div>
<?php get_footer(); ?>
