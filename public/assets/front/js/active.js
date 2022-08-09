/* ===================================================================
    Author          : KeenDevs
    Template Name   : Klaud Hosting Domain HTML Template
    Version         : 1.1
* ================================================================= */

(function($) {
    "use strict";

    $(document).on('ready', function() {


        $(window).on('load', function() {
            $('#part1-id').delay(2000).slideUp();
            $('#part2-id').delay(2000).slideUp();
            $('#loaderfont-id').delay(1750).fadeOut();
            $('#loader-id').delay(1750).fadeOut();

            setTimeout(function() {
                $('.overlay').remove();
            }, 2500);


            var wow = new WOW({
                boxClass: 'wow',
                animateClass: 'animated',
                offset: 50,
                mobile: true,
                live: true,
                scrollContainer: null,
                resetAnimation: true,
            });
            wow.init();
        });

        $('.accordion-wrap .card-header button').on('click', function() {
            $(".accordion-wrap .card").not($(this).closest('.card')).removeClass('cbg');
            $(this).closest('.card').toggleClass('cbg');
        });

        $('.accordion2 .card-header a').on('click', function() {
            $(".accordion2 .card").not($(this).closest('.card')).removeClass('cbg');
            $(this).closest('.card').toggleClass('cbg');
        });


        $('.price-filter-btn button').on('click', function() {
            $(".price-filter-btn button, .pricing-package").toggleClass('active');
        });


        $('#switch').on('click', function() {

            $('.package-list').each(function() {
                if ($(this).hasClass('show')) {
                    $(this).removeClass('show').hide();
                } else {
                    $(this).fadeIn(500).addClass('show');
                }
            });

            $('.price-control-wrap span').each(function() {
                if ($(this).hasClass('active')) {
                    $(this).removeClass('active');
                } else {
                    $(this).addClass('active');
                }
            });

        });
        /*========================================
         #  Testimonial
         ========================================*/

        $('.testimonial-carousel').slick({
            slidesToShow: 1,
            dots: true,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
            initialSlide: 1,
        });

        $('.testimonial-carousel-list').slick({
            slidesToShow: 1,
            dots: false,
            slidesToScroll: 1,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 3000,
        });


        /*========================================
         # brand-carousel Carousel 
         ========================================*/

        $('.brand-carousel').slick({
            loop: true,
            dots: false,
            swipe: true,
            arrows: false,
            infinite: true,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 2,
            responsive: [{
                    breakpoint: 1191,
                    settings: {
                        slidesToShow: 3,
                        swipe: true,
                    }
                },

                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3
                    }
                },

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                    }
                }

            ]

        });

        /*========================================
         # Carousel 
         ========================================*/
        $('.app-shots-carousel').slick({
            dots: true,
            arrows: false,
            autoplay: true,
            slidesToShow: 3,
            centerMode: true,
            slidesToScroll: 1,
            swipe: true,
            easing: 'linear',
            initialSlide: 2,
            autoplaySpeed: 5000,
            centerPadding: '160px',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 2,
                        centerPadding: '60px',
                    }
                },

                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: '160px',
                    }
                },

                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: '100px',
                    }
                },

                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: '60px',
                    }
                },

                {
                    breakpoint: 320,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerPadding: '0px',
                    }
                }

            ]

        });


        /* =============================================
            # Magnific popup init
        ===============================================*/

        $(".popup-link").magnificPopup({
            type: 'image',
            fixedContentPos: false
        });

        $(".popup-gallery, .gallery-item").magnificPopup({
            type: 'image',
            gallery: {
                enabled: true,
                fixedContentPos: false
            },
            // other options
        });

        $(".popup-video, .popup-vimeo, .popup-gmaps").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

        /*==================================
         # Meanmenu Active - Mobile Menu 
         ==================================*/
        $('#responsive-menu').meanmenu({
            meanMenuContainer: '.responsive-menu',
            meanScreenWidth: "991"
        });


        /*==========================
           Scroll To Up Init
        ============================*/
        $.scrollUp({
            scrollName: 'scrollUp', // Element ID
            topDistance: '1110', // Distance from top before showing element (px)
            topSpeed: 2000, // Speed back to top (ms)
            animation: 'slide', // Fade, slide, none
            animationInSpeed: 300, // Animation in speed (ms)
            animationOutSpeed: 300, // Animation out speed (ms)
            scrollText: '<i class="fal fa-angle-up"></i>', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });

        // data - background
        $("[data-bg]").each(function() {
            $(this).css("background-image", "url(" + $(this).attr("data-bg") + ")")
        });



        //# Smooth Scroll
        $('#responsive-menu a').on('click', function(event) {
            var $anchor = $(this);
            var headerH = '80';
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
            }, 1000, 'easeInOutExpo');
            event.preventDefault();
        });


        //Sticky Menu
        $(window).scroll(function() {
            var Width = $(document).width();

            if ($("body").scrollTop() > 100 || $("html").scrollTop() > 100) {
                if (Width > 767) {
                    $("header").addClass("sticky");
                }
            } else {
                $("header").removeClass("sticky");
            }
        });


        /*** Select Field Custom */
        $('select').each(function() {
            var $this = $(this),
                numberOfOptions = $(this).children('option').length;
            var overflow = numberOfOptions > 5 ? 'overflow-y' : '';
            $this.addClass('select-hidden');
            $this.wrap('<div class="select"></div>');
            $this.after('<div class="select-styled"></div>');

            var $styledSelect = $this.next('div.select-styled');
            $styledSelect.text($this.children('option').eq(0).text());

            var $list = $('<ul />', {
                'class': 'select-options'
            }).insertAfter($styledSelect);

            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val()
                }).appendTo($list);
            }

            var $listItems = $list.children('li');

            $styledSelect.click(function(e) {
                e.stopPropagation();
                $('div.select-styled.active').not(this).each(function() {
                    $(this).removeClass('active').next('ul.select-options').hide();
                });
                $(this).toggleClass('active').next('ul.select-options').addClass(overflow).toggle();
            });

            $listItems.click(function(e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel'));
                $('select option').removeAttr('selected');
                $('select option[value="' + $(this).attr('rel') + '"]').attr('selected', 'selected');
                // Only Woo Orderby
                if ($this.hasClass('orderby')) {
                    $(this).closest('form').submit();
                }
                $list.hide();
            });

            $(document).click(function() {
                $styledSelect.removeClass('active');
                $list.hide();
            });

        });


        $('#container').imagesLoaded(function() {
            $('.gallery-menu').on('click', 'button', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });

            var $grid = $('.grid').isotope({
                itemSelector: '.grid-item',
                percentPosition: true,
            });
        });


        AOS.init();

        $('.counter, .digit-count span, .digit span').counterUp({
            delay: 10,
            time: 2500
        });

    }); // end document ready function
})(jQuery); // End jQuery