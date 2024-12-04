<article id="post-<?php the_ID(); ?>" <?php post_class('works__list-item'); ?>>
    <a href="<?php the_permalink(); ?>" class="works__link">
        <div class="works__thumbnail">
            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('medium', array('class' => 'works__thumbnail-image')); ?>
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-image.png" alt="No Image">
            <?php endif; ?>
        </div>
        <div class="works__header">
            <p class="works__title"><?php the_title(); ?></p>
            <div class="works__label">
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
            </div>
        </div>