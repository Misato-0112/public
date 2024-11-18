<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <main>
            <div class="section__wrapper">
                <h2 class="section-title page-title"><span class="section-title__main page-title__main">News</span><span class="page-title__main--small">&nbsp;-&nbsp;Detail</span><span class="section-title__sub page-title__sub">お知らせ詳細</span></h2>
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
                            <h3 class="news__title"><span><?php the_title(); ?></span></h3>
                        </div>
                        <div class="news-detail__content">
                            <div class="news-detail__content-text">
                                <?php the_content(); ?>
                            </div>
                            <div class="news-detail__thumbnail">
                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                    <img class="news-detail__thumbnail-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news_no_image.png" alt="No Image">
                                <?php endif; ?>
                            </div>
                        </div>
                </article>
            <?php endwhile; ?>
        <?php endif; ?>
            </div>
        </main>
        <?php get_footer(); ?>