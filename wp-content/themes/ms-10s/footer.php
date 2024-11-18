<div class="to-top-button">
    <div class="to-top-button__wrapper">
        <a class="to-top-button__link" href="/">
            <img class="to-top-button__link-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/arrow_up_white.svg" alt="">
        </a>
    </div>
</div>
<footer class="footer">
    <div class="footer__inner">
        <span class="footer__copy">© 2024 Ms-10's works.</span>
    </div>
</footer>

<!-- swiperの読み込み -->
<?php
wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'); ?>

<?php wp_footer(); ?>
</body>

</html>