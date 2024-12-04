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
                    <div class="section__header">
                        <h2 class="section-title page-title"><span class="section-title__main"><?php echo ucfirst(strtolower($post->post_name)); ?></span><span class="section-title__sub"><?php the_title(); ?></span></h2>
                    </div>
                </div>
                <div class="section__body">
                    <div class="section__content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php get_footer(); ?>