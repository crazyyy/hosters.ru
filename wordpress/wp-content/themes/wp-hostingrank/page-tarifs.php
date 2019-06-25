<?php /* Template Name: Tarifs Page */ get_header(); ?>
  <div class="container">
    <div class="row">
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <?php include get_template_directory() . '/template-hoster-init.php'; ?>

        <?php include get_template_directory() . '/sidebar-hoster.php'; ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class('article-tariffs col-xl-9 col-lg-9 col-md-12', $hoster_ID); ?>>

          <?php include get_template_directory() . '/template-hoster-header.php'; ?>

          <h1 class="single-title inner-title"><span>Стоимость хостинга <?php echo get_the_title($hoster_ID); ?></span></h1>

          <p>Тарифы на хостинг, VPS и выделенные серверы актуализируются ежедневно.</p>

          <?php if ( have_rows('discount_coupon') ) : ?>
            <h3>Купоны и скидки <strong><?php echo get_the_title($hoster_ID); ?></strong></h3>
            <ul class="discount-coupon">
              <?php while( have_rows('discount_coupon') ) : the_row(); ?>
                <li><span><?php the_sub_field('discount_code'); ?></span> <?php the_sub_field('discount_description'); ?></li>
              <?php endwhile; ?>
            </ul>
            <!-- /.discount-coupon -->
          <?php endif; ?>


          <?php if ( have_rows('virtual_hosting') ) : ?>
            <h3>Тарифы <strong>на виртуальный хостинг</strong></h3>
            <div class="tariffs--featured">
              <?php if (get_field('virtual_hosting_test_days')) { ?><span class="tariffs--featured-acount">Тестовый аккаунт <?php the_field('virtual_hosting_test_days'); ?> дней</span><?php } ?>
              <?php if (get_field('virtual_hosting_ipv4_costs')) { ?><span class="tariffs--featured-ipv4">IPv4 <?php the_field('virtual_hosting_ipv4_costs'); ?> ₽ / мес.</span><?php } ?>
              <?php if (get_field('virtual_hosting_control_ddos')) { ?><span class="tariffs--featured-ddos">Защита от DDoS бесплатно</span><?php } ?>
            </div>
            <!-- /.tariffs--featured -->
            <div class="mobileScroll">
              <table class="tariffs--shared">
                <tr>
                  <th>тариф</th>
                  <th>сайтов</th>
                  <th>диск</th>
                  <th>базы данных</th>
                  <th>стоимость</th>
                </tr>
                <?php while( have_rows('virtual_hosting') ) : the_row(); ?>
                  <tr>
                    <td>
                      <?php $term = get_sub_field('country'); if( $term ): ?>
                        <span class="price-country price-country--<?php echo $term[0]->slug; ?>" data-tooltip="Местоположение сервера: <?php echo $term[0]->name; ?><?php if (get_sub_field('city')) { ?><?php the_sub_field('city'); ?><?php } ?>"></span>
                      <?php endif; ?>
                      <?php the_sub_field('title'); ?>
                      <?php if (get_sub_field('ssl')) { ?><span class="is--ssl" data-tooltip="Бесплатный SSL-сертификат">SSL</span><?php } ?>
                    </td>

                    <?php if (get_sub_field('unlimited_sites')) { ?>
                      <td class="is--unlimited-sites">неогранич.</td>
                    <?php } else { ?>
                      <td class=""><span class="mobile-block"><?php the_sub_field('sites_count'); ?> шт.</span></td>
                    <?php } ?>

                    <td>
                      <span class="mobile-block"><?php the_sub_field('disk_size'); ?> Гб</span>
                      <?php if (get_sub_field('ssd')) { ?><span class="is--ssd" data-tooltip="Размещение на высокоскоростных SSD-дисках">SSD</span><?php } ?>
                    </td>

                    <?php if (get_sub_field('unlimited_db')) { ?>
                      <td class="is--unlimited-db">неогранич.</td>
                    <?php } else { ?>
                      <td class=""><span class="mobile-block"><?php the_sub_field('db_count'); ?> шт.</span></td>
                    <?php } ?>

                    <td>
                      <span class="month-price"><?php $price_month = intval(get_sub_field('price_month')); $result = alternative_money_ru( $price_month); echo $result; ?></span> ₽ / меc. <?php if (get_sub_field('price_year')) { ?><span class="is-yearprice"><?php $price_year = intval(get_sub_field('price_year')); $result = alternative_money_ru( $price_year); echo $result; $price_year_by_month = $price_month * 12; $difference = $price_year_by_month - $price_year; $discount = $difference / $price_year * 100; $discount = number_format($discount,0);  ?> ₽ / год <span class="ico-percent" data-tooltip="Скидка <?php echo $discount ; ?>% при оплате за год">%</span></span><?php } ?>
                    </td>
                  </tr>
                <?php endwhile; ?>

              </table>
            </div>
            <!-- /.mobileScroll -->
            <?php $control_panel = get_field('virtual_hosting_control_panel'); if ($control_panel) { ?><p class="additional-controlpanel"><span>Панель управления:</span> <?php foreach ($control_panel as $cp) { echo $cp->name . ' '; }  ?></p><?php } ?>
            <?php $virtual_hosting_moneyback = get_field('virtual_hosting_moneyback'); if ($virtual_hosting_moneyback) { ?><p class="additional-moneyback"><span>Манибек:</span> <?php if ($virtual_hosting_moneyback === '777') { ?>возврат неизрасходованного остатка<?php } else { ?>полный возврат в течение <?php the_field('virtual_hosting_moneyback'); ?> дн.<?php } ?></p><?php } ?>
            <hr>
          <?php endif; ?>





          <?php if ( have_rows('vps__vds') ) : ?>
            <h3>Тарифы <strong>VPS / VDS</strong></h3>

            <div class="tariffs--featured">
              <?php if (get_field('vps__vds_test_days')) { ?><span class="tariffs--featured-acount">Тестовый аккаунт <?php the_field('vps__vds_test_days'); ?> дней</span><?php } ?>
              <?php $vps__vds_ipv4_costs = get_field('vps__vds_ipv4_costs'); if ($vps__vds_ipv4_costs == 777) { ?><span class="tariffs--featured-ipv4">IPv4 бесплатно</span><?php } else if ($vps__vds_ipv4_costs > 0) { ?><span class="tariffs--featured-ipv4">IPv4 <?php echo $vps__vds_ipv4_costs; ?> ₽ / мес.</span><?php } ?>
              <?php $vps__vds_ipv6_costs = get_field('vps__vds_ipv6_costs'); if ($vps__vds_ipv6_costs == 777) { ?><span class="tariffs--featured-ipv4">IPv6 бесплатно</span><?php } else if ($vps__vds_ipv6_costs > 0) { ?><span class="tariffs--featured-ipv4">IPv6 <?php echo $vps__vds_ipv6_costs; ?> ₽ / мес.</span><?php } ?>

              <?php $vps__vds_ddos = get_field('vps__vds_ddos'); if (($vps__vds_ddos["value"] === 'free') || ($vps__vds_ddos["value"] === 'paid')){ ?><span class="tariffs--featured-ddos">Защита от DDoS <?php echo $vps__vds_ddos["label"]; ?></span><?php } ?>

              <?php $vps__vds_backup = get_field('vps__vds_backup'); if (($vps__vds_backup["value"] === 'free') || ($vps__vds_backup["value"] === 'paid')){ ?><span class="tariffs--featured-ddos">Бэкап VPS <?php echo $vps__vds_backup["label"]; ?></span><?php } ?>

              <?php $vps__vds_ispmanager_costs = get_field('vps__vds_ispmanager_costs'); if ($vps__vds_ispmanager_costs == 777) { ?><span class="tariffs--featured-ddos">ISPmanager бесплатно</span><?php } else if ($vps__vds_ispmanager_costs > 0) { ?><span class="tariffs--featured-ddos">ISPmanager от <?php echo $vps__vds_ispmanager_costs; ?> ₽ / мес.</span><?php } ?>

              <?php $vps__vds_administrator = get_field('vps__vds_administrator'); if ($vps__vds_administrator == 777) { ?><span class="tariffs--featured-ddos">Услуги администрирования бесплатно</span><?php } else if ($vps__vds_administrator > 0) { ?><span class="tariffs--featured-ddos">Услуги администрирования от <?php echo $vps__vds_administrator; ?> ₽ / мес.</span><?php } ?>

              <?php $vps__vds_windows = get_field('vps__vds_windows'); if ($vps__vds_windows) { ?><span class="tariffs--featured-ddos">Лицензия Windows от <?php echo $vps__vds_windows; ?> ₽ / мес.</span><?php } ?>

            </div>
            <!-- /.tariffs--featured -->

            <div class="mobileScroll">
              <table class="tariffs--shared">
                <tr>
                  <th>тариф</th>
                  <th>ОС</th>
                  <th>процессор</th>
                  <th>память</th>
                  <th>диск</th>
                  <th>стоимость</th>
                </tr>
                <?php while( have_rows('vps__vds') ) : the_row(); ?>
                  <tr>
                    <td>
                      <?php $term = get_sub_field('country'); if( $term ): ?>
                        <span class="price-country price-country--<?php echo $term[0]->slug; ?>" data-tooltip="Местоположение сервера: <?php echo $term[0]->name; ?><?php if (get_sub_field('city')) { ?>, <?php the_sub_field('city'); ?><?php } ?>"></span>
                      <?php endif; ?>
                      <?php the_sub_field('title'); ?>
                      <?php if (get_sub_field('cloud')) { ?><span class="is--cloud" data-tooltip="Облачный хостинг с повышенной отказоустойчивостью"><i class="fa fa-cloud"></i></span><?php } ?>
                      <?php if (get_sub_field('comment')) { ?><span class="is--comment" data-tooltip="<?php the_sub_field('comment'); ?>"><i class="fa fa-info"></i></span><?php } ?>
                      <?php if (get_sub_field('unfixed_price')) { ?><span class="is--unfixed" data-tooltip="Тариф без фиксированной цены, его стоимость будет зависеть от выбранных вами опций	"><i class="fa fa-puzzle-piece"></i></span><?php } ?>
                    </td>

                    <td>
                      <?php $termos = get_sub_field('operationalsystem'); if( $termos ): ?>
                        <?php foreach ($termos as $teros) {
                          echo '<span class="term-os term-os--' . $teros->slug . '" data-tooltip="' . $teros->description . '">';
                          if ($teros->slug == 'windows') {
                            echo '<i class="fa fa-windows"></i>';
                          } else if ($teros->slug == 'linux') {
                            echo '<i class="fa fa-linux"></i>';
                          } else if ($teros->slug == 'freebsd') {
                            echo '<i class="fa fa-angellist"></i>';
                          } else if ($teros->slug == '1c-bitriks') {
                            echo '<i class="fa fa-database"></i>';
                          } else {
                            echo '<i class="fa fa-dashboard"></i>';
                          }
                          echo '</span>';

                        } ?>
                      <?php endif; ?>
                    </td>

                    <td>
                      <?php if (get_sub_field('processors_count')) { the_sub_field('processors_count'); } ?><?php $processors_count_max = get_sub_field('processors_count'); if ($processors_count_max) { echo ' - ' . $processors_count_max; } ?><i class="ico ico-processors">processors</i><?php $processors_clock_rate = get_sub_field('processors_clock_rate'); if ($processors_clock_rate) { $processors_clock_rate = number_format($processors_clock_rate, 0, ',', '.'); echo $processors_clock_rate . '  ГГц'; } ?><?php $processors_types = get_sub_field('processors_type'); if( $processors_types ): ?>
                        <?php foreach ($processors_types as $processors_type) { echo '<i class="term-processors term-processors--' . $processors_type->slug . '" data-tooltip="' . $processors_type->description . '">' . $processors_type->slug . '</i>'; }  ?>
                      <?php endif; ?>
                    </td>

                    <td>
                      <?php the_sub_field('ram'); ?><?php if (get_sub_field('ram_max')) { ?> - <?php the_sub_field('ram_max'); ?><?php } ?> Гб
                    </td>

                    <td>
                      <?php if (get_sub_field('hdd_count')) { ?><?php the_sub_field('hdd_count'); ?> - <?php } ?>
                      <?php the_sub_field('hdd_size'); ?><?php if (get_sub_field('hdd_size_max')) { ?> - <?php the_sub_field('hdd_size_max'); ?><?php } ?> Гб
                      <?php $ssd = get_sub_field('ssd'); if (($ssd["value"] === 'SSD') || ($ssd["value"] === 'MIX') || ($ssd["value"] === 'NVM')){ ?><i class="ico-ssd-type ico-ssd-type--<?php echo $ssd["value"]; ?>" data-tooltip="<?php echo $ssd["label"]; ?>"><?php echo $ssd["value"]; ?></i><?php } ?>
                    </td>

                    <td>
                      <span class="month-price"><?php $price_month = intval(get_sub_field('price_month')); $result = alternative_money_ru( $price_month); echo $result; ?></span> ₽ / меc. <?php $year_discount = get_sub_field('year_discount'); if ($year_discount) { ?><span class="ico-percent" data-tooltip="Скидка <?php echo $year_discount ; ?>% при оплате за год">%</span><?php } ?>
                    </td>
                  </tr>
                <?php endwhile; ?>

              </table>
            </div>
            <!-- /.mobileScroll -->
            <?php $control_panel = get_field('vps__vds_control_panel'); if ($control_panel) { ?><p class="additional-controlpanel"><span>Панель управления:</span> <?php foreach ($control_panel as $cp) { echo $cp->name . ' '; }  ?> <?php $vps__vds_trafic = get_field('vps__vds_trafic'); if (($vps__vds_trafic["value"] === 'unlimited') || ($vps__vds_trafic["value"] === 'limited')){ ?><span class="tariffs--featured-ddos">Трафик</span> <?php echo $vps__vds_trafic["label"]; ?><?php } ?></p><?php } ?>

            <?php $vps__vds_lan = get_field('vps__vds_lan'); if (($vps__vds_lan["value"] === '100') || ($vps__vds_lan["value"] === '500') || ($vps__vds_lan["value"] === '1000')){ ?><p class="additional-controlpanel"><span class="tariffs--featured-ddos">LAN</span> <?php echo $vps__vds_lan["label"]; ?></p><?php } ?>

            <?php $vps__vds_moneyback = get_field('vps__vds_moneyback'); if ($vps__vds_moneyback) { ?><p class="additional-moneyback"><span>Манибек:</span> <?php if ($vps__vds_moneyback === '777') { ?>возврат неизрасходованного остатка<?php } else { ?>полный возврат в течение <?php the_field('vps__vds_moneyback'); ?> дн.<?php } ?></p><?php } ?>
            <hr>
          <?php endif; ?>

        </article>
      <?php endwhile; endif; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>
