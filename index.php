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
    <div class="l-breadcrumbs l-container">
      <span class="l-breadcrumbs__item -top">
        <a href="<?php echo esc_url( home_url() ); ?>" class="l-breadcrumbs__itemLink">
          <span class="l-breadcrumbs__itemName"> TOP </span>
        </a>
      </span>
      <span class="l-breadcrumbs__item">
        <span class="l-breadcrumbs__itemName"> NEWS </span>
      </span>
    </div>
    <!-- /breadcrumbs -->
    <section class="p-news__sec-news l-page__section">
      <div class="l-container w800">
        <h2 class="l-page__title fadein">お知らせ一覧</h2>
        <?php get_template_part('loop-content'); ?>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>