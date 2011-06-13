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
  
  <div class="slider"><?php if (function_exists('vSlider')) { vSlider(); }?> </div>

  <div class ="clear"></div>

  <div class="boxes">
    <div class="box left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim volutpat dolor sit amet convallis mattis</div>
    <div class="box center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim volutpat dolor sit amet convallis mattis</div>
    <div class="box right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim volutpat dolor sit amet convallis mattis</div>
  </div>

</div>

<div class="clear"></div>
<?php get_footer(); ?>

