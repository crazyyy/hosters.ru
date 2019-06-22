<?php /* Template Name: Tarifs Page */ get_header(); ?>
  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php include get_template_directory() . '/template-hoster-init.php'; ?>

        <?php include get_template_directory() . '/sidebar-hoster.php'; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-9 col-lg-9 col-md-12', $hoster_ID); ?>>

          <?php include get_template_directory() . '/template-hoster-header.php'; ?>

          <h1 class="single-title inner-title"><span>Конфигурация PHP на серверах <?php echo get_the_title($hoster_ID); ?></span></h1>

          <?php the_content(); ?>
          <p>Републикация материала без письменного разрешения автора запрещена.</p>

        </article>
      <?php endwhile; endif; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>
