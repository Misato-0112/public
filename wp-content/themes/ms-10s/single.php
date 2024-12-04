<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
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
                    <h1 class="section-title page-title"><span class="section-title__main page-title__main">News</span><span class="page-title__main--small">&nbsp;-&nbsp;Detail</span><span class="section-title__sub page-title__sub">お知らせ詳細</span></h1>
                    <article id="<?php the_ID(); ?>" <?php post_class('post'); ?>>
                        <div class="news-detail__wrapper">
                            <div class="news-detail__header">
                                <div class=" news__label">
                                    <time class="news__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <?php $categories = get_the_category();
                                    if ($categories):
                                    ?>
                                        <div class="news__category">
                                            <?php if (!empty($categories = get_the_category())): ?>
                                                <?php foreach ($categories as $category):
                                                    $class = 'news__category-' . sanitize_html_class($category->slug) . ' news__category-item'; ?>
                                                    <span class="<?php echo esc_attr($class); ?>">
                                                        <?php echo esc_html($category->name); ?>
                                                    </span>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <h2 class="news__title"><span><?php the_title(); ?></span></h2>
                            </div>
                            <div class="news-detail__content">
                                <div class="news-detail__content-text">
                                    <?php the_content(); ?>
                                </div>
                                <div class="news-detail__thumbnail">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'news-detail__thumbnail-image')); ?>
                                    <?php else: ?>
                                        <img class="news-detail__thumbnail-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news_no_image.png" alt="No Image">
                                    <?php endif; ?>
                                </div>
                            </div>
                    </article>
                    <!-- ページネーション -->
                    <?php if (is_singular('post')) : ?>
                        <div class="pagination single-pagination">
                            <?php
                            // 前の投稿リンク
                            $prev_post = get_previous_post();
                            if (!empty($prev_post)) : ?>
                                <a class="pagination__prev" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                    <i class="pagination__icon ti ti-arrow-left"></i> 前の記事
                                </a>
                            <?php else : ?>
                                <span class="pagination__prev disabled">
                                    <i class="pagination__icon ti ti-arrow-left"></i> 前の記事
                                </span>
                            <?php endif; ?>

                            <a href="/news" class="more__button">一覧へ</a>

                            <?php
                            // 次の投稿リンク
                            $next_post = get_next_post();
                            if (!empty($next_post)) : ?>
                                <a class="pagination__next" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                                    次の記事 <i class="pagination__icon ti ti-arrow-right"></i>
                                </a>
                            <?php else : ?>
                                <span class="pagination__next disabled">
                                    次の記事 <i class="pagination__icon ti ti-arrow-right"></i>
                                </span>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>