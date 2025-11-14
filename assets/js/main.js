(function($) {
    'use strict';

    // Page loading
    $(window).on('load', function() {
        $('#preloader-active').delay(450).fadeOut('slow');
        $('body').delay(450).css({
            'overflow': 'visible'
        });
    });

    // Scroll progress
    var scrollProgress = function() {
        var docHeight = $(document).height(),
            windowHeight = $(window).height(),
            scrollPercent;
        $(window).on('scroll', function() {
            scrollPercent = $(window).scrollTop() / (docHeight - windowHeight) * 100;
            $('.scroll-progress').width(scrollPercent + '%');
        });
    };

    // Off canvas sidebar
    var OffCanvas = function() {
        $('#off-canvas-toggle').on('click', function() {
            $('body').toggleClass("canvas-opened");
        });

        $('.dark-mark').on('click', function() {
            $('body').removeClass("canvas-opened");
        });
        $('.off-canvas-close').on('click', function() {
            $('body').removeClass("canvas-opened");
        });
    };

    // Search form
    var openSearchForm = function() {
        $('.search-close').hide();
        $('button.search-icon').on('click', function() {
            $(this).hide();
            $('body').toggleClass("open-search-form");
            $('.search-close').show();
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });
        $('.search-close').on('click', function() {
            $(this).hide();
            $('body').removeClass("open-search-form");
            $('button.search-icon').show();
        });
    };

    // Mobile menu
    var mobileMenu = function() {
        var menu = $('ul#navigation');

        if (!menu.length || typeof $.fn.slicknav !== 'function') {
            return;
        }

        menu.slicknav({
                prependTo: ".mobile_menu",
                closedSymbol: '+',
                openedSymbol: '-'
            });
    };

    // Slick slider
    var customSlickSlider = function() {
        if (typeof $.fn.slick !== 'function') {
            return;
        }

        var featuredOne = $('.featured-slider-1-items');
        if (featuredOne.length) {
            featuredOne.slick({
                dots: false,
                infinite: true,
                speed: 1000,
                arrows: false,
                slidesToShow: 1,
                autoplay: true,
                loop: true,
                adaptiveHeight: true,
                fade: true,
                cssEase: 'linear',
            });
        }

        var postCarouselOne = $('.post-carausel-1-items');
        if (postCarouselOne.length) {
            postCarouselOne.slick({
                dots: false,
                infinite: true,
                speed: 1000,
                arrows: true,
                slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            loop: true,
            adaptiveHeight: true,
            cssEase: 'linear',
            prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right"></i></button>',
            appendArrows: '.post-carausel-1-arrow',
            centerPadding: 50,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 6,
                        slidesToScroll: 6,
                        infinite: true,
                        dots: false,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
            ]
            });
        }

        var postCarouselTwo = $('.post-carausel-2');
        if (postCarouselTwo.length) {
            postCarouselTwo.slick({
                dots: true,
                infinite: true,
                speed: 1000,
                arrows: false,
                slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: false,
            loop: true,
            adaptiveHeight: true,
            cssEase: 'linear',
            centerPadding: 50,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
            });
        }

        var postCarouselThree = $('.post-carausel-3');
        if (postCarouselThree.length) {
            postCarouselThree.slick({
                dots: true,
                infinite: true,
                speed: 1000,
                arrows: false,
                slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            loop: true,
            adaptiveHeight: true,
            cssEase: 'linear',
            centerPadding: 50,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: false,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
            });
        }

        var featuredTwoItems = $('.featured-slider-2-items');
        if (featuredTwoItems.length) {
            featuredTwoItems.slick({
                fade: true,
                asNavFor: '.featured-slider-2-nav',
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev"><i class="flaticon-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="flaticon-right"></i></button>',
                appendArrows: '.arrow-cover',
            });
        }

        var featuredTwoNav = $('.featured-slider-2-nav');
        if (featuredTwoNav.length) {
            featuredTwoNav.slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.featured-slider-2-items',
                dots: false,
            arrows: false,
            centerMode: true,
            focusOnSelect: true,
            centerPadding: 0,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
            });
        }
    };

    // Nice Select
    var niceSelectBox = function() {
        var nice_Select = $('select');
        if (nice_Select.length && typeof $.fn.niceSelect === 'function') {
            nice_Select.niceSelect();
        }
    };

    //Header sticky
    var headerSticky = function() {
        $(window).on('scroll', function() {
            var scroll = $(window).scrollTop();
            if (scroll < 245) {
                $(".header-sticky ").removeClass("sticky-bar");
            } else {
                $(".header-sticky").addClass("sticky-bar");
            }
        });
    };

    // Scroll up to top
    var scrollToTop = function() {
        if (typeof $.scrollUp !== 'function') {
            return;
        }

        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '300', // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: 'fade', // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '<i class="ti-arrow-up"></i>', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });
    };

    //VSticker
    var VSticker = function() {
        var $ticker = $('#datetime');

        if ($ticker.length && $.fn.vTicker) {
            $ticker.vTicker({
                speed: 1000,
                pause: 3000,
                animation: 'fade',
                mousePause: false,
                showItems: 1
            });
        }
    };

    //sidebar sticky
    var stickySidebar = function() {
        if (typeof $.fn.theiaStickySidebar !== 'function') {
            return;
        }

        $('.sticky-sidebar').theiaStickySidebar();
    };

    //Custom scrollbar
    var customScrollbar = function() {
        var target = document.querySelector('.custom-scrollbar');

        if (target && typeof window.PerfectScrollbar === 'function') {
            new PerfectScrollbar(target);
        }
    };

    //Mega menu
    var megaMenu = function() {
        if (typeof $.fn.tab === 'function') {
            $('.sub-mega-menu .nav-pills > a').on('mouseover', function(event) {
                $(this).tab('show');
            });
        }
    };

    //Counter
    var numberCounter = function() {
        if (typeof $.fn.counterUp !== 'function') {
            return;
        }

        $('.counter-number').counterUp({
            delay: 10,
            time: 2000
        });
    };

    //magnific Popup
    var magPopup = function() {
        if (typeof $.fn.magnificPopup !== 'function') {
            return;
        }

        $('.play-video').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    };

    // toolTip
    var toolTip = function() {
        if (typeof $.fn.tooltip === 'function') {
            $('[data-toggle="tooltip"]').tooltip();
        }
    };

    // WOW
    var wowJs = function() {
        if (typeof WOW === 'function') {
            new WOW().init();
        }
    };

    //Load functions
    $(document).ready(function() {
        toolTip();
        OffCanvas();
        customScrollbar();
        numberCounter();
        megaMenu();
        magPopup();
        scrollToTop();
        headerSticky();
        stickySidebar();
        customSlickSlider();
        mobileMenu();
        scrollProgress();
        niceSelectBox();
        openSearchForm();
        wowJs();
        VSticker();
    });

})(jQuery);
