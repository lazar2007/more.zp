jQuery(document).ready(function ($) {

    $('.nav.mobile-menu .closed').unbind('click').bind('click',function (e) {
        e.preventDefault();
        $(this).toggleClass('closed').toggleClass('opened');
        setTimeout(function () {
            $('.header-mobile-menu').toggleClass('opened');
            $('body').toggleClass('hidden');
        }, 300);
    });

    // handle links with @href started with '#' only
    $(document).on('click', 'a[href^="#"]', function(e) {
        var id = $(this).attr('href');
        var $id = $(id);
        if ($id.length === 0) {
            return;
        }
        e.preventDefault();
        let pos = $id.offset().top;

        $('body, html').animate({scrollTop: pos}, 500);
    });

    $(document).scroll(function() {
        let y = $(this).scrollTop();
        if (y > 800) {
            $('.scroll-top').fadeIn();
        } else {
            $('.scroll-top').fadeOut();
        }
    });

    //Click event to scroll to top
    $('.scroll-top').click(function(){
        $('html, body').animate({scrollTop : 0},1000);
        return false;
    });


    //slick slider for rooms page
    $('.slider-for').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').not('.slick-initialized').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.slider-for2').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.slider-nav2'
    });
    $('.slider-nav2').not('.slick-initialized').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for2',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.slider-for3').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.slider-nav3'
    });
    $('.slider-nav3').not('.slick-initialized').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for3',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.slider-for4').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.slider-nav4'
    });
    $('.slider-nav4').not('.slick-initialized').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for4',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.slider-for5').not('.slick-initialized').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.slider-nav5'
    });
    $('.slider-nav5').not('.slick-initialized').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider-for5',
        dots: false,
        centerMode: true,
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 320,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.pop-up button#submit').unbind('click').bind('click', function (e) {
        e.preventDefault();
        let cottage =  $('.pop-up-wrap .cottage-name').html();
        let dates = $('.pop-up-wrap .cottage-date').html();
        let name = $('#send_booking #name').val();
        let phone = $('#send_booking #phone').val();
        let email = $('#send_booking #email').val();
        let comment = $('#send_booking #comment').val();

        var data = {
            'action': 'frontend_action_without_file',
            'cottage': cottage,
            'dates': dates,
            'name': name,
            'phone': phone,
            'email': email,
            'comment': comment,
        };

        jQuery.ajax({
            url: MyAjax.ajaxurl, // this will point to admin-ajax.php
            type: 'POST',
            data: data,
            success: function (response) {
                $('.pop-up-wrap').hide();
                alert("Ваш заказ вiдiслано! Чекайте зворотнього дзвiнка.")
            }
        });
    })
});