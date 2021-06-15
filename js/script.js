// マウスカーソル
var cursor = $('.p-cursor'),
  follower = $('.p-cursor__follower'),
  cWidth = 8, //カーソルの大きさ
  fWidth = 50, //フォロワーの大きさ
  delay = 3, //数字を大きくするとフォロワーがより遅れて来る
  mouseX = 0, //マウスのX座標
  mouseY = 0, //マウスのY座標
  posX = 0, //フォロワーのX座標
  posY = 0; //フォロワーのX座標

//カーソルの遅延アニメーション
//ほんの少しだけ遅延させる 0.001秒
TweenMax.to({}, 0.001, {
  repeat: -1,
  onRepeat: function () {
    posX += (mouseX - posX) / delay;
    posY += (mouseY - posY) / delay;

    TweenMax.set(follower, {
      css: {
        left: posX - fWidth / 2,
        top: posY - fWidth / 2,
      },
    });

    TweenMax.set(cursor, {
      css: {
        left: mouseX - cWidth / 2,
        top: mouseY - cWidth / 2,
      },
    });
  },
});

//マウス座標を取得
$(document).on('mousemove', function (e) {
  mouseX = e.pageX;
  mouseY = e.pageY;
});

$('a').on({
  mouseenter: function () {
    cursor.addClass('is-active');
    follower.addClass('is-active');
  },
  mouseleave: function () {
    cursor.removeClass('is-active');
    follower.removeClass('is-active');
  },
});

$('.p-home__mv').on({
  mouseenter: function () {
    cursor.addClass('is-active');
    follower.addClass('is-active-mv');
  },
  mouseleave: function () {
    cursor.removeClass('is-active');
    follower.removeClass('is-active-mv');
  },
});

$('.p-home__mv__newsLink').on({
  mouseenter: function () {
    cursor.addClass('is-active');
    follower.addClass('is-active-news');
    follower.removeClass('is-active-mv');
  },
  mouseleave: function () {
    cursor.removeClass('is-active');
    follower.removeClass('is-active-news');
    follower.addClass('is-active-mv');
  },
});

$('a.-contact').on({
  mouseenter: function () {
    cursor.addClass('is-active');
    follower.addClass('is-active-contact');
  },
  mouseleave: function () {
    cursor.removeClass('is-active');
    follower.removeClass('is-active-contact');
  },
});

$('.c-listcontact__wrap').on({
  mouseenter: function () {
    cursor.addClass('is-active-footer');
    follower.addClass('is-active-footer');
  },
  mouseleave: function () {
    cursor.removeClass('is-active-footer');
    follower.removeClass('is-active-footer');
  },
});

$('.l-desktopMenu__navItem,.l-footer__navItem,.l-header__logoLink').on({
  mouseenter: function () {
    cursor.addClass('is-active');
    follower.addClass('is-active-menu');
  },
  mouseleave: function () {
    cursor.removeClass('is-active');
    follower.removeClass('is-active-menu');
  },
});

// スムーススクロールの設定
$(function () {
  // #で始まるアンカーをクリックした場合に処理
  $('a[href^="#"]')
    .not('.class')
    .not('#js-tab-menu a')
    .click(function () {
      // スクロールの速度
      var speed = 200; // ミリ秒
      // アンカーの値取得
      var href = $(this).attr('href');
      // 移動先を取得
      var target = $(href == '#' || href == '' ? 'html' : href);
      // 移動先を数値で取得
      var position = target.offset().top - 100;
      // スムーススクロール
      $('body,html').animate({ scrollTop: position }, speed, 'swing');
      return false;
    });
});

// 360px以下のviewportの設定
!(function () {
  const viewport = document.querySelector('meta[name="viewport"]');
  function switchViewport() {
    const value =
      window.outerWidth > 360
        ? 'width=device-width,initial-scale=1'
        : 'width=360';
    if (viewport.getAttribute('content') !== value) {
      viewport.setAttribute('content', value);
    }
  }
  addEventListener('resize', switchViewport, false);
  switchViewport();
})();

// humburger menu 開閉
$(
  (function () {
    $('#js-hamburger__toggle').on('click', function () {
      $('#js-hamburger__toggle').toggleClass('is-active');
      $('.l-spMenu').toggleClass('is-active');
      $('.l-header').toggleClass('is-active');
      $('.l-spMenu__bg').toggleClass('is-active');
      $('.l-header').toggleClass('header-is-active');
      $('.l-header__logoWrap').toggleClass('header-is-active');
      $('.l-header__logoImg').toggleClass('header-is-active');
      $('.l-header__wrap').toggleClass('header-is-active');
    });
  })()
);

