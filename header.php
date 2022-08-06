<!DOCTYPE html>
<html lang="<?php if (get_locale() == "ja") : ?>ja<?php else : ?>en<?php endif; ?>">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . '/reset.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . '/js/slick/slick.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . '/js/slick/slick-theme.css'); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . '/style.css'); ?>">
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__inner">
      <?php wp_head(); ?>
      <nav class="header__nav">
        <ul class="firstlayer">
          <li><a href="<?php if (get_locale() == "ja") {echo esc_url(home_url('/#rec'));}else{echo esc_url(home_url('/en/#rec'));} ?>"><?php if (get_locale() == "ja") : ?>おすすめ情報&コラム<?php else : ?>Pick Up&Column<?php endif; ?></a></li>
          <li class="hasChild"><a href="<?php if (get_locale() == "ja") {echo esc_url(home_url('/#aba')); }else{echo esc_url(home_url('/en/#aba'));} ?>"><?php if (get_locale() == "ja") : ?>宮泉市はこんな街<?php else : ?>About Miyaizumi<?php endif; ?></a>
            <ul class="secondlayer">
              <li><a href="<?php if (get_locale() == "ja") { echo esc_url(home_url('/'));  }else{echo esc_url(home_url('/en'));} ?>"><?php if (get_locale() == "ja") : ?>これまで<?php else : ?>Past<?php endif; ?></a></li>
              <li><a href="<?php if (get_locale() == "ja") { echo esc_url(home_url('/'));  }else{echo esc_url(home_url('/en'));} ?>"><?php if (get_locale() == "ja") : ?>現在<?php else : ?>Now<?php endif; ?></a></li>
              <li><a href="<?php if (get_locale() == "ja") { echo esc_url(home_url('/'));  }else{echo esc_url(home_url('/en'));} ?>"><?php if (get_locale() == "ja") : ?>これから<?php else : ?>Future<?php endif; ?></a></li>

            </ul>
          </li>
          <li><a href="<?php if (get_locale() == "ja") { echo esc_url(home_url('/#plan'));  }else{echo esc_url(home_url('/en/#plan'));} ?>"><?php if (get_locale() == "ja") : ?>コロナへの取り組み<?php else : ?>Corona Initiatives<?php endif; ?></a></li>
          <li><a href="<?php if (get_locale() == "ja") { echo esc_url(home_url('/#tro'));  }else{echo esc_url(home_url('/en/#tro'));} ?>"><?php if (get_locale() == "ja") : ?>こんな時、困った時<?php else : ?>The case you're in trouble<?php endif; ?></a></li>
        </ul>
      </nav>

      <!-- 言語スイッチャー -->
      <ul class="header__lang">
        <?php pll_the_languages(); ?>
      </ul>
      <!-- ハンバーガ -->
      <div class="header__spbtn">
        <span></span>
        <span></span>
      </div>
    </div>
  </header>