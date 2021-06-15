<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: SITEMAPページ
*/
?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero">
      <h1 class="l-pageHero__title"><?php the_title(); ?></h1>
    </header>
    <!-- /page-hero -->
    <!-- breadcrumbs -->
    <?php if (is_front_page()): ?>
    <?php else: ?>
    <div class="l-breadcrumbs l-container">
      <?php if (function_exists('bcn_display')) {
          bcn_display();
      } ?>
    </div>
    <?php endif; ?>
    <!-- /breadcrumbs -->
    <section class="p-sitemap__sec-sitemap l-page__section">
      <div class="l-container w912">
        <h2 class="l-page__title">サイトマップ</h2>
        <div class="l-page__sitemapWrap">
          <div class="l-page__sitemapBlock">
            <ul class="l-page__sitemapNav fadein">
              <li class="l-page__sitemapItem">
                <a href="<?php echo esc_url( home_url() ); ?>" class="l-page__sitemapLink">トップページ</a>
              </li>
              <li class="l-page__sitemapItem -sub">
                <a href="<?php echo esc_url( home_url('service') ); ?>" class="l-page__sitemapLink">サービス</a>
                <ul class="l-page__sitemapNav -sub">
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('service') ); ?>#service01" class="l-page__sitemapLink">IT法務</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('service') ); ?>#service02" class="l-page__sitemapLink">ビザ申請</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('service') ); ?>#service03" class="l-page__sitemapLink">民泊申請</a>
                  </li>
                </ul>
              </li>
              <li class="l-page__sitemapItem -sub">
                <a href="<?php echo esc_url( home_url('price') ); ?>" class="l-page__sitemapLink">価格</a>
                <ul class="l-page__sitemapNav -sub">
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('price') ); ?>#price01" class="l-page__sitemapLink">IT法務</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('price') ); ?>#price02" class="l-page__sitemapLink">ビザ申請</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('price') ); ?>#price03" class="l-page__sitemapLink">民泊申請</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="l-page__sitemapBlock">
            <ul class="l-page__sitemapNav fadein">
              <li class="l-page__sitemapItem -sub">
                <a href="<?php echo esc_url( home_url('company') ); ?>" class="l-page__sitemapLink">会社概要</a>
                <ul class="l-page__sitemapNav -sub">
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('company') ); ?>#company01" class="l-page__sitemapLink">代表挨拶</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('company') ); ?>#company02" class="l-page__sitemapLink">会社概要</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('company') ); ?>#company03" class="l-page__sitemapLink">沿革</a>
                  </li>
                </ul>
              </li>
              <li class="l-page__sitemapItem">
                <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-page__sitemapLink">お知らせ</a>
              </li>
            </ul>
          </div>
          <div class="l-page__sitemapBlock">
            <ul class="l-page__sitemapNav fadein">
              <li class="l-page__sitemapItem -sub">
                <a href="<?php echo esc_url( home_url('faq') ); ?>" class="l-page__sitemapLink">よくある質問</a>
                <ul class="l-page__sitemapNav -sub">
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('faq') ); ?>#faq01" class="l-page__sitemapLink">〇〇〇〇について</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('faq') ); ?>#faq02" class="l-page__sitemapLink">〇〇〇〇について</a>
                  </li>
                  <li class="l-page__sitemapItem">
                    <a href="<?php echo esc_url( home_url('faq') ); ?>#faq03" class="l-page__sitemapLink">〇〇〇〇について</a>
                  </li>
                </ul>
              </li>
              <li class="l-page__sitemapItem">
                <a href="<?php echo esc_url( home_url('contact') ); ?>" class="l-page__sitemapLink">お問い合わせ</a>
              </li>
              <li class="l-page__sitemapItem">
                <a href="<?php echo esc_url( home_url('privacy-policy') ); ?>" class="l-page__sitemapLink">プライバシーポリシー</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>