// spMenu 開閉
$(
  (function () {
    $('.l-spMenu__closeToggle').on('click', function () {
      $('#js-hamburger__toggle').toggleClass('is-active');
      $('.l-hamburger__toggleSpan').toggleClass('is-preparation');
      $('.l-hamburger__toggleSpan').toggleClass('is-active');
      $('.l-spMenu').toggleClass('is-active');
    });
  })()
);

// メニュー外をクリックした後にメニューを閉じる
$(
  (function () {
    $('.l-spMenu__bg').on('click', function () {
      $('.l-spMenu').removeClass('is-active');
      $('.l-header').removeClass('is-active');
      $('.l-spMenu__bg').removeClass('is-active');
      $('.l-header').removeClass('header-is-active');
      $('.l-header__logoWrap').removeClass('header-is-active');
      $('.l-header__logoImg').removeClass('header-is-active');
      $('.l-header__wrap').removeClass('header-is-active');
    });
  })()
);

// footerメニュー(child)開閉
$(
  (function () {
    $('.l-footer__navLink.-child').on('click', function () {
      $('.l-footer__navLink.-child').toggleClass('is-active');
      $('.l-footer__navList__child').toggleClass('is-active');
    });
  })()
);

// header-spメニュー(child)開閉
$(
  (function () {
    $('.l-spMenu__navLink.-child').on('click', function () {
      $('.l-spMenu__navLink.-child').toggleClass('is-active');
      $('.l-spMenu__navList__child').toggleClass('is-active');
    });
  })()
);

// header メガメニュー制御
$(function () {
  $('.dropdown-toggle,.l-dropDown-menu__wrap').hover(function () {
    $('.l-dropDown-menu__wrap').toggleClass('drop-down');
  });
});

$(function () {
  $('.dropdown-toggle').hover(function () {
    $('.dropdown-toggle').toggleClass('border');
  });
});

$(function () {
  $('.l-desktopMenu__navLink').hover(function () {
    $('.l-header,.l-desktopMenu__navLink').toggleClass('drop-down');
  });
});

$(function () {
  $('.l-dropDown-menu__wrap').hover(function () {
    $('.l-header').toggleClass('drop-down');
    $('.l-desktopMenu__navLink').toggleClass('drop-down');
    $('.dropdown-toggle').toggleClass('border');
  });
});

// mvh(メインヴィジュアル)を超えるとヘッダーの背景色変更
var mvh = $('.p-home__mv,.l-pageHero').height();

$(window).scroll(function () {
  var top = $(window).scrollTop();
  /* ウィンドウサイズが 1024px以下の場合のコードをここに */
  if (window.matchMedia('(max-width: 1024px)').matches) {
  } else {
    if (mvh < top) {
      $('.l-header').css('background-color', '#fff');
      $('.l-desktopMenu__navLink').css('color', '#014bb4');
    } else {
      /* ウィンドウサイズが 1024px以上の場合のコードをここに */
      $('.l-header').css('background-color', 'unset');
      $('.l-desktopMenu__navLink').css('color', '#fff');
    }
  }
});

// ローディングアニメーション
$(window).on('load', function () {
  //=====ここからローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる
  $('#p-loading')
    .delay(1000)
    .fadeOut('slow', function () {
      //ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述

      $('body').addClass('appear'); //フェードアウト後bodyにappearクラス付与
    });
  //=====ここまでローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる

  //=====ここから背景が伸びた後に動かしたいJSをまとめたい場合は
  $('.p-loading__bg').on('animationend', function () {
    //この中に動かしたいJSを記載
  });
  //=====ここまで背景が伸びた後に動かしたいJSをまとめる
});

// スクロール量に応じた文字スクロール
//テキスト横移動
$(window).on('scroll', function () {
  var scrollTop = $(window).scrollTop();
  var bgPosition = scrollTop / 7; //スクロール後のポジションを指定（値を大きくすると移動距離が小さくなる）

  if (bgPosition) {
    $('.l-section__sideScroll__text').css('left', '+' + bgPosition + 'px');
  }
});

// モーダルウィンドウ開閉
// ウィンドウを開く
$('.js-modal-open').each(function () {
  $(this).on('click', function () {
    var target = $(this).data('target');
    var modal = document.getElementById(target);
    $(modal).fadeIn(300);
    return false;
  });
});

// ウィンドウを閉じる
$('.js-modal-close').on('click', function () {
  $('.c-modal').fadeOut(300);
  return false;
});

