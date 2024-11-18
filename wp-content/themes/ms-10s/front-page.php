<?php get_header(); ?>

<main>
    <?php if (is_home()): ?>
        <div class="cover">
            <div class="cover__inner">
                <p class="cover__title"><span class="cover__title--big">M</span>s-</s-><span class="cover__title--small">10</span>'s <span class="cover__title--br">works is...</span></p>
            </div>
        </div>
    <?php endif; ?>
    <section id="service">
        <div class="section__wrapper">
            <h2 class="section-title"><span class="section-title__main">Service</span><span class="section-title__sub">サービス</span></h2>
        </div>
    </section>
    <?php if (have_posts()): ?>
        <section id="news">
            <div class="section__wrapper">
                <h2 class="section-title"><span class="section-title__main">News</span><span class="section-title__sub">お知らせ</span></h2>
                <div class="news__list">
                    <!-- <?php query_posts('posts_per_page=3'); ?> -->
                    <?php while (have_posts()): the_post(); ?>
                        <section id="post-<?php the_ID(); ?>" <?php post_class('news__list-item'); ?>>
                            <a href="<?php the_permalink(); ?>" class="news__link">
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
                                <p class="news__title"><?php the_title(); ?></p>
                            </a>
                        </section>
                    <?php endwhile; ?>
                </div>
                <a href="" class="more__button">More</a>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php get_footer(); ?>