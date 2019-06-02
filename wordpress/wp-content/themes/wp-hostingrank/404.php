<?php get_header(); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h1 class="single-title inner-title"><span><?php _e( 'Page not found', 'wpeasy' ); ?></span></h1>
    <h2><a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpeasy' ); ?></a></h2>
  </article>
<?php get_footer(); ?>
