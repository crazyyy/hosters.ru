<?php get_header(); ?>
  <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php if (function_exists('easy_breadcrumbs')) easy_breadcrumbs(); ?>

      <h1 class="single-title inner-title"><span><?php the_title(); ?></span></h1>

      <?php the_content(); ?>

    </article>
  <?php endwhile; endif; ?>
<?php get_footer(); ?>
