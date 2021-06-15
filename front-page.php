<!-- header呼び出し -->
<?php get_header(); ?>
<!-- main -->
<main class="l-main">
  <article>
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
    <div id="modal01" class="c-modal js-modal">
      <div class="c-modal__bg js-modal-close"></div>
      <div class="c-modal__wrap">
        <div class="c-modal__item">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/z8CF7CJutVw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <a class="c-modal__closeBtn js-modal-close" href="">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-modalClose_icon.svg');?>" width="34" height="34" loading="lazy" alt="モーダル閉じるボタン" class="c-modalClose_img" />
        </a>
      </div>
    </div>
    <a href="" class="js-modal-open p-home__mv__videoLink" data-target="modal01">
      <div class="p-home__mv">
        <div class="p-home__mv__textWrap">
          <div>
            <p class="p-home__mv__catchTitle">
                      <span class="l-slide-in leftAnime">
                        <span class="l-slide-in__inner leftAnimeInner"
                          >WEB INTEGRATION &</span
                        >
                        <br />
                        <span class="l-slide-in__inner leftAnimeInner"
                          >LEGAL AFFAIRS</span
                        >
                      </span>
                    </p>
            <span class="p-home__mv__subTitle">
              <span class="l-slide-in leftAnime">
                <span class="l-slide-in__inner leftAnimeInner">
                  新しい価値を想像する
                </span>
              </span>
            </span>
          </div>
        </div>
        <a href="" class="js-modal-open p-home__mv__videoIcon" data-target="modal01">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-home__mv__video_icon.svg');?>" width="75" height="75" loading="lazy" alt="ビデオ再生ボタン" class="p-home__mv__videoIcon__img" />
        </a>
        <div class="p-home__mv__news ticker" rel="roll">
          <ul>
            <?php
            $paged = get_query_var('paged') ?: 1;
            $args = [
                'post_type' => 'post', //投稿タイプ設定
                'posts_per_page' => 3, // 取得記事数
                'paged' => $paged,
            ];

            $my_query = new WP_Query($args);
            if ($my_query->have_posts()):
                while ($my_query->have_posts()):
                    $my_query->the_post(); ?>
            <li>
              <a href="<?php the_permalink(); ?>" class="p-home__mv__newsLink">
                <div class="p-home__mv__newsInner">
                  <?php if (!is_category() && has_category()): ?>
                  <p class="p-home__mv__newsCat">
                     <?php
                     $postcat = get_the_category();
                     echo $postcat[0]->name;
                     ?>
                  </p>
                  <?php endif; ?>
                  <div class="p-home__mv__newsDetail">
                    <time class="p-home__mv__newsDate">
                      <?php the_time('Y.n.j'); ?>
                    </time>
                    <p class="p-home__mv__newsTitle">
                     <?php the_title(); ?>
                    </p>
                  </div>
                </div>
              </a>
            </li>
            <?php
                endwhile; ?>
            <?php
            endif;
            ?>
          </ul>
          <div class="p-home__mv__newsIcon__wrap">
            <div class="p-home__mv__newsIcon">
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/p-home__mv__newsIcon_arrow.svg'); ?>" width="20" height="20" loading="lazy" alt="ニュースアイコン矢印" class="p-home__mv__newsIcon__img" />
            </div>
          </div>
        </div>
        <p class="c-scroll-line">
          <span class="c-scroll-text"></span>
        </p>
      </div>
    </a>
    <section id="message" class="p-home__sec-message l-section">
      <p class="l-section__sideScroll__text">WEB INTEGRATION</p>
      <div class="l-container">
        <div class="l-section__messageWrap">
          <h2 class="l-section__message fadein">
                    IT専門の行政書士たちが<br />
                    あなたのビジネスを守ります
                  </h2>
        </div>
        <div class="l-contents__wrap">
          <div class="l-contents__imgWrap fadein">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_01_pc@2x.jpg.webp');?>" media="(min-width: 768px)" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_01_pc@2x.jpg');?>" media="(min-width: 768px)" type="image/jpg" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_01@2x.jpg.webp');?>" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_01@2x.jpg');?>" type="image/jpg" />
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_01@2x.jpg');?>" width="640" height="400" loading="lazy" alt="サポートする行政書士" class="l-contents__img" />
            </picture>
          </div>
          <div class="l-contents__detailWrap fadein">
            <div>
              <p class="l-contents__subTitle fadein">MESSAGE</p>
              <h2 class="l-contents__mainTitle fadein">
                        Webを通して人々の心や生活が豊かになるよう、法律の面からサポートいたします
                      </h2>
              <p class="l-section__text fadein">
                        当事務所ではIT法務（契約書作成や各種許認可手続きなど）を中心に、海外技術者のビザ手続き、そしてwebを介した新たなビジネスモデルとして評判の民泊（登録手続き）など、広くwebに関する手続きのサポートを行ってまいります。
                      </p>
              <a href="<?php echo esc_url( home_url('company') ); ?>" class="c-btn fadein">View More</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="service" class="p-home__sec-service l-section">
      <div class="l-container w1200">
        <div class="l-contents__wrap">
          <p class="l-section__subTitle fadein">SERVICE</p>
          <h2 class="l-section__mainTitle fadein">サービス内容</h2>
          <ul class="c-listService__itemWrap">
            <li class="l-contents__item fadein">
              <figure class="c-listService__itemInner">
                <div class="l-contents__imgWrap">
                  <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_02@2x.jpg.webp');?>" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_02@2x.jpg');?>" type="image/jpg" />
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_02@2x.jpg');?>" width="350" height="230" loading="lazy" alt="IT法務の画像" class="l-contents__img" />
                  </picture>
                </div>
                <figcaption>
                  <h3 class="l-section__itemTitle">IT法務</h3>
                  <p class="l-section__text">
                            当事務所では、新規サービスの適法性判断、利用規約の作成、主要契約書の作成・レビュー、紛争対応などの総合的な法務サービスを提供しています。<br />
                            まずは気軽にご相談ください。
                          </p>
                </figcaption>
              </figure>
            </li>
            <li class="l-contents__item fadein">
              <figure class="c-listService__itemInner">
                <div class="l-contents__imgWrap">
                  <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_03@2x.jpg.webp');?>" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_03@2x.jpg');?>" type="image/jpg" />
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_03@2x.jpg');?>" width="350" height="230" loading="lazy" alt="ビザ申請の画像" class="l-contents__img" />
                  </picture>
                </div>
                <figcaption>
                  <h3 class="l-section__itemTitle">ビザ申請</h3>
                  <p class="l-section__text">
                            初めに無料相談を受けてから、後は全て私どもが手続きをさせていただきます。<br />
                            ビザ申請時の入局管理局面接の立会いもご依頼があればお受けいたします。
                          </p>
                </figcaption>
              </figure>
            </li>
            <li class="l-contents__item fadein">
              <figure class="c-listService__itemInner">
                <div class="l-contents__imgWrap">
                  <picture>
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_04@2x.jpg.webp');?>" type="image/webp" />
                    <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_04@2x.jpg');?>" type="image/jpg" />
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_04@2x.jpg');?>" width="350" height="230" loading="lazy" alt="民泊申請の画像" class="l-contents__img" />
                  </picture>
                </div>
                <figcaption>
                  <h3 class="l-section__itemTitle">民泊申請</h3>
                  <p class="l-section__text">
                            住宅宿泊管理業者の登録を受けようとする者は、住宅宿泊管理業者登録申請書に必要事項を記入の上、必要な添付書類と合わせて、国土交通大臣に提出する必要があります。
                          </p>
                </figcaption>
              </figure>
            </li>
          </ul>
          <a href="<?php echo esc_url( home_url('service') ); ?>" class="c-btn fadein">View More</a>
        </div>
      </div>
    </section>
    <section id="feature" class="p-home__sec-feature l-section">
      <div class="l-container w1200">
        <p class="l-section__subTitle fadein">FEATURE</p>
        <h2 class="l-section__mainTitle fadein">私たちの強み</h2>
        <div class="l-contents__wrap">
          <div class="l-contents__imgWrap fadein">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_05@2x.jpg.webp');?>" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_05@2x.jpg');?>" type="image/jpg" />
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_05@2x.jpg');?>" width="1656" height="1000" loading="lazy" alt="情報交換をしている画像" class="l-contents__img" />
            </picture>
          </div>
          <div class="l-contents__detailWrap fadein">
            <p class="l-contents__subTitle fadein">POINT.01</p>
            <h2 class="l-contents__mainTitle fadein fadein">
                      本社と現地法人の間の情報交換、交通整理をスムーズにします。
                    </h2>
            <p class="l-section__text fadein">
                      従業員一人の給与にも満たない顧問料で、取締役会議事録の作成からコンプライアンス委員会の役目まで覆う戦略的な法務部を提供致します。
                    </p>
          </div>
        </div>
        <div class="l-contents__wrap">
          <div class="l-contents__imgWrap fadein fadein fadein">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_06@2x.jpg.webp');?>" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_06@2x.jpg');?>" type="image/jpg" />
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_06@2x.jpg');?>" width="1656" height="1000" loading="lazy" alt="比較データの画像" class="l-contents__img" />
            </picture>
          </div>
          <div class="l-contents__detailWrap fadein">
            <p class="l-contents__subTitle fadein">POINT.02</p>
            <h2 class="l-contents__mainTitle fadein">
                      情報の正確性、日本法との比較、スピード感は日本基準です。
                    </h2>
            <p class="l-section__text fadein">
                      当事務所は、M&Aの中でも特殊な病院・社会福祉法人・介護事業等の買収・事業承継等を成功に導いた実績を有します。その他、学校法人や宗教法人等のM&Aも扱っており、弁護士が直接、承継先の選定からDDやクロージング等を統括して、
                      M&Aを積極的に推し進めて参ります。
                    </p>
          </div>
        </div>
        <div class="l-contents__wrap">
          <div class="l-contents__imgWrap fadein">
            <picture>
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_07@2x.jpg.webp');?>" type="image/webp" />
              <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_07@2x.jpg');?>" type="image/jpg" />
              <img src="<?php echo esc_url( get_template_directory_uri() . '/img/l-contents__img_07@2x.jpg');?>" width="1656" height="1000" loading="lazy" alt="クライアント様とのお打ち合わせ中の画像" class="l-contents__img" />
            </picture>
          </div>
          <div class="l-contents__detailWrap fadein">
            <p class="l-contents__subTitle fadein">POINT.03</p>
            <h2 class="l-contents__mainTitle fadein">
                      最低限のコストで、高いパフォーマンスを発揮いたします。
                    </h2>
            <p class="l-section__text fadein">
                      当弁護士事務所は、これまで国内最大級のサービサーの経験を生かし、通常は債務者が行う会社更生や民事再生の申立を、債権者の側から行い、スポンサーに入札させ、一挙に債権回収を図ることを手がけます。
                    </p>
          </div>
        </div>
      </div>
    </section>
    <section id="member" class="p-home__sec-member l-section">
      <div class="l-container w1200">
        <p class="l-section__subTitle fadein">MEMBER</p>
        <h2 class="l-section__mainTitle fadein">スタッフメンバー</h2>
      </div>
      <div class="l-container w1200">
        <ul class="e-slick01 c-listMember__slider">
          <li class="c-listMember__sliderItem fadein">
            <figure class="c-listMember__sliderItem__inner">
              <div class="c-listMember__sliderImg__wrap">
                <picture>
                  <source srcset="
                              <?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_01@2x.jpg.webp');?>
                            " type="image/webp" />
                  <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_01@2x.jpg');?>" type="image/jpg" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_01@2x.jpg');?>" width="720" height="960" loading="lazy" alt="山下 剛の画像" class="c-listMember__sliderImg" />
                </picture>
              </div>
              <figcaption class="c-listMember__detailInner">
                <h2 class="c-listMember__name">
                          山下 剛
                          <span>- Tsuyoshi Yamashita -</span>
                        </h2>
                <p class="c-listMember__detailText">
                          法的な観点のみではなく、実践的な観点から具体的なアドバイスを心がけています。
                        </p>
              </figcaption>
            </figure>
          </li>
          <li class="c-listMember__sliderItem fadein">
            <figure class="c-listMember__sliderItem__inner">
              <div class="c-listMember__sliderImg__wrap">
                <picture>
                  <source srcset="
                              <?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_02@2x.jpg.webp');?>
                            " type="image/webp" />
                  <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_02@2x.jpg');?>" type="image/jpg" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_02@2x.jpg');?>" width="720" height="960" loading="lazy" alt="福井 貴明の画像" class="c-listMember__sliderImg" />
                </picture>
              </div>
              <figcaption class="c-listMember__detailInner">
                <h2 class="c-listMember__name">
                          福井 貴明
                          <span>- Takaaki Fukui -</span>
                        </h2>
                <p class="c-listMember__detailText">
                          法的な観点のみではなく、実践的な観点から具体的なアドバイスを心がけています。
                        </p>
              </figcaption>
            </figure>
          </li>
          <li class="c-listMember__sliderItem fadein fadein fadein">
            <figure class="c-listMember__sliderItem__inner">
              <div class="c-listMember__sliderImg__wrap">
                <picture>
                  <source srcset="
                              <?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_03@2x.jpg.webp');?>
                            " type="image/webp" />
                  <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_03@2x.jpg');?>" type="image/jpg" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_03@2x.jpg');?>" width="720" height="960" loading="lazy" alt="木下 さゆりの画像" class="c-listMember__sliderImg" />
                </picture>
              </div>
              <figcaption class="c-listMember__detailInner">
                <h2 class="c-listMember__name">
                          木下 さゆり
                          <span>- Sayuri Kinoshita -</span>
                        </h2>
                <p class="c-listMember__detailText">
                          法的な観点のみではなく、実践的な観点から具体的なアドバイスを心がけています。
                        </p>
              </figcaption>
            </figure>
          </li>
          <li class="c-listMember__sliderItem fadein fadein">
            <figure class="c-listMember__sliderItem__inner">
              <div class="c-listMember__sliderImg__wrap">
                <picture>
                  <source srcset="
                              <?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_04@2x.jpg.webp');?>
                            " type="image/webp" />
                  <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_04@2x.jpg');?>" type="image/jpg" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_04@2x.jpg');?>" width="720" height="960" loading="lazy" alt="武内 麻美の画像" class="c-listMember__sliderImg" />
                </picture>
              </div>
              <figcaption class="c-listMember__detailInner">
                <h2 class="c-listMember__name">
                          武内 麻美
                          <span>- Asami Takeuchi -</span>
                        </h2>
                <p class="c-listMember__detailText">
                          法的な観点のみではなく、実践的な観点から具体的なアドバイスを心がけています。
                        </p>
              </figcaption>
            </figure>
          </li>
          <li class="c-listMember__sliderItem fadein">
            <figure class="c-listMember__sliderItem__inner">
              <div class="c-listMember__sliderImg__wrap">
                <picture>
                  <source srcset="
                              <?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_05@2x.jpg.webp');?>
                            " type="image/webp" />
                  <source srcset="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_05@2x.jpg');?>" type="image/jpg" />
                  <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listMember__sliderImg_05@2x.jpg');?>" width="720" height="960" loading="lazy" alt="政田 健二の画像" class="c-listMember__sliderImg" />
                </picture>
              </div>
              <figcaption class="c-listMember__detailInner">
                <h2 class="c-listMember__name">
                          政田 健二
                          <span>- Kenji Masada -</span>
                        </h2>
                <p class="c-listMember__detailText">
                          法的な観点のみではなく、実践的な観点から具体的なアドバイスを心がけています。
                        </p>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>