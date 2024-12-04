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

    <?php if (is_home()): ?>
        <div class="cover">
            <div class="cover__inner">
                <p class="cover__title"><span class="cover__title--big">M</span>s-</s-><span class="cover__title--small">10</span>'s <span class="cover__title--br">works is...</span></p>
            </div>
        </div>
    <?php endif; ?>

    <?php get_footer(); ?>