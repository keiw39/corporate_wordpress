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
    <section class="p-contact__sec-contact l-page__section -thanks">
      <div class="l-container w912">
        <h2 class="l-page__title">お問い合わせが完了しました</h2>
        <div class="l-page__contact-thanks">
          <p class="l-section__text">このたびはお問い合わせいただきありがとうございます。
          ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。</p>
          <p class="l-section__text">確認メールが届いていない場合には、メールアドレスが誤っているか、確認メールが迷惑メールフォルダ等に振り分けられている可能性がありますので、再度ご確認をお願いいたします。</p>
          <p class="l-section__text">なお、お問い合わせ内容につきましては、通常3営業日程度を目処に、弊社担当者よりご回答させていただきます。いましばらくお待ちくださいませ。</p>
          <p class="l-section__text">万一、ご回答メールが届かない場合は、送信トラブル等の可能性もありますので、大変お手数ではございますが、もう一度フォームよりお問い合わせいただくか、お電話にてお問い合わせをお願いいたします。</p>
          <p class="l-section__text">今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>
        </div>
        <a href="http://codementor04.local/" class="c-btn">TOP</a>
      </div>
    </section>
  </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>