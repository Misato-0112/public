jQuery(function ($) {
    // ハンバーガーメニューのフェードイン・フェードアウト
    const hamburger = $(".hamburger-nav");
    const hamburgerButton = $(".hamburger__line");
    const hamburgerLinks = $(".hamburger-nav a");

    $(".hamburger__button").on("click", function () {
        hamburger.stop(true, true).fadeToggle(200).toggleClass("active");
    });

    hamburgerLinks.on("click", function () {
        hamburger.stop(true, true).fadeOut(200).removeClass("active");
    });

    // トップへ戻るボタンの表示制御
    const backToTopButton = $(".to-top-button");
    const showButtonHeight = 150;

    $(window).on("scroll", function () {
        const scrollTop = $(this).scrollTop();
        if (scrollTop > showButtonHeight) {
            backToTopButton.addClass("show");
        } else {
            backToTopButton.removeClass("show");
        }
    });

    // worksアイコンのアニメーション (Vivus)
    if ($(".vivus-icon").length) {
        const duration = window.matchMedia("(min-width: 768px)").matches ? 80 : 50;
        ["coding-icon", "design-icon", "wordpress-icon", "arch-icon"].forEach((id) => {
            if ($(`#${id}`).length) {
                new Vivus(id, { duration: duration });
            }
        });
    }

    // Swiper初期化
    if ($(".swiper-container").length) {
        new Swiper(".swiper-container", {
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });
    }

    // archive-worksの投稿数を画面幅に応じて変更
    const setPostsPerPage = () => {
        const screenWidth = window.innerWidth;
        const postsPerPage = screenWidth >= 768 ? 9 : 5;

        const urlParams = new URLSearchParams(window.location.search);
        const currentPostsPerPage = parseInt(urlParams.get("posts_per_page"), 10);

        // 設定が異なる場合のみリロード
        if (currentPostsPerPage !== postsPerPage) {
            urlParams.set("posts_per_page", postsPerPage);
            window.location.search = urlParams.toString();
        }
    };

    // 初期ロード時に実行
    setPostsPerPage();

    // リサイズ時に投稿数を変更（必要に応じて）
    $(window).on("resize", function () {
        setPostsPerPage();
    });
});
