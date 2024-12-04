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
    <section class="section archive-page">
        <div class="section__wrapper">
            <h1 class="section-title page-title">
                <span class="section-title__main page-title__main">News</span>
                <span class="page-title__main--small">&nbsp;-&nbsp;Archive</span>
                <span class="section-title__sub page-title__sub">お知らせ一覧</span>
            </h1>
            <?php if (have_posts()) : ?>
                <div class="post__list news__list">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/loop-news'); ?>
                        <!-- loop-newsテンプレートパーツ読み込み -->
                        <div class="post__excerpt news__excerpt">
                            <p class="post__excerpt-text"><?php echo get_the_excerpt(); ?></p>
                        </div>
                        </a>
                        </article>
                    <?php endwhile; ?>
                </div>

                <!-- ページネーション -->
                <?php
                // 現在のページ番号を取得
                $paged = max(1, get_query_var('paged'));

                // 総ページ数を取得
                $total_pages = $wp_query->max_num_pages;

                // ページネーションを表示する条件
                if ($total_pages > 0) {
                    echo '<div class="pagination">';

                    // 「前へ」リンク
                    if ($paged > 1) {
                        echo '<a class="pagination__prev" href="' . get_pagenum_link($paged - 1) . '"><i class="pagination__icon ti ti-arrow-left"></i>前へ</a>';
                    } else {
                        echo '<span class="pagination__prev disabled"><i class="pagination__icon ti ti-arrow-left"></i>前へ</span>';
                    }

                    // ページ番号リンクの生成
                    echo '<ul class="pagination__numbers">';

                    for ($i = 1; $i <= $total_pages; $i++) {
                        if ($i == $paged) {
                            echo '<li class="pagination__number current"><span>' . $i . '</span></li>';
                        } else {
                            echo '<li class="pagination__number"><a href="' . get_pagenum_link($i) . '" class="pagination__number-link">' . $i . '</a></li>';
                        }
                    }

                    echo '</ul>';

                    // 「次へ」リンク
                    if ($paged < $total_pages) {
                        echo '<a class="pagination__next" href="' . get_pagenum_link($paged + 1) . '">次へ<i class="pagination__icon ti ti-arrow-right"></i></a>';
                    } else {
                        echo '<span class="pagination__next disabled">次へ<i class="pagination__icon ti ti-arrow-right"></i></span>';
                    }

                    echo '</div>';
                }
                ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
        </div>
    </section>
    <?php get_footer(); ?>