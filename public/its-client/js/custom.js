(function ($) {
    'use strict'

    $(document).ready(function () {
        svg4everybody({})
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.calc-form button').on('click', function (e) {

        })

        $(document).on('click', '.js-button-color', function (e) {
            e.preventDefault()
            // if ($(this).data('product-id')) {
                // $('#modal-change-color input[name="product_id"]').val($(this).data('product-id'))
                // $('#modal-change-color input[name="quantity"]').val($('#quantity-prod').val())
                $('#modal-change-color').modal()
            // }
        })

        function showDeleteColorButton(){
            let button  = $('.color-block__choice .choice-color');
            if (button.attr('data-color')) {
                $('.color-block__choice .delete-color').addClass('active')
            } else {
                $('.color-block__choice .delete-color').removeClass('active')
            }
        }
        showDeleteColorButton()
        $(document).on('click', '.color-block__choice .delete-color span', function (e) {
            location.reload();
        })

        $(document).on('click', '.js-color-delete', function (e) {
            var priceElement = $(this).parents('.wrapper-to-options').find('.js-product-price');
            let basPrice = priceElement.attr('data-basic-price');
            let price = priceElement.attr('data-current-price');
            price = basPrice

            let priceFormat = parseInt(price.replace(/\D+/g,""));
            let priceFormatNew = priceFormat*$('#quantity-prod').val();

            let replacePrice = price.replace(priceFormat,priceFormatNew)
            priceElement.attr('data-price',replacePrice)
            priceElement.attr('data-current-price',price)
            priceElement.text(replacePrice)

            $(this).parents('.color-block-wrapper').removeClass('active');
            $(this).parents('.color-block-wrapper').html('');


            // let parent = this.parentElement
            // parent.classList.remove('active')
            // parent.innerHTML = ''
            //
            // console.log(this.parentElement)

        })

        // $(document).on('click', '.js-plus-prod', function (e) {
        //     $('.js-plus-prod').trigger('change-count');
        // })
        $(document).on('click', '.js-plus-prod', function (e) {
        // $(document).on('change-count', '.js-plus-prod', function (e) {
            e.preventDefault()
            var currentVal = parseInt($(this).parents('.wrapper-to-options').find('#quantity-prod').val()),
                // currentVal = parseInt($('#quantity-prod').val()),
                add = parseInt($(this).data('add')),
                qua = currentVal + add
            if (qua > 0) {
                $(this).parents('.wrapper-to-options').find('#quantity-prod').val(qua)
                // console.log(qua)
                var priceElement = $(this).parents('.wrapper-to-options').find('.js-product-price');
                let price = priceElement.attr('data-current-price');
                let priceFormat = parseInt(price.replace(/\D+/g,""));
                let priceFormatNew = priceFormat* $(this).parents('.wrapper-to-options').find('#quantity-prod').val();

                let replacePrice = price.replace(priceFormat,priceFormatNew)
                priceElement.attr('data-price',replacePrice)
                priceElement.text(replacePrice)
            }
            // console.log($(this).parents('.wrapper-to-options').find('#quantity-prod').val())
        })


        $('.calc-form button').on('click', function (e) {
            e.preventDefault();
            let consumption = $(this).parents('.calc-form').find('#consumption').val();
            let square = $(this).parents('.calc-form').find('input[name="square"]').val();
            let countLayer = $(this).parents('.calc-form').find('#count-layer').val();
            let res = square * countLayer;
            let res2 = Math.round(res * consumption);
            $(this).parents('.calc-form').find('.calc-result strong').text(res2)
        });

    })
})(jQuery)