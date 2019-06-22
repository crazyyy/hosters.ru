<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <?php include get_template_directory() . '/template-hoster-init.php'; ?>

        <?php include get_template_directory() . '/sidebar-hoster.php'; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-9 col-lg-9 col-md-12'); ?>>

          <?php include get_template_directory() . '/template-hoster-header.php'; ?>

          <h1 class="single-title inner-title"><span>Обзор хостинга <?php the_title(); ?> <?php $rus_name = get_field('rus_name'); if ( $rus_name ) { echo '('.$rus_name.')'; }; ?></span></h1>
          <?php if ( has_post_thumbnail()) { ?>
            <img src="<?php echo the_post_thumbnail_url('medium'); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="article-thumbnail" />
          <?php } ?>
          <?php the_content(); ?>
          <p>Републикация материала без письменного разрешения автора запрещена.</p>
        </article>
      <?php endwhile; endif; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>
