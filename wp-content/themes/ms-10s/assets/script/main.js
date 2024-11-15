$(document).ready(function () {
    // ハンバーガーメニューのフェードイン・フェードアウト
    var hamburger = $(".hamburger-nav");
    var hamburgerButton = $(".hamburger__line");
    $(".hamburger__button").on("click", function () {
        hamburger.fadeToggle(200).toggleClass("active");
        hamburgerButton.toggleClass("active");
    });

    $(window).on("resize", function () {
        hamburger.removeClass("active").hide();
    });

        // Swiperの設定
    if ($(".swiper").length > 0) {
        const mySwiper = new Swiper(".swiper", {
            slidesPerView: 1,
            spaceBetween: 15,

            pagination: {
                el: ".swiper-pagination",
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    }
});