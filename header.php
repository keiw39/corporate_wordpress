<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/ fb# website: http://ogp.me/ns/website#">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex,nofollow" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php bloginfo('name'); ?></title>
  <meta name="title" content="<?php bloginfo('name'); ?>" />
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <!-- PC・スマホページでの相互の関係性 -->
  <link rel=”canonical” href=”<?php echo esc_url( home_url() ); ?>”>
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/27f7c35d10.js" crossorigin="anonymous"></script>
  <!-- Adobe Fonts -->
  <script>
  (function(d) {
    var config = {
        kitId: 'udo6bxz',
        scriptTimeout: 3000,
        async: true,
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className =
          h.className.replace(/\bwf-loading\b/g, '') + ' wf-inactive';
      }, config.scriptTimeout),
      tk = d.createElement('script'),
      f = false,
      s = d.getElementsByTagName('script')[0],
      a;
    h.className += ' wf-loading';
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || (a && a != 'complete' && a != 'loaded')) return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config);
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s);
  })(document);
  </script>
  <!-- ファビコンの設定 -->
  <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/img/faso.ico'); ?>" />
  <!-- スマホ用のアプリアイコン -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() . '/img/apple-touch-icon.png');?>" />
  <?php wp_head(); ?>
  <!--システム・プラグイン用-->
