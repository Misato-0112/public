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
                    <h1 class="section-title page-title"><span class="section-title__main page-title__main">Works</span><span class="page-title__main--small">&nbsp;-&nbsp;Detail</span><span class="section-title__sub page-title__sub">制作実績詳細</span></h1>
                    <article id="<?php the_ID(); ?>" <?php post_class('post'); ?>>
                        <div class="works-detail__wrapper">
                            <div class="works-detail__pic">
                                <div class="works-detail__images">
                                    <?php $works__images = get_field('works__images');
                                    $works__images_url = $works__images['sizes']['large']; ?>
                                    <img src="<?php echo $works__images_url; ?>" alt="">
                                </div>
                                <?php if (get_field('works__images_02')) : ?>
                                    <div class="works-detail__images">
                                        <?php $works__images_02 = get_field('works__images_02');
                                        $works__images_02_url = $works__images_02['sizes']['large']; ?>
                                        <img src="<?php echo $works__images_02_url; ?>" alt="">
                                    </div>
                                <?php else : ?>
                                <?php endif; ?>
                                <?php if (get_field('works__images_03')) : ?>
                                    <div class="works-detail__images">
                                        <?php $works__images_03 = get_field('works__images_03');
                                        $works__images_03_url = $works__images_03['sizes']['large']; ?>
                                        <img src="<?php echo $works__images_03_url; ?>" alt="">
                                    </div>
                                <?php else : ?>
                                <?php endif; ?>
                            </div>
                            <div class=" works-detail__content">
                                <div class="works-detail__header">
                                    <h2 class="works__title works-detail__title"><span><?php the_title(); ?></span></h2>
                                </div>
                                <div class="works__label works-detail__label">
                                    <?php $categories = get_the_category();
                                    if ($categories):
                                    ?>
                                        <div class="works__category">
                                            <?php if (!empty($categories = get_the_category())): ?>
                                                <?php foreach ($categories as $category):
                                                    $class = 'works__category-' . sanitize_html_class($category->slug) . ' works__category-item'; ?>
                                                    <span class="<?php echo esc_attr($class); ?>">
                                                        <?php echo esc_html($category->name); ?>
                                                    </span>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php $tags = get_the_tags();
                                    if ($tags):
                                    ?>
                                        <div class="works__tag">
                                            <?php if (!empty($tags = get_the_tags())): ?>
                                                <?php foreach ($tags as $tag):
                                                    $class = 'works__tag-' . sanitize_html_class($tag->slug) . ' works__tag-item'; ?>
                                                    <span class="<?php echo esc_attr($class); ?>">
                                                        <?php echo esc_html($tag->name); ?>
                                                    </span>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (has_category('need_pass')) : ?>
                                        <p class="works-detail__category-need_pass-message">
                                            ※こちらは限定公開のため参考サムネイル画像が表示されています。リンクから詳細をご覧いただく際にID・パスワードが必要となりますので、閲覧をご希望の方は<a class="message-link" href="/contact">こちら</a>からお問い合わせください。
                                        </p>
                                    <?php endif; ?>
                                    <?php if (get_field('works__link-url')) : ?>
                                        <div class="works-detail__link">
                                            <img class="works-detail__link-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/works/link.svg" alt="">
                                            <a class="works-detail__link-url" href="<?php the_field('works__link-url'); ?>"><?php the_field('works__link-url'); ?></a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="works-detail__content-text">
                                    <?php the_content(); ?>
                                    <?php if (get_field('works__demo-annotation')) : ?>
                                        <p class="works-detail__demo-annotation"><?php the_field('works__demo-annotation'); ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- ページネーション -->
                    <?php
                    // カスタム投稿タイプ 'works' の前後の投稿リンクを表示
                    $prev_post = get_adjacent_post(false, '', true, 'category'); // 前の投稿を取得
                    $next_post = get_adjacent_post(false, '', false, 'category'); // 次の投稿を取得
                    ?>

                    <div class="pagination single-pagination">
                        <?php if (!empty($prev_post)) : ?>
                            <a class="pagination__prev" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                                <i class="pagination__icon ti ti-arrow-left"></i> 前の記事
                            </a>
                        <?php else : ?>
                            <span class="pagination__prev disabled">
                                <i class="pagination__icon ti ti-arrow-left"></i> 前の記事
                            </span>
                        <?php endif; ?>

                        <a href=" /works" class="more__button">一覧へ</a>

                        <?php if (!empty($next_post)) : ?>
                            <a class="pagination__next" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                                次の記事 <i class="pagination__icon ti ti-arrow-right"></i>
                            </a>
                        <?php else : ?>
                            <span class="pagination__next disabled">
                                次の記事 <i class="pagination__icon ti ti-arrow-right"></i>
                            </span>
                        <?php endif; ?>
                    </div>


                </div>
            </section>
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>