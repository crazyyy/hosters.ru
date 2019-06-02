<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="//www.google-analytics.com/" rel="dns-prefetch">
  <link href="//fonts.googleapis.com" rel="dns-prefetch">
  <link href="//cdnjs.cloudflare.com" rel="dns-prefetch">

  <!-- icons -->
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- wrapper -->
<div class="wrapper">
  <header role="banner">
    <div class="container">
      <div class="row">
        <div class="header--logo col-xl-3 col-lg-3 col-md-3 col-sm-3">
          <?php if ( !is_front_page() && !is_home() ){ ?>
            <a href="<?php echo home_url(); ?>">
          <?php } ?>
            <span class="header--title">hosting<span>rank</span></span>
            <span class="header--descr">Рейтинг хостингов</span>
          <?php if ( !is_front_page() && !is_home() ){ ?>
            </a>
          <?php } ?>
        </div><!-- /header--logo -->
        <div class="header--currency col-xl-2 col-lg-3 col-md-3 col-sm-6 offset-xl-5 offset-lg-3 offset-md-3 offset-sm-3">
            Валюта <span>RUB</span>
        </div>
        <div class="header--contact col-xl-2 col-lg-3 col-md-3 col-sm-3">
          <a href="#">Напишите нам <i class="fa fa-envelope"></i></a>
        </div>
        <!-- /.header--contact col-xl-1 col-lg-2 col-md-2 col-sm-3 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </header><!-- /header -->

  <nav class="header--nav" role="navigation">
    <div class="container">
      <div class="row">
        <?php wpeHeadNav(); ?>
      </div>
    </div>
  </nav><!-- /header--nav -->

  <section role="main">
    <div class="container">
      <div class="row">
