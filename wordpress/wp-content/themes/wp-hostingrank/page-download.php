<?php /* Template Name: Download Page */ get_header(); ?>
  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php include get_template_directory() . '/template-hoster-init.php'; ?>

        <?php include get_template_directory() . '/sidebar-hoster.php'; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('col-xl-9 col-lg-9 col-md-12', $hoster_ID); ?>>

          <?php include get_template_directory() . '/template-hoster-header.php'; ?>

          <h1 class="single-title inner-title"><span>Скорость скачивания с <?php echo get_the_title($hoster_ID); ?></span></h1>

          <p>Выбирая хостинг, надо знать, насколько быстрый канал связи между Вами и сервером, а также быстро ли будет загружаться Ваш сайт у посетителей (владельцам региональных сайтов на это стоит обратить особое внимание). </p>
          <p>Cкачайте тестовый файл, расположенный на сервере хостинг-провайдера <?php $alt_name = get_field('alt_name', $hoster_ID); if ( $alt_name ) { echo $alt_name; } else { echo get_the_title($hoster_ID); }; ?> и проследить за скоростью его загрузки: чем дольше он будет загружаться, тем хуже канал между Вами и выбранным хостингом.</p>

          <?php $filelink = get_field('file_link'); if ( $filelink ) { ?>
            <div class="filelink--container">
              <a href="<?php echo $filelink; ?>"><?php echo $filelink; ?></a>
              <p><?php if (get_field('file_size')) { ?>файл <span><?php the_field('file_size');  ?> Мб</span> <?php }?><?php if (get_field('server_ips')) { ?>сервер <span><?php the_field('server_ips'); ?></span><?php } ?></p>
            </div>
            <!-- /.filelink--container -->
          <?php } else { ?>
            <p><strong>Хостинг <a href="<?php echo get_post_permalink($hoster_ID); ?>"><?php echo get_the_title($hoster_ID); ?></a> не подключен к системе тестирования.</strong></p>

            TODO
            TODO
            TODO
            TODO
            <img src="https://monosnap.com/direct/etDm4arzPYQzQ1VtEUvidQ7gM9X9vI" alt="">
            https://hosters.ru/name.com/phpinfo.html
          <?php }; ?>

        </article>
      <?php endwhile; endif; ?>

    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>
