<?php get_header(); ?>

<div class="page-top">
  <div class="boxes">
    <div class="box left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim volutpat dolor sit amet convallis mattis</div>
    <div class="box center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim volutpat dolor sit amet convallis mattis</div>
    <div class="box right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dignissim volutpat dolor sit amet convallis mattis</div>
    <div class="clear"></div>
  </div>
</div>

<div class="page-body">

  <h1><?php _e( 'No Encontrado', 'twentyten' ); ?></h1>
  <p><?php _e( 'Lo sentimos no se encontro ningun resultado.', 'twentyten' ); ?></p>

  <?php get_search_form(); ?>

  <script type="text/javascript">
    // focus on search field after it has loaded
    document.getElementById('s') && document.getElementById('s').focus();
  </script>

</div>

<div class="clear"></div>
<?php get_footer(); ?>
