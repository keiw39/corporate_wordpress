<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: 404ページ
*/
?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero">
      <h1 class="l-pageHero__title">404</h1>
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
    <section class="p-404__sec-404 l-page__section">
      <div class="l-container w912">
        <h2 class="l-page__title fadein">申し訳ありません。
          <br>
          お探しのページが見つかりませんでした。</h2>
        <a href="<?php echo esc_url( home_url() ); ?>" class="c-btn fadein">TOPへ戻る</a>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>