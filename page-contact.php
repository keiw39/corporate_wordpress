<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: CONTACTページ
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
    <section class="p-contact__sec-contact l-page__section">
      <div class="l-container w912">
        <h2 class="l-page__title">お気軽にお申し込み下さい</h2>
        <p class="l-page__subTitle">※すべて必須記入となっています</p>
        <div class="l-page__contactWrap">
          <?php echo do_shortcode(
              '[contact-form-7 id="2235" title="お問い合わせ"]'
          ); ?>
        </div>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>