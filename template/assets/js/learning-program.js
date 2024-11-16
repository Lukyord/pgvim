// LEARNING PROGRAM GALLERY SLIDES
jQuery(function ($) {
    if ($("#learning-program-slides .swiper").length) {
        $("#learning-program-slides .swiper").each(function () {
            var $this = $(this);
            var swiper = new Swiper($this[0], {
                slidesPerView: 1,
                spaceBetween: 0,
                effect: "fade",
                speed: 500,
                allowTouchMove: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                allowTouchMove: false,
                autoplay: {
                    delay: 6000,
                },
            });
        });
    }
});
