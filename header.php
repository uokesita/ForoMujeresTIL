<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
  if ( is_singular() && get_option( 'thread_comments' ) )
    wp_enqueue_script( 'comment-reply' );
  wp_head();
?>
<link href='http://fonts.googleapis.com/css?family=Nobile:regular,bold' rel='stylesheet' type='text/css'><!-- google fonts -->
</head>

<body <?php body_class(); ?>>
  <div class="wraper">
    <div class="header">
      <h1>
        <?php /*<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> */?>
	<a href="/">1er Foro de Mujeres y Tecnolog&iacute;as <br/> de Informaci&oacute;n Libres</a>
      </h1>
      <p><?php bloginfo( 'description' ); ?></p>
    </div>
    
    <div class="navigation">
      <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
      <div class="social">
        <a href="https://twitter.com/#!/ForoMujeresTIL" alt="Siguenos en Twitter" title="Siguenos en Twitter" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/twitter.png" /></a>
        <a href="http://www.facebook.com/pages/Foro-de-Mujeres-y-Tecnolog%C3%ADas-de-Informaci%C3%B3n-Libres/" alt="Siguenos en Facebook" title="Siguenos en Facebook" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png" /></a>
        <a href="http://identi.ca/foromujerestil" alt="Siguenos en Identi.ca" title="Siguenos en Identi.ca" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/images/identica.png" /></a>
      </div>
    </div><!-- #access -->
    <div class="clear"></div>
    
    <div class="main-content">