// フェードインアニメーション
$('.fadein').css('visibility', 'hidden');
$(window).on('load scroll', function () {
  var windowHeight = $(window).height(),
    topWindow = $(window).scrollTop();
  $('.fadein').each(function () {
    var targetPosition = $(this).offset().top;
    if (topWindow > targetPosition - windowHeight + 100) {
      $(this).addClass('l-fade-in');
    }
  });
});

// スライドインアニメーション
function slideAnime() {
  //====左に動くアニメーションここから===
  $('.leftAnime').each(function () {
    var elemPos = $(this).offset().top - 50;
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if (scroll >= elemPos - windowHeight) {
      //左から右へ表示するクラスを付与
      //テキスト要素を挟む親要素（左側）とテキスト要素を元位置でアニメーションをおこなう
      $(this).addClass('l-slide-anime__left-right'); //要素を左枠外にへ移動しCSSアニメーションで左から元の位置に移動
      $(this).children('.leftAnimeInner').addClass('l-slide-anime__right-left'); //子要素は親要素のアニメーションに影響されないように逆の指定をし元の位置をキープするアニメーションをおこなう
    } else {
      //左から右へ表示するクラスを取り除く
      $(this).removeClass('l-slide-anime__left-right');
      $(this)
        .children('.leftAnimeInner')
        .removeClass('l-slide-anime__right-left');
    }
  });
}

// 画面をスクロールをしたら動かしたい場合の記述
$(window).scroll(function () {
  slideAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面をスクロールをしたら動かしたい場合の記述

// 画面が読み込まれたらすぐに動かしたい場合の記述
$(window).on('load', function () {
  slideAnime(); /* アニメーション用の関数を呼ぶ*/
}); // ここまで画面が読み込まれたらすぐに動かしたい場合の記述

// slick01(スタッフメンバー一覧)の設定
$(function () {
  function sliderSetting() {
    var width = $(window).width();

    if (width <= 768) {
      //768px以上はスライダー表示
      $('.e-slick01').not('.slick-initialized').slick({
        dots: false,
        arrows: true,
        autoplay: false,
        centerMode: true,
        centerPadding: '15%',
        slidesToShow: 1,
        slidesToScroll: 1,
      });
    } else {
      $('.slide.slick-initialized').slick('.unslick');
    }
  }
  sliderSetting();
  $(window).resize(function () {
    sliderSetting();
  });
});

// FAQ sectionのタブ切り替え
$('#js-tab-menu li a').on('click', function () {
  $('#js-tab-box div').hide();
  $($(this).attr('href')).fadeToggle();
  return false;
});

// よくある質問のタブ切り替え
function GethashID(hashIDName) {
  if (hashIDName) {
    //タブ設定
    $('.c-listFaq__menuWrap li')
      .find('a')
      .each(function () {
        //タブ内のaタグ全てを取得
        var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得
        if (idName == hashIDName) {
          //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
          var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
          $('.c-listFaq__menuWrap li').removeClass('is-active'); //タブ内のliについているactiveクラスを取り除き
          $(parentElm).addClass('is-active'); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
          //表示させるエリア設定
          $('.c-listFaq__faqBox').removeClass('is-active'); //もともとついているis-activeクラスを取り除き
          $(hashIDName).addClass('is-active'); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加
        }
      });
  }
}

//タブをクリックしたら
$('.c-listFaq__menuWrap a').on('click', function () {
  var idName = $(this).attr('href'); //タブ内のリンク名を取得
  GethashID(idName); //設定したタブの読み込みと
  return false; //aタグを無効にする
});

// 上記の動きをページが読み込まれたらすぐに動かす
$(window).on('load', function () {
  $('.c-listFaq__menuWrap li:first-of-type').addClass('is-active'); //最初のliにactiveクラスを追加
  $('.c-listFaq__menuWrap:first-of-type').addClass('is-active'); //最初の.areaにis-activeクラスを追加
  var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
  GethashID(hashName); //設定したタブの読み込み
});

// コンタクトフォームのバリデーション
$('input,textarea').on('blur', function () {
  var error; // エラー用の変数を定義
  if ($(this).val() === '') {
    // この要素のvalueが空文字だったらエラー
    error = true;
  }
  if (error) {
    // エラーが見つかった場合
    if (!$(this).next('div.l-form__error-message').length) {
      // この要素の後続要素が存在しない場合
      $(this).after(
        '<div class="l-form__error-message">すべて必須記入となっています</div>'
      ); // この要素の後にエラーメッセージを挿入
      return false;
    }
  } else {
    // エラーがなかった場合
    $(this).next('div.l-form__error-message').remove(); // この要素の後続要素を削除
  }
});
