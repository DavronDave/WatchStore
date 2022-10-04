$(document).ready(function() {

    var eventySwiper = new Swiper(".eventySwiper", {
        slidesPerView: 2,
        slidesPerColumn: 2,
        spaceBetween: 30,
        autoplay: {
            delay: 10000,
        },
        navigation: {
            nextEl: ".eventy .right__btn",
            prevEl: ".eventy .left__btn",
        },
        breakpoints: {
            767: {
                spaceBetween: 10,
                slidesPerColumn: 1,
                slidesPerView: 1.2,
            },
        },
    });

    var phototapeSwiper = new Swiper(".phototapeSwiper", {
        slidesPerView: 3,
        slidesPerColumn: 2,
        spaceBetween: 30,
        autoplay: {
            delay: 10000,
        },
        navigation: {
            nextEl: ".phototape .right__btn",
            prevEl: ".phototape .left__btn",
        },
        breakpoints: {
            767: {
                slidesPerView: 2,
                slidesPerColumn: 2,
                spaceBetween: 10,
            },
        },
    });

    var galleryThumbs = new Swiper(".gallery-thumbs", {
        // direction: 'vertical',
        speed: 500,
        loop: true,
        centeredSlides: true,
        freeMode: true,
        simulateTouch: true,
        autoplay: {
            delay: 10000,
        },
        touchratio: 1,
        watchSlidesProgress: true,
        breakpoints: {
            2700: {
                slidesPerView: 3,
                spaceBetween: 100,
            },
            1299: {
                slidesPerView: 4,
                spaceBetween: 30,
                centeredSlides: false,
            },
            991: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            767: {
                slidesPerView: 2,
                spaceBetween: 10,
            },
        },
    });

    var galleryTop = new Swiper(".gallery-top", {
        // direction: 'vertical',
        effect: "fade",
        loop: true,
        speed: 500,
        spaceBetween: 0,
        thumbs: {
            swiper: galleryThumbs,
        },
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: ".gallery-top .swiper-button-next",
            prevEl: ".gallery-top .swiper-button-prev",
        },
    });

    // Fancybox Config
    $('[data-fancybox="gallery"]').fancybox({
        buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
        loop: false,
        protect: true,
    });

    $.fancybox.defaults.backFocus = false;

    $("#slider").slider();

    if ($(window).width() < 1300) {
        $(".mobile__menu .body").append($("header .hdr__bottom ul"));

        $(document).on("click", ".hamburger", function() {
            $("body").addClass("opened");
        });

        $("body").click(function(e) {
            if (!$(e.target).is(
                    ".hamburger *,.hamburger,.mobile__menu .body,.mobile__menu .body *"
                )) {
                $("body").removeClass("opened");
            }
        });
    }
    if ($(window).width() < 1023) {
        $(".mobile__menu .body ul").before($("form.search"));
        $(".mobile__menu .body ul").before($("header .language .body_dropdown"));
        $(".mobile__menu .body .body_dropdown").append($("header .language span"));
    }

    $("#minHeight").css({
        minHeight:
            ($(window).outerHeight() -
                $("header").outerHeight() -
                $("footer").outerHeight()) /
            $("section").css("zoom") +
            "px",
    });
});