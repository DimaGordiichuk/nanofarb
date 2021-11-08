(function ($) {
    'use strict'

    $(document).ready(function () {
        svg4everybody({})

        // $('body').on('click', ".send-calc", function () {
        //     var rashod = $('#calc-orm input[name="consumption"]').val(),
        //         square = $('#calc-orm input[name="square"]').val(),
        //         sloev = $('#sloev').val();
        //     var res = square * sloev;
        //     // res2 = Math.round(res/rashod*10)/10;
        //     res2 = Math.round(res * rashod);
        //
        //     $('#calc-orm #result').html(res2);
        //
        //     return false;
        // });


        $('.products__info-btn').on('click', function(){
            $('.products__info').toggleClass('active')
            $('.products__info-btn span').toggle(0)
        })

        $('#dropdown').on('click', function() {
            $(this).toggleClass('show')
        })

        $('#birthday').mask("__.__.____", {
            translation: {
              '_': {
                pattern: /[0-9]/,
                fallback: ''
              }
            },
          placeholder: "__.__.____",
          selectOnFocus: true
        });

        $('.about__mobile-btn .btn-gen_inner').on('click', function() {
            $('.about-text__hide').toggleClass('active')
            $('.about__mobile-btn span').toggle(0)
        })
        $('.product-right__head-mobile button').on('click', function() {
            $('.product-left').addClass('active')
            $('.product-right__head-right').addClass('active')
        })
        $('.product-left__mobile-btn').on('click', function() {
            $('.product-left').removeClass('active')
            $('.product-right__head-right').removeClass('active')
        })
        $('.mobile-menu__btn').on('click', function() {
            $('.mobile-menu').toggleClass('active')
            $(this).toggleClass('active')
            $('body').toggleClass('active')
        })

        $('.header__right-search-btn').on('click', function () {
            $('.head-search__hide').slideToggle(0)
            $(this).slideToggle(0)
        })

        $('.header__right-phone').on('click', function () {
            $('.header-phone__hide').slideToggle(300)
            $(this).toggleClass('active')
        })

        $(document).on('click', function (e){ 
            var div = $(".header__right-search"); 
            if (!div.is(e.target) && div.has(e.target).length === 0) { 
                $(".head-search__hide").slideUp(0); 
                $(".header__right-search-btn").slideDown(0); 
            }
        })
        $('.rating > img').on('click', function() {
            var value = $(this).attr('value'),
            path = $(this).parent('.rating').data('path') || 'img/';
            $(this).prevAll().attr('src', path + 'big-star-active.png');
            $(this).attr('src', path + 'big-star-active.png');
            $('.rating input').val(value)
            $(this).nextAll().attr("src", path + "big-star.png");
          });

        $('.story__info-group').on('click', '.story__info-line', function () {
            $(this).parent().children('.story__hide').slideToggle(300);
            $(this).parent().children('.story__info-line').toggleClass('active')
        })

        $('#select2-filter').select2({
            minimumResultsForSearch: -1,
            placeholder: ' '
        })
        $('#delivery').select2({
            minimumResultsForSearch: -1,
            placeholder: ' '
        })
        $('#delivery-1').select2({
            minimumResultsForSearch: -1,
            placeholder: ' '
        })
        var modalTop = new Swiper('.swiper-container-recomend', {
            slidesPerView: 'auto',
            navigation: {
            nextEl: '.swiper-button-next-recomend',
            prevEl: '.swiper-button-prev-recomend',
            },
        });

        var swiperFeedback = new Swiper ('.swiper-container-feedback', {
            slidesPerView: 'auto',
            observer: true,
            observeParents: true,
        })

        $('.product-filter').on('click', '.product-filter__name', function () {
            $(this).parent().children('.product-filter__block-repeat').slideToggle(300);
            $(this).parent().children('.product-filter__name').toggleClass('active')
        })
        $('#clock').countdown($('#clock').data('date')).on('update.countdown', function(event) {
            var $this = $(this).html(event.strftime(''
              + '<div class="time-js" > <span>%D</span> дня </div> '
              + '<div class="time-js" > <span>%H</span> часов </div> '
              + '<div class="time-js" > <span>%M</span> минут </div> '
              + '<div class="time-js" > <span>%S</span> секунд </div>'));
          });
    })
})(jQuery)