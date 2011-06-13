<?php if ( ! have_posts() ) : ?>
  <h1><?php _e( 'No Encontrado', 'twentyten' ); ?></h1>
  <p><?php _e( 'Lo sentimos no se encontro ningun resultado.', 'twentyten' ); ?></p>
  <?php get_search_form(); ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php /* How to display posts in the Gallery category. */ ?>

  <?php if ( in_category( _x('gallery', 'gallery category slug', 'twentyten') ) ) : ?>
    <div class="post">
      <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <div class="posted-on"><?php twentyten_posted_on(); ?></div>
      <?php if ( post_password_required() ) : ?>
        <?php the_content(); ?>
      <?php else : ?>
        <?php
          $images = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image', 'orderby' => 'menu_order', 'order' => 'ASC', 'numberposts' => 999 ) );
          $total_images = count( $images );
          $image = array_shift( $images );
          $image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );
        ?>
        <a href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>

        <p><?php printf( __( 'Esta galeria contiene <a %1$s>%2$s fotos</a>.', 'twentyten' ),
           'href="' . get_permalink() . '" title="' . sprintf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ) . '" rel="bookmark"',
           $total_images
        ); ?></p>

        <?php the_excerpt(); ?>
      <?php endif; ?>

      <div class="links">
        <a href="<?php echo get_term_link( _x('gallery', 'gallery category slug', 'twentyten'), 'category' ); ?>" title="<?php esc_attr_e( 'Ver post en la categoria de galeria', 'twentyten' ); ?>"><?php _e( 'Mas Galerias', 'twentyten' ); ?></a>
        |
        <?php comments_popup_link( __( 'Deja un Comentario', 'twentyten' ), __( '1 Comentario', 'twentyten' ), __( '% Comentarios', 'twentyten' ) ); ?>
        <?php edit_post_link( __( 'Editar', 'twentyten' ), '|', '' ); ?>
      </div>
    </div>
<?php /* How to display posts in the asides category */ ?>

  <?php elseif ( in_category( _x('asides', 'asides category slug', 'twentyten') ) ) : ?>
    <div class="post">
      <?php if ( is_archive() || is_search() ) : // Display excerpts for archives and search. ?>
        <?php the_excerpt(); ?>
      <?php else : ?>
        <?php the_content( __( 'Seguir leyendo &rarr;', 'twentyten' ) ); ?>
      <?php endif; ?>

      <div class="posted-on"><?php twentyten_posted_on(); ?></div>
      |
      <div class="links">
        <?php comments_popup_link( __( 'Deja un Comentario', 'twentyten' ), __( '1 Comentario', 'twentyten' ), __( '% Comentarios', 'twentyten' ) ); ?>
        <?php edit_post_link( __( 'Editar', 'twentyten' ), '| ', '' ); ?>
      </div>
    </div>
<?php /* How to display all other posts. */ ?>

  <?php else : ?>
    <div class="post">
      <h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      <div class="posted-on"><?php twentyten_posted_on(); ?></div>

      <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
        <?php the_excerpt(); ?>
      <?php else : ?>
        <?php the_content( __( 'Seguir leyendo &rarr;', 'twentyten' ) ); ?>
        <?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
      <?php endif; ?>

      <?php if ( count( get_the_category() ) ) : ?>
        <div class="posted-in"><?php printf( __( 'Categoria %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?></div>
      <?php endif; ?>

      <?php
        $tags_list = get_the_tag_list( '', ', ' );
        if ( $tags_list ): ?>
          <?php printf( __( 'Tagged %2$s', 'twentyten' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list ); ?>
          |
        <?php endif; ?>
        
        <div class="links">
          <?php comments_popup_link( __( 'Deja un Comentario', 'twentyten' ), __( '1 Comentario', 'twentyten' ), __( '% Comentarios', 'twentyten' ) ); ?>
          <?php edit_post_link( __( 'Editar', 'twentyten' ), '| ', '' ); ?>
        </div>

        <?php comments_template( '', true ); ?>
    </div> 
  <?php endif; // This was the if statement that broke the loop into three parts based on categories. ?>

<?php endwhile; // End the loop. Whew. ?>

<?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
  <?php next_posts_link( __( '&larr; Posts Antiguos', 'twentyten' ) ); ?>
  <?php previous_posts_link( __( 'Posts Recientes &rarr;', 'twentyten' ) ); ?>
<?php endif; ?>
