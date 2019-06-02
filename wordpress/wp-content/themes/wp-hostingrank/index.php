<?php get_header(); ?>
  <article>
    <h1 class="cat-title inner-title"><?php _e( 'Latest Posts', 'wpeasy' ); ?></span></h1>

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
