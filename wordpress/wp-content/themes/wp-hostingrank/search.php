<?php get_header(); ?>
  <article>
    <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

    <h1 class="cat-title inner-title"><span><?php echo sprintf( __( '%s Search Results for ', 'wpeasy' ), $wp_query->found_posts ); echo get_search_query(); ?></span></h1>

    <div class="container">
      <div class="row">
        <?php get_template_part('loop'); ?>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <?php get_template_part('pagination'); ?>
  </article>
<?php get_footer(); ?>
