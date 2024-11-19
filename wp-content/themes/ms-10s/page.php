<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <main>
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
        </main>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>