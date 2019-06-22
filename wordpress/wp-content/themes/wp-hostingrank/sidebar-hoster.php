<aside class="sidebar sidebar-hoster col-xl-3 col-lg-3 col-md-12" role="complementary">

  <h4 class="sidebar-hoster--title">
    <?php $alt_name = get_field('alt_name', $hoster_ID); if ( $alt_name ) { echo $alt_name; } else { echo get_the_title($hoster_ID); }; ?>
    <a href="https://<?php the_field('link', $hoster_ID); ?>"><?php the_field('link', $hoster_ID); ?></a>
  </h4>
  <style>
    .sidebar-hoster--title::before {
      background-image: url('<?php $logo = get_field('logo', $hoster_ID); echo $logo['url']; ?>');
    }
  </style>

  <h6 class="sidebar-hoster--rating">
    Рейтинг <span>очень хорошо <span>9.2</span></span>
  </h6>

  <?php
    $subpage_tarifs = false;
    $subpage_review = false;
    $subpage_speed = false;
    $subpage_uptime = false;
    $subpage_download = false;
    $subpage_phpinfo = false;
    $args = array(
      'post_parent' => $hoster_ID,
      'post_type'   => 'hoster',
      'numberposts' => -1
    );
    query_posts($args);
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      $slug = get_post_field( 'post_name', get_post($post_id) );

      switch ($slug) {
        case "tarifs":
          $subpage_tarifs = true;
          break;
        case "review":
          $subpage_review = true;
          break;
        case "speed":
          $subpage_speed = true;
          break;
        case "uptime":
          $subpage_uptime = true;
          break;
        case "download":
          $subpage_download = true;
          break;
        case "phpinfo ":
          $subpage_phpinfo = true;
          break;
      }
    ?>
  <?php endwhile; endif; wp_reset_query(); ?>

  <ul class="sidebar-hoster--features">

    <li class="sidebar-hoster--description">
      <a href="<?php echo get_post_permalink($hoster_ID); ?>">Обзор<span>хостинга <?php echo get_the_title($hoster_ID); ?></span></a>
    </li>
    <?php if ($subpage_tarifs): ?>
      <li class="sidebar-hoster--tarifs">
        <a href="<?php echo get_post_permalink($hoster_ID); ?>/tarifs">Тарифы<span>хостинга <?php echo get_the_title($hoster_ID); ?></span></a>
      </li>
    <?php endif; ?>
    <?php if ($subpage_review): ?>
      <li class="sidebar-hoster--review">
        <a href="<?php echo get_post_permalink($hoster_ID); ?>/review">Отзывы пользователей<span>о хостинге <?php echo get_the_title($hoster_ID); ?></span></a>
      </li>
    <?php endif; ?>
    <?php if ($subpage_speed): ?>
      <li class="sidebar-hoster--speed">
        <a href="<?php echo get_post_permalink($hoster_ID); ?>/speed">График быстродействия<span>хостинга <?php echo get_the_title($hoster_ID); ?></span></a>
      </li>
    <?php endif; ?>
    <?php if ($subpage_uptime): ?>
      <li class="sidebar-hoster--uptime">
        <a href="<?php echo get_post_permalink($hoster_ID); ?>/uptime">Аптайм статистика<span>хостинга <?php echo get_the_title($hoster_ID); ?></span></a>
      </li>
    <?php endif; ?>
    <?php if ($subpage_download): ?>
      <li class="sidebar-hoster--download">
        <a href="<?php echo get_post_permalink($hoster_ID); ?>/download">Тестирование на скорость<span>скачивания с <?php echo get_the_title($hoster_ID); ?></span></a>
      </li>
    <?php endif; ?>
    <?php if ($subpage_phpinfo): ?>
      <li class="sidebar-hoster--phpinfo">
        <a href="<?php echo get_post_permalink($hoster_ID); ?>/phpinfo">Просмотр настроек PHP<span>хостинга <?php echo get_the_title($hoster_ID); ?></span></a>
      </li>
    <?php endif; ?>
  </ul>

</aside><!-- /sidebar -->
