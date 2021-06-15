<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: SERVICEページ
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
    <section class="p-service__sec-message">
      <p class="l-section__sideScroll__text">WEB INTEGRATION</p>
      <div class="l-container">
        <div class="l-section__messageWrap">
          <h2 class="l-section__message fadein">
                    制作会社での経歴を活かした<br />
                    ご提案ができます
                  </h2>
        </div>
        <div class="l-section__textWrap">
          <p class="l-section__text fadein">
                    私はこれまでにIT系企業においてweb制作、新規webサービスの立ち上げ、ファンクラブビジネスを経験し「webが持つ可能性」を信じるようになりました。<br />
                    「webが持つ可能性」とはwebを通して人々の心や生活がもっと豊かになっていくことです。<br />
                     当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。<br />
                  </p>
          <p class="l-section__text fadein">
                    新たなwebサービスが生まれ、そのサービスを利用することで多くの人々の心や生活が豊かになる。<br />
                    そしていつか日本が世界のIT分野をリードする日がくることを願っています。
                  </p>
        </div>
      </div>
    </section>
    <section class="p-service__sec-service">
      <div class="l-container w1200">
        <div id="service01" class="l-contents__wrap">
          <div class="l-contents__imgWrap fadein">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_01@2x.jpg.webp'); ?>" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_01@2x.jpg'); ?>" type="image/jpg" />
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_01@2x.jpg'); ?>" width="828" height="500" loading="lazy" alt="法務サービス開発の画面" class="l-contents__img" />
            </picture>
          </div>
          <div class="l-contents__detailWrap">
            <p class="l-contents__subTitle fadein">SERVICE.01</p>
            <h2 class="l-contents__mainTitle fadein">IT法務</h2>
            <p class="l-section__text fadein">
                      当事務所では、新規サービスの適法性判断、利用規約の作成、主要契約書の作成・レビュー、紛争対応などの総合的な法務サービスを提供しています。<br />
                      まずは気軽にご相談ください。
                    </p>
            <div class="c-listService__typeWrap">
              <h3 class="c-listService__typeTitle fadein">
                        ご用意するサービス
                      </h3>
              <ul class="c-listService__typeList fadein">
                <li class="c-listService__typeItem">
                  ・IT法務顧問サービス
                </li>
                <li class="c-listService__typeItem">
                  ・契約書リスク診断
                </li>
                <li class="c-listService__typeItem">
                  ・契約書ドラフト作成
                </li>
                <li class="c-listService__typeItem">
                  ・IT法務研修など
                </li>
              </ul>
            </div>
            <a href="<?php echo esc_url( home_url('price') ); ?>#price01" class="c-btn fadein">PRICE</a>
          </div>
        </div>
        <div id="service02" class="l-contents__wrap">
          <div class="l-contents__imgWrap fadein">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_02@2x.jpg.webp'); ?>" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_02@2x.jpg'); ?>" type="image/jpg" />
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_02@2x.jpg'); ?>" width="828" height="500" loading="lazy" alt="パスポートの画像" class="l-contents__img" />
            </picture>
          </div>
          <div class="l-contents__detailWrap">
            <p class="l-contents__subTitle fadein">SERVICE.02</p>
            <h2 class="l-contents__mainTitle fadein">ビザ申請</h2>
            <p class="l-section__text fadein">
                      初めに無料相談を受けてから、後は全て私どもが手続きをさせていただきます。<br />
                      ビザ申請時の入局管理局面接の立会いもご依頼があればお受けいたします。
                    </p>
            <div class="c-listService__typeWrap">
              <h3 class="c-listService__typeTitle fadein">
                        ご用意するサービス
                      </h3>
              <ul class="c-listService__typeList fadein">
                <li class="c-listService__typeItem">
                  ・ビザ取得・更新
                </li>
                <li class="c-listService__typeItem">・永住許可</li>
                <li class="c-listService__typeItem">・帰化申請</li>
                <li class="c-listService__typeItem">・国籍取得など</li>
              </ul>
            </div>
            <a href="<?php echo esc_url( home_url('price') ); ?>#price02" class="c-btn fadein">PRICE</a>
          </div>
        </div>
        <div id="service03" class="l-contents__wrap">
          <div class="l-contents__imgWrap fadein">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_03@2x.jpg.webp'); ?>" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_03@2x.jpg'); ?>" type="image/jpg" />
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-service__sec-service_img_03@2x.jpg'); ?>" width="828" height="500" loading="lazy" alt="宿泊施設の画像" class="l-contents__img" />
            </picture>
          </div>
          <div class="l-contents__detailWrap">
            <p class="l-contents__subTitle fadein">SERVICE.03</p>
            <h2 class="l-contents__mainTitle fadein">民泊申請</h2>
            <p class="l-section__text fadein">
                      住宅宿泊管理業者の登録を受けようとする者は、住宅宿泊管理業者登録申請書に必要事項を記入の上、必要な添付書類と合わせて、国土交通大臣に提出する必要があります。
                    </p>
            <div class="c-listService__typeWrap">
              <h3 class="c-listService__typeTitle fadein">
                        ご用意するサービス
                      </h3>
              <ul class="c-listService__typeList fadein">
                <li class="c-listService__typeItem">・要件調査</li>
                <li class="c-listService__typeItem">・面談相談</li>
                <li class="c-listService__typeItem">・申請手続</li>
                <li class="c-listService__typeItem">・契約終結</li>
              </ul>
            </div>
            <a href="<?php echo esc_url( home_url('price') ); ?>#price03" class="c-btn fadein">PRICE</a>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>