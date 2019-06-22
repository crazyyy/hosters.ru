<?php /* Template Name: PHPinfo Page */ get_header(); ?>
  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php include get_template_directory() . '/template-hoster-init.php'; ?>

        <?php include get_template_directory() . '/sidebar-hoster.php'; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-9 col-lg-9 col-md-12', $hoster_ID); ?>>

          <?php include get_template_directory() . '/template-hoster-header.php'; ?>

          <h1 class="single-title inner-title"><span>Конфигурация PHP на серверах <?php echo get_the_title($hoster_ID); ?></span></h1>

          <p>Здесь Вы можете увидеть результат работы функции <strong>PHPinfo()</strong> на сервере хостинга <a href="<?php echo get_post_permalink($hoster_ID); ?>"><?php echo get_the_title($hoster_ID); ?></a>. Информация содержит версию PHP, опции компиляции PHP и его переменные, дополнительные модули, информацию сервера и системы. Эти данные будут полезны, если Вы собираетесь приобрести <strong>хостинг <?php $alt_name = get_field('alt_name', $hoster_ID); if ( $alt_name ) { echo $alt_name; } else { echo get_the_title($hoster_ID); }; ?></strong>, но неуверены в конфигурации PHP.</p>

          <div class="phpinfo--container">
            <iframe id="framePHP" src="http://hosting-obzor-ru.webtm.ru/phpinfo.php" frameborder="0"></iframe>
          </div>
          <!-- /.phpinfo--container -->

        </article>
      <?php endwhile; endif; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>