</head>
<body <?php body_class(); ?>>
  <div id="top" class="wrap" ontouchstart="">
    <div class="p-cursor"></div>
    <div class="p-cursor__follower">
      <span>CLICK</span>
      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-home__mv__videoLink_icon.svg' ); ?>" width="14.58" height="12.5" loading="lazy" alt="再生マーク" class="p-home__mv__videoLink__icon" />
    </div>
    <!-- loading animation -->
    <div id="p-loading">
      <div id="p-loading__wrap">
        <h1 class="p-loading__text">
            <img
              src="<?php echo esc_url( get_template_directory_uri() . '/img/l-header__logo_img.svg'); ?>"
              width="49.47"
              height="49.43"
              loading="lazy"
              alt="ロゴアイコン"
              class="l-header__logoImg"
            />
            <span>藤岡行政書士事務所</span>
          </h1>
        <div></div>
      </div>
    </div>
    <div class="p-loading__bg"></div>
    <!---画面遷移用-->
    <!--/loading animation-->
    <div class="p-loading__container">
      <!-- header -->
      <header class="l-header">
        <div class="l-header__wrap">
          <?php if (is_home() || is_front_page()) {
              $title_tag_start = '<h1 class="l-header__logoWrap">';
              $title_tag_end = '</h1>';
          } else {
              $title_tag_start = '<div class="l-header__logoWrap">';
              $title_tag_end = '</div>';
          } ?>
          <?php echo $title_tag_start; ?>
          <a href="<?php echo esc_url( home_url() ); ?>" class="l-header__logoLink">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-header__logo_img.svg');?>" width="49.47" height="49.43" loading="lazy" alt="ロゴアイコン" class="l-header__logoImg" />
            <div class="l-header__logoTitle"><?php bloginfo('name'); ?></div>
          </a>
          <?php echo $title_tag_end; ?>
          <!-- header-nav-toggle -->
          <a id="js-hamburger__toggle" class="l-hamburger__toggle disable">
            <div class="l-hamburger__toggleWrap">
              <span class="l-hamburger__toggleSpan"></span>
              <span class="l-hamburger__toggleSpan"></span>
              <p class="l-hamburger__toggleText">MENU</p>
            </div>
          </a>
          <!-- /header-nav-toggle -->
        </div>
        <!-- header-desktop-menu -->
        <div class="l-desktopMenu">
          <nav class="l-desktopMenu__nav">
            <div class="l-desktopMenu__navWrap">
              <ul class="l-desktopMenu__navList">
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url() ); ?>" class="l-desktopMenu__navLink">ホーム</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('service') ); ?>" class="l-desktopMenu__navLink dropdown-toggle">
                    サービス</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('price') ); ?>" class="l-desktopMenu__navLink">価格</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-desktopMenu__navLink">お知らせ</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('company') ); ?>" class="l-desktopMenu__navLink">会社情報</a>
                </li>
                <li class="l-desktopMenu__navItem">
                  <a href="<?php echo esc_url( home_url('faq') ); ?>" class="l-desktopMenu__navLink">よくある質問</a>
                </li>
                <li class="l-desktopMenu__navItem -contact">
                  <a href="<?php echo esc_url( home_url('contact') ); ?>">CONTACT</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <!-- /header-desktop-menu -->
        <div class="l-dropDown-menu__wrap">
          <nav class="l-dropDown-menu__nav">
            <div class="l-dropDown-menu__navInner">
              <ul class="l-dropDown-menu__navList">
                <li class="l-dropDown-menu__navItem">
                  <a href="<?php echo esc_url( home_url('service') ); ?>#service01" class="l-dropDown-menu__navLink">
                    IT法務
                  </a>
                </li>
                <li class="l-dropDown-menu__navItem">
                  <a href="<?php echo esc_url( home_url('service') ); ?>#service02" class="l-dropDown-menu__navLink">
                    ビザ申請
                  </a>
                </li>
                <li class="l-dropDown-menu__navItem">
                  <a href="<?php echo esc_url( home_url('service') ); ?>#service03" class="l-dropDown-menu__navLink">
                    民泊申請
                  </a>
                </li>
              </ul>
              <div class="c-listContact__tel">
                <div class="c-listContact__telWrap">
                  <a href="tel:0123-456-789">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listContact__tel_icon_black.svg'); ?>" width="16" height="23.54" loading="lazy" alt="電話のアイコン" class="c-listContact__telIcon" />
                    0123-456-789​
                  </a>
                  <span>（平日00:00〜00:00）</span>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- /header -->
      <!-- header-sp-menu -->
      <div class="l-spMenu">
        <div class="l-spMenu__inner">
          <nav class="l-spMenu__nav">
            <ul class="l-spMenu__navList">
              <li class="l-spMenu__navItem">
                <a href="<?php echo esc_url( home_url() ); ?>" class="l-spMenu__navLink">ホーム</a>
              </li>
              <li class="l-spMenu__navItem">
                <a class="l-spMenu__navLink -child">サービス一覧</a>
              </li>
              <ul class="l-spMenu__navList__child">
                <li class="l-spMenu__navItem__child">
                  <a href="<?php echo esc_url( home_url('service') ); ?>#service01" class="l-spMenu__navLink">IT法務</a>
                </li>
                <li class="l-spMenu__navItem__child">
                  <a href="<?php echo esc_url( home_url('service') ); ?>#service02" class="l-spMenu__navLink">ビザ申請</a>
                </li>
                <li class="l-spMenu__navItem__child">
                  <a href="<?php echo esc_url( home_url('service') ); ?>#service03" class="l-spMenu__navLink">民泊申請</a>
                </li>
              </ul>
              <li class="l-spMenu__navItem">
                <a href="<?php echo esc_url( home_url('price') ); ?>" class="l-spMenu__navLink">価格</a>
              </li>
              <li class="l-spMenu__navItem">
                <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-spMenu__navLink">お知らせ</a>
              </li>
              <li class="l-spMenu__navItem">
                <a href="<?php echo esc_url( home_url('company') ); ?>" class="l-spMenu__navLink">会社概要</a>
              </li>
              <li class="l-spMenu__navItem">
                <a href="<?php echo esc_url( home_url('faq') ); ?>" class="l-spMenu__navLink">よくある質問</a>
              </li>
              <li class="l-spMenu__navItem">
                <a href="<?php echo esc_url( home_url('sitemap') ); ?>" class="l-spMenu__navLink">サイトマップ</a>
              </li>
              <li class="l-spMenu__navItem">
                <a href="<?php echo esc_url( home_url('privacy-policy') ); ?>" class="l-spMenu__navLink">プライバシポリシー</a>
              </li>
            </ul>
          </nav>
          <div class="c-listcontact__wrap">
            <p class="c-listContact__subTitle">CONTACT</p>
            <h2 class="c-listContact__title">お問い合わせ</h2>
            <p class="c-listContact__text">
                ご質問などありましたらお気軽にお問い合わせください
              </p>
            <a href="<?php echo esc_url( home_url('contact') ); ?>" class="c-btn -contact">お問い合わせフォームへ</a>
            <div class="c-listContact__telDetail">
              <p class="c-listContact__text -tel">お電話でのお問い合わせ</p>
              <div class="c-listContact__tel">
                <div class="c-listContact__telWrap">
                  <a href="tel:0123-456-789">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listContact__tel_icon.svg'); ?>" width="16" height="23.54" loading="lazy" alt="電話のアイコン" class="c-listContact__telIcon" />
                    0123-456-789​
                  </a>
                  <span>（平日00:00〜00:00）</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /header-sp-menu -->
      <!-- bg-black -->
      <div class="l-spMenu__bg"></div>
      <!-- /bg-black -->