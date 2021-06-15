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
        <a href="<?php echo esc_url( home_url() ); ?>" class="l-breadcrumbs__itemLink">
          <?php if (!is_category() && has_category()): ?>
          <span class="l-breadcrumbs__itemName">
            <?php echo get_the_category_list( ' ' ); ?>
          </span>
          <?php endif; ?>
        </a>
      </span>
      <span class="l-breadcrumbs__item">
        <span class="l-breadcrumbs__itemName"> <?php the_title(); ?></span>
      </span>
    </div>
    <!-- /breadcrumbs -->
    <section class="p-single__sec-single l-page__section">
      <div class="l-container w1200">
        <div class="l-single__container">
          <div class="l-single-content__wrap">
            <main class="l-single-content__main">
              <?php if (have_posts()): ?>
              <?php while (have_posts()):
                  the_post(); ?>
              <article class="l-single-content__article">
                <header class="l-single-content__header">
                  <h1 class="l-single-content__entryTitle fadein">
                  <?php the_title(); ?>
                  </h1>
                  <div class="l-single-content__entryDetail">
                    <time class="l-single-content__entryDate fadein">
                      <?php the_time('Y.n.j（D）'); ?>
                    </time>
                    <span class="l-single-content__entryLabel fadein">
                      <?php if (!is_category() && has_category()): ?>
                      <a href="<?php the_permalink(); ?>" class="l-single-content__entryLabel__link">
                        <?php echo get_the_category_list( ' ' ); ?>
                      </a>
                      <?php endif; ?>
                    </span>
                  </div>
                  <figre class="l-single-content__entryThumb fadein">
                    <?php the_post_thumbnail(); ?>
                  </figre>
                </header>
                <div class="l-single-content__entry-content fadein">
                  <?php the_content(); ?>
                  <?php
              endwhile; ?>
                  <?php else: ?>
                  <p>コンテンツがありません</p>
                </div>
                <?php endif; ?>
              </article>
              <div class="l-single__pagination fadein">
                <span class="l-single__pagination__prev">
                  <a href="" class="l-single__pagination__link -prev"><?php previous_post_link(
                      '%link',
                      'PREV'
                  ); ?>
                  </a>
                </span>
                <span class="l-single__pagination__backtolist">
                  <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-single__pagination__link -back">BACK TO <br class="u-hidden-md" />LIST</a>
                </span>
                <span class="l-single__pagination__next">
                  <a href="" class="l-single__pagination__link -next"><?php next_post_link(
                      '%link',
                      'NEXT'
                  ); ?></a>
                </span>
              </div>
            </main>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>