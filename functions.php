<?php
//テーマのセットアップ
// HTML5でマークアップさせる
add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
]);
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');
// WordPressのナビゲーションメニューを非表示
add_filter('show_admin_bar', '__return_false');

// JS・CSSファイルを読み込む
function add_files() {
	// WordPress提供のjquery.jsを読み込まない
	wp_deregister_script('jquery');

	// jQueryの読み込み
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', "", "", false );

	// サイト共通のJSの読み込み
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '', true );

	// Tweenmax.min.js(Gsap)
	wp_enqueue_script( 'TweenMax', '//cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js', array( 'jquery' ), '', false );

    // slick.min.js
	wp_enqueue_script( 'Slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '', false );

    // jQuery.simpleTicker.js
	wp_enqueue_script( 'simpleTicker', get_template_directory_uri() . '/js/jquery.simpleTicker.js', array( 'jquery' ), '', false );

    // modernizr-custom.js
	wp_enqueue_script( 'modernizr-custom.js', get_template_directory_uri() . '/js/modernizr-custom.js', array( 'jquery' ), '', false );

	// サイト共通のCSSの読み込み
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', "", '' );

	// slick.css
	wp_enqueue_style( 'Slick', get_template_directory_uri() . '/css/slick.css', "", '' );

	// slick-theme.css
	wp_enqueue_style( 'Slick-theme', get_template_directory_uri() . '/css/slick-theme.css', "", '' );

	// jquery.simpleTicker.css
	wp_enqueue_style( 'Slick-theme', get_template_directory_uri() . '/css/jquery.simpleTicker.css', "", '' );
}
add_action('wp_enqueue_scripts', 'add_files');

// OGP設定
function my_meta_ogp()
{
    if (is_front_page() || is_home() || is_singular()) {
        /*初期設定*/

        // 画像 （アイキャッチ画像が無い時に使用する代替画像URL）
        $ogp_image = '../img/ogp_thumb@2x.jpg';
        // Twitterのアカウント名 (@xxx)
        $twitter_site = '@Twitterアカウント名';
        // Twitterカードの種類（summary_large_image または summary を指定）
        $twitter_card = 'summary_large_image';
        // Facebook APP ID
        $facebook_app_id = '';

        /*初期設定 ここまで*/

        global $post;
        $ogp_title = '';
        $ogp_description = '';
        $ogp_url = '';
        $html = '';
        if (is_singular()) {
            // 記事＆固定ページ
            setup_postdata($post);
            $ogp_title = $post->post_title;
            $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
            $ogp_url = get_permalink();
            wp_reset_postdata();
        } elseif (is_front_page() || is_home()) {
            // トップページ
            $ogp_title = get_bloginfo('name');
            $ogp_description = get_bloginfo('description');
            $ogp_url = home_url();
        }

        // og:type
        $ogp_type = is_front_page() || is_home() ? 'website' : 'article';

        // og:image
        if (is_singular() && has_post_thumbnail()) {
            $ps_thumb = wp_get_attachment_image_src(
                get_post_thumbnail_id(),
                'full'
            );
            $ogp_image = $ps_thumb[0];
        }

        // 出力するOGPタグをまとめる
        $html = "\n";
        $html .=
            '<meta property="og:title" content="' .
            esc_attr($ogp_title) .
            '">' .
            "\n";
        $html .=
            '<meta property="og:description" content="' .
            esc_attr($ogp_description) .
            '">' .
            "\n";
        $html .= '<meta property="og:type" content="' . $ogp_type . '">' . "\n";
        $html .=
            '<meta property="og:url" content="' .
            esc_url($ogp_url) .
            '">' .
            "\n";
        $html .=
            '<meta property="og:image" content="' .
            esc_url($ogp_image) .
            '">' .
            "\n";
        $html .=
            '<meta property="og:site_name" content="' .
            esc_attr(get_bloginfo('name')) .
            '">' .
            "\n";
        $html .=
            '<meta name="twitter:card" content="' . $twitter_card . '">' . "\n";
        $html .=
            '<meta name="twitter:site" content="' . $twitter_site . '">' . "\n";
        $html .= '<meta property="og:locale" content="ja_JP">' . "\n";

        if ($facebook_app_id != '') {
            $html .=
                '<meta property="fb:app_id" content="' .
                $facebook_app_id .
                '">' .
                "\n";
        }

        echo $html;
    }
}

