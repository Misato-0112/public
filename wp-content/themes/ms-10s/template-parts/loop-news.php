<article id="post-<?php the_ID(); ?>" <?php post_class('news__list-item'); ?>>
    <a href="<?php the_permalink(); ?>" class="news__link">
        <div class="news__label">
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