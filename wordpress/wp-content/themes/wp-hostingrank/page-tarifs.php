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

          <?php if ( have_rows('virtual_hosting') ) : ?>
            <h3>Тарифы <strong>на виртуальный хостинг</strong></h3>
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
                    <td class="is--unlimited-sites"></td>
                  <?php } else { ?>
                    <td class=""><?php the_sub_field('sites_count'); ?> шт.</td>
                  <?php } ?>

                  <td>
                    <?php the_sub_field('disk_size'); ?> Гб
                    <?php if (get_sub_field('ssd')) { ?><span class="is--ssd" data-tooltip="Размещение на высокоскоростных SSD-дисках">SSD</span><?php } ?>
                  </td>

                  <?php if (get_sub_field('unlimited_db')) { ?>
                    <td class="is--unlimited-db">неогранич.</td>
                  <?php } else { ?>
                    <td class=""><?php the_sub_field('db_count'); ?> шт.</td>
                  <?php } ?>

                  <td>
                    <span class="month-price"><?php $price_month = intval(get_sub_field('price_month')); $result = alternative_money_ru( $price_month); echo $result; ?></span> ₽ / меc. <span class="is-yearprice"><?php if (get_sub_field('price_year')) { ?><?php $price_year = intval(get_sub_field('price_year')); $result = alternative_money_ru( $price_year); echo $result; $price_year_by_month = $price_month * 12; $difference = $price_year_by_month - $price_year; $discount = $difference / $price_year * 100; $discount = number_format($discount,0);  ?> ₽ / год</span> <span class="ico-percent" data-tooltip="Скидка <?php echo $discount ; ?>% при оплате за год">%</span><?php } ?>
                  </td>
                </tr>
              <?php endwhile; ?>

            </table>
          <?php endif; ?>
          <p>Републикация материала без письменного разрешения автора запрещена.</p>

        </article>
      <?php endwhile; endif; ?>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
<?php get_footer(); ?>
