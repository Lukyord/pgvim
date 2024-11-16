// INDEX ANNOUNCEMENT SWIPER
jQuery(function ($) {
    if ($("#history-slides .swiper").length) {
        $("#history-slides .swiper").each(function () {
            var $this = $(this);
            var swiper = new Swiper($this[0], {
                slidesPerView: 1,
                spaceBetween: 0,
                effect: "fade",
                speed: 1000,
                allowTouchMove: true,
                navigation: {
                    nextEl: ".history-slides-swiper-button-next",
                    prevEl: ".history-slides-swiper-button-prev",
                },
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                breakpoints: {
                    992: {
                        allowTouchMove: false,
                    },
                },
            });

            $this.find(".swiper-slide").each(function (index) {
                var $this = $(this);

                function checkContentHeight() {
                    var scrollContainerHeight = $this
                        .find(".body-scroll")
                        .height();
                    var contentHeight = $this
                        .find(".content-container")
                        .height();

                    if (contentHeight < scrollContainerHeight) {
                        $this
                            .find(".content .wrapper")
                            .addClass("justify-between");
                    }
                }

                onWindowResize(checkContentHeight);
            });

            setTimeout(function () {
                $(".timeline-trigger").click(function (e) {
                    e.preventDefault();

                    const targetId = $(this).data("slide-id").substring(1);
                    const $targetSlide = $("#" + targetId);

                    if ($targetSlide.length) {
                        const targetIndex =
                            $(".swiper-slide").index($targetSlide);
                        const slides = $("#history-slides .swiper");

                        $("html,body").animate(
                            {
                                scrollTop: slides.offset().top,
                            },
                            800
                        );

                        swiper.slideTo(targetIndex);
                    }
                });
            }, 300);
        });
    }
});
