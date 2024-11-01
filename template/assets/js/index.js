// INDEX ANNOUNCEMENT SWIPER
jQuery(function ($) {
    if ($("#index-announcement .swiper").length) {
        $("#index-announcement .swiper").each(function () {
            var $this = $(this);
            var swiper = new Swiper($this[0], {
                slidesPerView: 1,
                spaceBetween: 0,
                loop: true,
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
