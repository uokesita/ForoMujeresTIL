<?php
/**
 * Template Name: Main Page
 */

get_header(); ?>

<div class="main-page">

  <div class="post">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; ?>
  </div>
  
  <div class="slider"><?php if (function_exists('vSlider')) { vSlider(''); }?> </div>

  <div class ="clear"></div>

  <div class="boxes">
    <div class="box left">Mujeres geek mito o realidad. Descubrelo este 14,15 y 16 de octubre en el 1er Foro de Mujeres y Tecnología de Información Libres</div>
    <div class="box center">Si crees que las mujeres no saben de tecnología pues estas equivocado, visita <a href="http://wiki.activistasxsl.org.ve/" target="_blank">ActivistasXSL</a></div>
    <div class="box right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim volutpat dolor sit amet convallis mattis</div>
  </div>

</div>

<div class="clear"></div>
<?php get_footer(); ?>

