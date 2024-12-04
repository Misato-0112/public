</main>
<!-- お問い合わせフォーム -->
<?php if (is_front_page() || is_page('contact')) : ?>
<?php else : ?>
    <div class="contact-form">
        <p class="contact-form__title">ご依頼・ご相談はこちらから</p>
        <a class="contact-form__button contact__button" href="/contact">Contact</a>
    </div>
<?php endif; ?>

<!-- フッター -->
<footer class="footer">
    <div class="to-top-button">
        <a class="to-top-button__link" href="#">
            <img class="to-top-button__link-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/arrow_up_white.svg" alt="">
        </a>
    </div>
    <div class="footer__inner">
        <span class="footer__copy">© 2024 Ms-10's works.</span>
    </div>
</footer>
<!-- swiper、vivis、JQuary、js読み込みはfunctions.phpで行う -->
<?php wp_footer(); ?>
</body>

</html>