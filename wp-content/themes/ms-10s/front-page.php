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
    <section id="service" class="section">
        <div class="section__wrapper">
            <h2 class="section-title"><span class="section-title__main">Service</span><span class="section-title__sub">サービス</span></h2>
            <ul class="service__list">
                <li class="service__list-item">
                    <div class="service__icon">
                        <svg id="coding-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="vivus-icon icon icon-tabler icons-tabler-outline icon-tabler-code">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 8l-4 4l4 4" />
                            <path d="M17 8l4 4l-4 4" />
                            <path d="M14 4l-4 16" />
                        </svg>
                    </div>
                    <div class="service__list-item-header">
                        <h3 class="service__list-item-title">Coding</h3>
                        <p class="service__list-item-text">HTML／CSS／JQueryを使用して、ご用意いただいたウェブ・LPデザインをコーディングいたします。メンテナンス性を重視したSass利用も可能ですのでご相談ください。</p>
                    </div>
                </li>
                <li class="service__list-item">
                    <div class="service__icon">
                        <svg id="design-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="vivus-icon icon icon-tabler icons-tabler-outline icon-tabler-writing-sign">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 19c3.333 -2 5 -4 5 -6c0 -3 -1 -3 -2 -3s-2.032 1.085 -2 3c.034 2.048 1.658 2.877 2.5 4c1.5 2 2.5 2.5 3.5 1c.667 -1 1.167 -1.833 1.5 -2.5c1 2.333 2.333 3.5 4 3.5h2.5" />
                            <path d="M20 17v-12c0 -1.121 -.879 -2 -2 -2s-2 .879 -2 2v12l2 2l2 -2z" />
                            <path d="M16 7h4" />
                        </svg>
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M7 8l-4 4l4 4" />
                        <path d="M17 8l4 4l-4 4" />
                        <path d="M14 4l-4 16" />
                        </svg>
                    </div>
                    <div class="service__list-item-header">
                        <h3 class="service__list-item-title">Web Design</h3>
                        <p class="service__list-item-text">ウェブサイト、LP、バナーをデザイン段階から制作いたします。お好みのデザイン例をご用意ください。デザインカンプはブラウザアプリのFigmaの他、Adobe XD、Photoshopで作成可能です。</p>
                    </div>
                </li>
                <li class="service__list-item">
                    <div class="service__icon">
                        <svg id="wordpress-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="vivus-icon icon icon-tabler icons-tabler-outline icon-tabler-brand-wordpress">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M9.5 9h3" />
                            <path d="M4 9h2.5" />
                            <path d="M11 9l3 11l4 -9" />
                            <path d="M5.5 9l3.5 11l3 -7" />
                            <path d="M18 11c.177 -.528 1 -1.364 1 -2.5c0 -1.78 -.776 -2.5 -1.875 -2.5c-.898 0 -1.125 .812 -1.125 1.429c0 1.83 2 2.058 2 3.571z" />
                            <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                        </svg>
                    </div>
                    <div class="service__list-item-header">
                        <h3 class="service__list-item-title">WordPress</h3>
                        <p class="service__list-item-text">基本無料のオープンソースCMS（コンテンツマネジメントシステム）であるWordpressを使用し、お知らせや投稿などを簡単に管理できるウェブサイトを実装いたします。</p>
                    </div>
                </li>
                <li class="service__list-item">
                    <div class="service__icon">
                        <svg id="arch-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="vivus-icon icon icon-tabler icons-tabler-outline icon-tabler-building-arch">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 21l18 0" />
                            <path d="M4 21v-15a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v15" />
                            <path d="M9 21v-8a3 3 0 0 1 6 0v8" />
                        </svg>
                    </div>
                    <div class="service__list-item-header">
                        <h3 class="service__list-item-title">Architectual</h3>
                        <p class="service__list-item-text">建築用3D-CADのアーキトレンドを使用して戸建て・アパートの提案用画像を作成しています。平面図の他、内観・外観パース、立面図を差し込んだ提案用資料も作成可能です。
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section id="works" class="section">
        <div class="section__wrapper">
            <h2 class="section-title"><span class="section-title__main">Works</span><span class="section-title__sub">制作実績</span></h2>
            <?php
            // カスタム投稿タイプ 'works' から 'priority' カテゴリーを持つ投稿を最大6件取得
            $args = array(
                'post_type'      => 'works',
                'posts_per_page' => 6,
                'tax_query'      => array(
                    array(
                        'taxonomy' => 'category',
                        'field'    => 'slug',
                        'terms'    => 'priority',
                    ),
                ),
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : ?>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="swiper-slide">
                                <!-- loop-worksテンプレートパーツ読み込み -->
                                <?php get_template_part('template-parts/loop-works'); ?>
                                </a>
                                </article>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <!-- Swiperのページネーション -->
                    <div class="swiper-pagination"></div>
                </div>
            <?php
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <a href="/works" class="more__button">More</a>
        </div>
    </section>
    <div class="contact-form">
        <p class="contact-form__title">ご依頼・ご相談はこちらから</p>
        <a class="contact-form__button contact__button" href="/contact">Contact</a>
    </div>
    <?php if (have_posts()): ?>
        <section id="news" class="section">
            <div class="section__wrapper">
                <h2 class="section-title"><span class="section-title__main">News</span><span class="section-title__sub">お知らせ</span></h2>
                <div class="news__list">
                    <?php while (have_posts()): the_post(); ?>
                        <!-- loop-newsテンプレートパーツ読み込み -->
                        <?php get_template_part('template-parts/loop-news'); ?>
                        </a>
                        </article>
                    <?php endwhile; ?>
                </div>
                <a href="/news" class="more__button">More</a>
            </div>
        </section>
    <?php endif; ?>
    <section id="about" class="section">
        <div class="section__wrapper">
            <h2 class="section-title"><span class="section-title__main">About</span><span class="section-title__sub">私について</span></h2>
            <div class="about__content">
                <div class="about__image">
                    <img class="about__image-photo" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about_photo.jpg" alt="">
                </div>
                <div class="about__text">
                    <p class="about__text-title">Misato Yoshimoto</p>
                    <p class="about__text-content">建築会社勤務後、2013年からフリーランスとして建築パースデザインをオンラインで受注。会社員時代に自社サイトを管理していた経験を元に、コーディング・Webデザインも手掛けています。</p>
                </div>
            </div>
    </section>

    <?php get_footer(); ?>