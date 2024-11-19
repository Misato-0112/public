<?php
function my_enqueue_scripts()
{
    // CSSリセットの読み込み
    wp_enqueue_style('ress', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css', array(), null);

    // Googleフォントの読み込み
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);

    // メインCSSの読み込み
    wp_enqueue_style('ms-10s-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), null);

    // Swiperの読み込み
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // jQueryはWordPressのデフォルトを使用
    // wp_enqueue_script('jquery'); は削除しても良い

    // カスタムスクリプトの読み込み (依存関係として 'jquery' を指定)
    wp_enqueue_script(
        'ms-10s-main-js',
        get_template_directory_uri() . '/assets/script/main.js',
        array('jquery'),
        null,
        true // フッターで読み込む
    );
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

// <title>タグを出力する
add_theme_support('title-tag');

// <title>の区切り文字を変更する
add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}

// カスタムメニュー機能を使用可能にする
add_theme_support('menus');

// 投稿ページのラベル変更
function change_menulabel()
{
    global $menu;
    global $submenu;
    $name = 'お知らせ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name . '一覧';
    $submenu['edit.php'][10][0] = '新しい' . $name;
}

function change_objectlabel()
{
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name . 'の新規追加';
    $labels->edit_item = $name . 'の編集';
    $labels->new_item = '新規' . $name;
    $labels->view_item = $name . 'を表示';
    $labels->search_items = $name . 'を検索';
    $labels->not_found = $name . 'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'change_objectlabel');
add_action('admin_menu', 'change_menulabel');

// アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
