<!-- header呼び出し -->
<?php get_header(); ?>
<!-- main -->
<main class="l-main">
  <article>
    <!-- page-hero -->
    <header class="l-pageHero">
      <h1 class="l-pageHero__title">NEWS</h1>
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
    <section class="p-news__sec-news l-page__section">
      <div class="l-container w800">
        <h2 class="l-page__title fadein"><?php single_cat_title(); ?></h2>
        <?php get_template_part('loop-content'); ?>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>