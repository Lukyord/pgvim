// INDEX MARQUEE ITEM CHECK
jQuery(function ($) {
    if ($("#index-hero .marquee").length) {
        $("#index-hero .marquee").each(function () {
            const items = $(this).find(".marquee-item");

            if (items.length < 3) {
                $("#index-hero .marquee .marquee-item").css(
                    "--item-spacing",
                    "var(--240px)"
                );
            }
        });
    }
});

// INDEX ANNOUNCEMENT SWIPER
jQuery(function ($) {
    if ($("#index-announcement .swiper").length) {
        $("#index-announcement .swiper").each(function () {
            var $this = $(this);
            var swiper = new Swiper($this[0], {
                slidesPerView: 1,
                spaceBetween: 0,
                effect: "fade",
                speed: 1000,
                autoplay: {
                    delay: 5000,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
            });
        });
    }
});
