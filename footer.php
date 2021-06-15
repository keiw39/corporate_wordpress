      <!-- footer -->
      <footer class="l-footer">
        <div class="l-footer__inner">
          <div class="c-listcontact__wrap l-container">
            <p class="c-listContact__subTitle fadein">CONTACT</p>
            <h2 class="c-listContact__title fadein">お問い合わせ</h2>
            <p class="c-listContact__text fadein">
                ご質問などありましたらお気軽にお問い合わせください
              </p>
            <a href="<?php echo esc_url( home_url('contact') ); ?>" class="c-btn -contact fadein">お問い合わせフォームへ</a>
            <div class="c-listContact__telDetail">
              <p class="c-listContact__text -tel fadein">
                  お電話でのお問い合わせ
                </p>
              <div class="c-listContact__tel fadein">
                <div class="c-listContact__telWrap">
                  <a href="tel:0123-456-789">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/img/c-listContact__tel_icon.svg'); ?>" width="16" height="23.54" loading="lazy" alt="電話のアイコン" class="c-listContact__telIcon" />
                    0123-456-789​
                  </a>
                  <span>（平日00:00〜00:00）</span>
                </div>
              </div>
            </div>
          </div>
          <div class="l-footer__detailWrap">
            <div class="l-footer__company">
              <h1 class="l-footer__logoWrap">
                  <a href="<?php echo esc_url( home_url() ); ?>" class="l-footer__logoLink fadein">
                    <img
                      src="<?php echo esc_url( get_template_directory_uri() . '/img/l-header__logo_img.svg'); ?>"
                      width="49.47"
                      height="49.43"
                      loading="lazy"
                      alt="ロゴアイコン"
                      class="l-footer__logoImg"
                    />
                    <div class="l-footer__logoTitle">藤岡行政書士事務所</div>
                  </a>
                </h1>
              <p class="l-footer__companyAdress fadein">
                  〒234-0013<br />
                  京都府京都市伏見区淀水垂町509-16
                </p>
            </div>
            <nav class="l-footer__nav">
              <ul class="l-footer__navList fadein">
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url( home_url() ); ?>" class="l-footer__navLink">ホーム</a>
                </li>
                <li class="l-footer__navItem">
                  <a class="l-footer__navLink -child">サービス一覧</a>
                </li>
                <ul class="l-footer__navList__child">
                  <li class="l-footer__navItem__child">
                    <a href="<?php echo esc_url( home_url('service') ); ?>#service01" class="l-footer__navLink">IT法務</a>
                  </li>
                  <li class="l-footer__navItem__child">
                    <a href="<?php echo esc_url( home_url('service') ); ?>#service02" class="l-footer__navLink">ビザ申請</a>
                  </li>
                  <li class="l-footer__navItem__child">
                    <a href="<?php echo esc_url( home_url('service') ); ?>#service03" class="l-footer__navLink">民泊申請</a>
                  </li>
                </ul>
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url( home_url('price') ); ?>" class="l-footer__navLink">価格</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url( home_url('news') ); ?>" class="l-footer__navLink">お知らせ</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url( home_url('company') ); ?>" class="l-footer__navLink">会社概要</a>
                </li>
                <li class="l-footer__navItem">
                  <a href="<?php echo esc_url( home_url('faq') ); ?>" class="l-footer__navLink">よくある質問</a>
                </li>
                <div class="l-footer__navItem__wrap">
                  <li class="l-footer__navItem">
                    <a href="<?php echo esc_url( home_url('sitemap') ); ?>" class="l-footer__navLink">サイトマップ</a>
                  </li>
                  <li class="l-footer__navItem">
                    <a href="<?php echo esc_url( home_url('privacy-policy') ); ?>" class="l-footer__navLink">プライバシポリシー</a>
                  </li>
                </div>
              </ul>
            </nav>
          </div>
          <small class="l-footer__copy fadein">© 藤岡行政書士事務所 All Rights Reserved.</small>
        </div>
      </footer>
      <?php wp_footer(); ?>
      <!--システム・プラグイン用-->
      <!-- /footer -->
      </div>
      <script>
$(function() {
  $.simpleTicker($('.ticker'), {
    effectType: 'roll'
  });
});
      </script>
      <!-- detailsタグ(アコーディオン)のIE対応 -->
      <script src="//cdn.jsdelivr.net/npm/details-polyfill@1.2.0/index.min.js"></script>
      <!-- pictureタグのIE対応 -->
      <script src="https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement"></script>
      </div>
      </body>
      </html>