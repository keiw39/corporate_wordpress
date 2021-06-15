<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: FAQページ
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
    <section class="p-faq__sec-faq">
      <div class="l-container">
        <div class="l-pageNav__navWrap">
          <nav class="l-pageNav__nav">
            <li class="l-pageNav__navItem">
              <a href="#faq01" class="l-pageNav__navLink">〇〇〇〇に<br class="u-hidden-md" />ついて</a>
            </li>
            <li class="l-pageNav__navItem">
              <a href="#faq02" class="l-pageNav__navLink">〇〇〇〇に<br class="u-hidden-md" />ついて</a>
            </li>
            <li class="l-pageNav__navItem">
              <a href="#faq03" class="l-pageNav__navLink">〇〇〇〇に<br class="u-hidden-md" />ついて</a>
            </li>
          </nav>
        </div>
      </div>
      <div class="l-container w1200">
        <ul class="l-page__contentsInner">
          <li id="faq01" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">01</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">〇〇〇〇について</h2>
              </div>
            </div>
            <div class="l-page__faqWrap">
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
            </div>
          </li>
          <li id="faq02" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">02</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">〇〇〇〇について</h2>
              </div>
            </div>
            <div class="l-page__faqWrap">
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
            </div>
          </li>
          <li id="faq03" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">03</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">〇〇〇〇について</h2>
              </div>
            </div>
            <div class="l-page__faqWrap">
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
              <details class="c-listFaq__accordionItem fadein">
                <summary class="c-listFaq__accordionQuestion">
                  〇〇〇〇は〇〇〇〇ですか？
                </summary>
                <p class="c-listFaq__accordionAnswer">
                          そんなことはありません。私たちでは○○を用意して、○○しているから、○○のようなお客さまにも安心してお使いいただけます。そんなことはありません。
                        </p>
              </details>
            </div>
          </li>
        </ul>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>