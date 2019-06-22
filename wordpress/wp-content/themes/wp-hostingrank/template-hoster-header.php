<div class="container">
  <div class="row align-items-start">
    <div class="hoster-quote col-xl-4 col-lg-4 col-md-12">
      <p>
        <?php the_field('main_quote', $hoster_ID); ?>
      </p>
      <span><?php the_field('quote_author', $hoster_ID); ?></span>
    </div>
    <!-- /.hoster-quote -->
    <div class="hoster-summary col-xl-8 col-lg-8 col-md-12">
      <p class="hoster-summary--country"><?php $args = array('number' => '1', 'object_ids' => $hoster_ID); $terms = get_terms('country', $args ); foreach( $terms as $term ){ echo $term->name; } ?>. Основан в <?php the_field('year'); ?> году.</p>
      <p class="hoster-summary--feature hoster-summary--super"><span>3 место</span> в <a href="#">рейтинге хостингов</a>.</p>
      <p class="hoster-summary--feature"><span>30 дней</span> бесплатный <a href="#">пробный хостинг</a>.</p>
      <p class="hoster-summary--feature"><span>3 дня</span> <a href="#">тестовый VPS сервер</a>.</p>
      <ul class="hoster-summary--paymethods">
        <li class="bitcoin"></li>
        <li class="alfaclick"></li>
        <li class="mir"></li>
        <li class="paypal"></li>
        <li class="qiwi"></li>
        <li class="sberbank"></li>
        <li class="visamc"></li>
        <li class="webmoney"></li>
        <li class="yandexmoney"></li>
      </ul>
      <a href="https://<?php the_field('link', $hoster_ID); ?>" class="hoster-summary--link" target="_blank"><span>https://</span><?php the_field('link', $hoster_ID); ?></a>
    </div>
    <!-- /.hoster-summary -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
