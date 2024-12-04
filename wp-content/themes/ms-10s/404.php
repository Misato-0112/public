<?php get_header(); ?>

<?php
// 現在のページがフロントページまたは 'contact' ページの場合
if (is_front_page() || is_page('contact')) {
    $main_class = 'main--height';
} else {
    $main_class = '';
}
?>

<main class="main <?php echo esc_attr($main_class); ?>">
    <section class="section">
        <div class="section__wrapper">
            <div class="section__header">
                <h2 class="section-title page-title"><span class="section-title__main">404 Not found</span><span class="section-title__sub">エラー</span></h2>
            </div>
            <div class="section__content">
                <p class="section__text--bold">お探しのページが見つかりませんでした。</p>
                <p>申し訳ございませんが、お探しのページは一時的にアクセスできない状況にあるか、移動もしくは削除された可能性があります。
                    <a class="active-link" href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。
                </p>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>