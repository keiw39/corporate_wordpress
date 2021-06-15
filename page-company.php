<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: COMPANYページ
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
    <section class="p-company__sec-company">
      <div class="l-container">
        <div class="l-pageNav__navWrap">
          <nav class="l-pageNav__nav">
            <li class="l-pageNav__navItem">
              <a href="#company01" class="l-pageNav__navLink">代表<br class="u-hidden-md" />ご挨拶</a>
            </li>
            <li class="l-pageNav__navItem">
              <a href="#company02" class="l-pageNav__navLink">会社概要</a>
            </li>
            <li class="l-pageNav__navItem">
              <a href="#company03" class="l-pageNav__navLink">沿革</a>
            </li>
          </nav>
        </div>
      </div>
      <div class="l-container w1200">
        <ul class="l-page__contentsInner">
          <li id="company01" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">01</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">代表ご挨拶</h2>
              </div>
            </div>
            <div class="l-page__companyWrap">
              <div class="l-page__companyInner">
                <div class="l-page__companyImg__wrap fadein">
                  <picture>
                    <source srcset="
                                <?php echo esc_url( get_template_directory_uri() . '/img/l-page__companyImg__img_pc@2x.jpg.webp');?>
                              " media="(min-width: 768px)" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-page__companyImg__img_pc@2x.jpg');?>" media="(min-width: 768px)" type="image/jpg" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-page__companyImg__img@2x.jpg.webp');?>" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-page__companyImg__img@2x.jpg');?>" type="image/jpg" />
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-page__companyImg__img@2x.jpg');?>" width="280" height="150" loading="lazy" alt="代表「藤岡 雅也」の画像" class="l-page__companyImg__img" />
                  </picture>
                </div>
                <div class="l-page__chiefDetail">
                  <div class="l-page__chiefDetail__wrap">
                    <p class="l-page__chiefPosition fadein">代表</p>
                    <div class="l-page__chiefInfo">
                      <h3 class="l-page__chiefName fadein">藤岡 雅也</h3>
                      <ul class="l-page__chiefSocial">
                        <li class="l-page__chiefSocial__item fadein">
                          <a href="" class="l-page__chiefSocial__link">
                            <i class="fab fa-twitter"></i>
                          </a>
                        </li>
                        <li class="l-page__chiefSocial__item fadein">
                          <a href="" class="l-page__chiefSocial__link">
                            <i class="fab fa-facebook"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <p class="l-page__chiefText fadein">
                              〇〇〇〇年に〇〇〇〇大学〇〇〇部を卒業。説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。<br />
                              説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります説明テキストが入ります。
                            </p>
                    <ol class="l-page__chiefBio fadein">
                      <li class="l-page__chiefBio__detail">
                        〇〇〇〇年　株式会社〇〇〇〇入社
                      </li>
                      <li class="l-page__chiefBio__detail">
                        〇〇〇〇年　株式会社〇〇〇〇入社
                      </li>
                      <li class="l-page__chiefBio__detail">
                        〇〇〇〇年　株式会社〇〇〇〇入社
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li id="company02" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">02</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">会社概要</h2>
              </div>
            </div>
            <div class="l-page__companyWrap">
              <div class="l-page__companyInner">
                <div class="l-page__companyDetail">
                  <table class="l-page__companyTable">
                    <tbody>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">商号</th>
                        <td class="l-page__companyTd">
                          藤岡行政書士事務所
                        </td>
                      </tr>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">行政書士番号</th>
                        <td class="l-page__companyTd">1234567890123</td>
                      </tr>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">設立</th>
                        <td class="l-page__companyTd">
                          0000年00月00日
                        </td>
                      </tr>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">所在地</th>
                        <td class="l-page__companyTd">
                          <p>〒234-0013</p>
                          <p>京都府京都市伏見区淀水垂町509-16</p>
                          <a href="" class="-map">googlemap</a>
                        </td>
                      </tr>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">アクセス</th>
                        <td class="l-page__companyTd">
                          JR南武線：溝ノ口駅
                        </td>
                      </tr>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">TEL</th>
                        <td class="l-page__companyTd">
                          <a href="tel:0000-0000-0000" class="-tel" target="_blank">0000-0000-0000[代表]</a>
                        </td>
                      </tr>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">FAX</th>
                        <td class="l-page__companyTd">
                          0000-0000-0000[代表]
                        </td>
                      </tr>
                      <tr class="l-page__companyRow fadein">
                        <th class="l-page__companyTh">E-mail</th>
                        <td class="l-page__companyTd">
                          sample@mailaddress.com
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </li>
          <li id="company03" class="l-page__contentsItem">
            <div class="l-page__contentsHeader">
              <div class="l-page__contentsNo">03</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle fadein">沿革</h2>
              </div>
            </div>
            <div class="l-page__companyWrap">
              <div class="l-page__companyInner">
                <div class="l-page__companyHistory">
                  <dl class="l-page__companyHistory-list fadein">
                    <dt>1960年<br class="u-hidden-md" />11月</dt>
                    <dd>
                      テキストが入りますテキストが入りますテキストが入ります
                    </dd>
                  </dl>
                  <dl class="l-page__companyHistory-list fadein">
                    <dt>1972年<br class="u-hidden-md" />3月</dt>
                    <dd>テキストが入りますテキストが入ります</dd>
                  </dl>
                  <dl class="l-page__companyHistory-list fadein">
                    <dt>1994年<br class="u-hidden-md" />5月</dt>
                    <dd>
                      テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                    </dd>
                  </dl>
                  <dl class="l-page__companyHistory-list fadein">
                    <dt>2005年<br class="u-hidden-md" />10月</dt>
                    <dd>
                      テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります
                    </dd>
                  </dl>
                  <dl class="l-page__companyHistory-list fadein">
                    <dt>2013年<br class="u-hidden-md" />9月</dt>
                    <dd>テキストが入りますテキストが入ります</dd>
                  </dl>
                  <dl class="l-page__companyHistory-list fadein">
                    <dt>2020年<br class="u-hidden-md" />2月</dt>
                    <dd>テキストが入りますテキストが入ります</dd>
                  </dl>
                </div>
              </div>
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