// headタグ内にOGPを出力する
add_action('wp_head', 'my_meta_ogp');


// ページャー
function pagination($pages = '',$paged, $range = 2){
$showitems = ($range * 1)+1;
global $paged;
if(empty($paged)) $paged = 1;
if($pages == ''){
global $wp_query;
$pages = $wp_query->max_num_pages;
if(!$pages){
$pages = 1;
}
}
    if (1 !== $pages) {
        //２ページ以上の時
        echo '<nav>';
        if ($paged > 1) {
            // 「‹」１ページ前へ戻るリンクを表示
            echo '<a href="',
                get_pagenum_link($paged - 1),
                '" class="c-listNews__paginationItem -arrow">
                        <img
                          src="http://localhost:10008/wp-content/themes/%E8%97%A4%E5%B2%A1%E8%A1%8C%E6%94%BF%E6%9B%B8%E5%A3%AB%E4%BA%8B%E5%8B%99%E6%89%80/img/c-listNews__pagination_prev_arrow.svg"
                          width="10.36"
                          height="18.32"
                          loading="lazy"
                          alt="前のページへの矢印"
                          class="c-listNews__paginationItem__arrow"
                        />',
                $text_before,
                '</a>';
        }
        for ($i = 1; $i <= $pages; $i++) {
            if (1 !=$pages &&( !($i>= $paged+$range+1 || $i <= $paged-$range-1) || $pages <=$showitems )){
                if ($paged === $i) {
                    echo '<a href="" class="c-listNews__paginationItem -current"
                        >',
                        $i,
                        '</a>'; // 現在のページの数字
                } else {
                    echo '<a href="',
                        get_pagenum_link($i),
                        '" class="c-listNews__paginationItem">',
                        $i,
                        '</a>';
                }
            }
        }
        if (($paged + 2 ) < $pages) {
                       // [...] 表示
          echo '<a href="" class="c-listNews__paginationItem -not-numbering">...</a>';
          echo '<a href="',
                        get_pagenum_link($pages),
                        '" class="c-listNews__paginationItem">',
                        $pages,
                        '</a>';
        }
  if ($paged < $pages) {
            // 「›」１ページ後へ進むリンクを表示
            echo '<a href="',
                get_pagenum_link($paged + 1),
                '" class="c-listNews__paginationItem -arrow">
                        <img
                          src="http://localhost:10008/wp-content/themes/%E8%97%A4%E5%B2%A1%E8%A1%8C%E6%94%BF%E6%9B%B8%E5%A3%AB%E4%BA%8B%E5%8B%99%E6%89%80/img/c-listNews__pagination_next_arrow.svg"
width="10.36"
height="18.32"
loading="lazy"
alt="次のページへの矢印"
class="c-listNews__paginationItem__arrow"/>',
$text_next,
'</a>';
}
echo '</nav>';
}
}
// 固定ページの画像パスを短くするコード
function imagepassshort($arg)
{
$content = str_replace(
'"img/',
'"' . get_bloginfo('template_directory') . '/img/',
$arg
);
return $content;
}
add_action('the_content', 'imagepassshort');

// サイドバー有効化
function set_widgets()
{
register_sidebar([
'name' => 'サイドバー',
'id' => 'sidebar',
'before_widget' => '<div class="%2$s l-single-sidebar__widgetInner">',
  'after_widget' => '</div>',
'before_title' => '
<h2 class="l-single-sidebar__widgetTitle">',
        'after_title' => '</h2>',
]);
}
add_action('widgets_init', 'set_widgets');


// Contact Form 7 サンクスページ表示
add_action('wp_footer', 'add_thanks_page');
function add_thanks_page()
{
    echo <<<EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'http://codementor04.local/contact-thanks/'; /* 遷移先のURL */
}, false );
</script>
EOD;
}





  add_action('bcn_after_fill', 'bc_limit');
  function bc_limit ($trail) {
  $max = count($trail->breadcrumbs);
  for ($i = 2; $i

  < $max - 1; $i++) { unset($trail -> trail[$i]);
    }
    }