<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: PRICEページ
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
    <section class="p-price__sec-price">
      <div class="l-container">
        <div class="l-pageNav__navWrap">
          <nav class="l-pageNav__nav">
            <li class="l-pageNav__navItem">
              <a href="#price01" class="l-pageNav__navLink">IT法務</a>
            </li>
            <li class="l-pageNav__navItem">
              <a href="#price02" class="l-pageNav__navLink">ビザ申請</a>
            </li>
            <li class="l-pageNav__navItem">
              <a href="#price03" class="l-pageNav__navLink">民泊申請</a>
            </li>
          </nav>
        </div>
      </div>
      <div class="l-container w1200">
        <ul class="l-page__contentsInner">
          <li id="price01" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">01</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">IT法務</h2>
                <p class="l-page__contentsText">
                          IT法務顧問など継続的にリーガルチェッ
                          ク、法務サポートを行います。
                        </p>
              </div>
            </div>
            <div class="l-page__priceWrap">
              <ul class="l-page__price01Wrap fadein">
                <li class="l-page__priceItem">
                  <p class="l-page__priceText">初期費用</p>
                  <p class="l-page__priceText">50,000<span>円</span></p>
                  <p class="l-page__priceText">(税抜)</p>
                </li>
                <li class="l-page__priceItem">
                  <p class="l-page__priceText">月額費用</p>
                  <p class="l-page__priceText">15,000<span>円</span></p>
                  <p class="l-page__priceText">(税抜)</p>
                </li>
                <li class="l-page__priceItem">
                  <p class="l-page__priceText">オプション費用</p>
                </li>
              </ul>
            </div>
          </li>
          <li id="price02" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">02</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">ビザ申請</h2>
                <p class="l-page__contentsText">
                          ビザ申請時の入局管理局面接の立会いもご依頼があればお受けいたします。
                        </p>
              </div>
            </div>
            <div class="l-page__priceWrap">
              <table class="l-page__priceTable fadein">
                <tr class="l-page__priceTitle__row">
                  <th class="l-page__priceTh">業務内容</th>
                  <th class="l-page__priceTh">項目タイトル</th>
                  <th class="l-page__priceTh">値段</th>
                </tr>
                <tr class="l-page__priceRow">
                  <td class="l-page__priceTd">
                    <span>業務内容タイトル</span>
                  </td>
                  <td class="l-page__priceTd -first">　</td>
                  <td class="l-page__priceTd">10,000<span>円</span></td>
                </tr>
                <tr class="l-page__priceRow">
                  <td class="l-page__priceTd">
                    <span>業務内容タイトル</span>
                  </td>
                  <td class="l-page__priceTd">　</td>
                  <td class="l-page__priceTd">14,000<span>円</span></td>
                </tr>
                <tr class="l-page__priceRow">
                  <td class="l-page__priceTd">
                    <span>業務内容タイトル</span>
                  </td>
                  <td class="l-page__priceTd">　</td>
                  <td class="l-page__priceTd">18,000<span>円</span></td>
                </tr>
                <tr class="l-page__priceRow">
                  <td class="l-page__priceTd">
                    <span>業務内容タイトル</span>
                  </td>
                  <td class="l-page__priceTd">
                    <p>20,000<span>円</span></p>
                    　
                  </td>
                  <td class="l-page__priceTd">22,000<span>円</span></td>
                </tr>
                <tr class="l-page__priceRow">
                  <td class="l-page__priceTd">
                    <span>業務内容タイトル</span>
                  </td>
                  <td class="l-page__priceTd">　</td>
                  <td class="l-page__priceTd">26,000<span>円</span></td>
                </tr>
                <tr class="l-page__priceRow">
                  <td class="l-page__priceTd">
                    <span>業務内容タイトル</span>
                  </td>
                  <td class="l-page__priceTd">　</td>
                  <td class="l-page__priceTd">34,000<span>円</span></td>
                </tr>
              </table>
            </div>
          </li>
          <li id="price03" class="l-page__contentsItem">
            <div class="l-page__contentsHeader fadein">
              <div class="l-page__contentsNo">03</div>
              <div class="l-page__contentsTitle__wrap">
                <h2 class="l-page__contentsTitle">民泊申請</h2>
                <p class="l-page__contentsText">
                          住宅宿泊事業届等の申請など色々なご提案ができます。
                        </p>
              </div>
            </div>
            <div class="l-page__priceWrap">
              <h3 class="l-page__priceTitle fadein">
                        [例.01]○○○○で○○○を利用する場合
                      </h3>
              <ul class="l-page__priceContents fadein">
                <li class="l-page__priceExample">
                  <p>項目タイトル</p>
                  <div>
                    <p>1,000円×50ユーザー</p>
                    <p>50,000円</p>
                  </div>
                </li>
                <li class="l-page__priceExample">
                  <p>項目タイトル</p>
                  <div>
                    <p>2,000円×30ユーザー</p>
                    <p>60,000円</p>
                  </div>
                </li>
              </ul>
              <p class="l-page__priceTotal fadein">
                        <span>合計</span>
                        110,000
                        <span>円</span>
                      </p>
            </div>
            <div class="l-page__priceWrap">
              <h3 class="l-page__priceTitle fadein">
                        [例.02]○○○○で○○○を利用する場合
                      </h3>
              <ul class="l-page__priceContents fadein fadein">
                <li class="l-page__priceExample">
                  <p>項目タイトル</p>
                  <div>
                    <p>1,000円×50ユーザー</p>
                    <p>50,000円</p>
                  </div>
                </li>
                <li class="l-page__priceExample">
                  <p>項目タイトル</p>
                  <div>
                    <p>2,000円×30ユーザー</p>
                    <p>60,000円</p>
                  </div>
                </li>
              </ul>
              <p class="l-page__priceTotal fadein">
                        <span>合計</span>
                        110,000
                        <span>円</span>
                      </p>
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