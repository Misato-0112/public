<?php
function my_enqueue_scripts()
{
    // CSSリセットの読み込み
    wp_enqueue_style('ress', 'https://unpkg.com/ress@4.0.0/dist/ress.min.css', array(), null);

    // jQueryはWordPressのデフォルトを使用
    wp_enqueue_script('jquery');
    // wp_enqueue_script('jquery'); は削除しても良い

    // Googleフォントの読み込み
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap', array(), null);

    // tabler iconの読み込み
    wp_enqueue_style('tabler-icons', 'https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@3.8.0/dist/tabler-icons.min.css', array(), null);

    // SwiperのCSSとJSの読み込み
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // vivusの読み込み
    wp_enqueue_script('vivus', 'https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js', array(), null, true);

    // メインCSSの読み込み
    wp_enqueue_style('ms-10s-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), null);

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
    $name = 'News';
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

// 投稿記事アーカイブページの設定を「有効」にする
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; //任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

// アーカイブページ(お知らせ一覧)で表示する投稿数を変更
function modify_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query() && $query->is_archive()) {
        $query->set('posts_per_page', 5); // 1ページに表示する投稿数を指定
    }
}
add_action('pre_get_posts', 'modify_posts_per_page');

// Worksアーカイブページ(制作実績一覧)で表示する投稿数を変更
function modify_works_posts_per_page($query)
{
    if (!is_admin() && $query->is_main_query() && $query->is_post_type_archive('works')) {
        // URL パラメータ "posts_per_page" を確認
        if (isset($_GET['posts_per_page'])) {
            $posts_per_page = intval($_GET['posts_per_page']);
            $query->set('posts_per_page', $posts_per_page);
        } else {
            // デフォルト値（フォールバック）
            $query->set('posts_per_page', 9);
        }
    }
}
add_action('pre_get_posts', 'modify_works_posts_per_page');
