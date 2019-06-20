/*
    Add to cart fly effect with jQuery. - May 05, 2013
    (c) 2013 @ElmahdiMahmoud - fikra-masri.by
    license: https://www.opensource.org/licenses/mit-license.php
*/
(function($) {
    "use strict";

    $('.add-shoopingcart').on('click', function(img) {
        var cart = $('.shopping-cart-icon');
        // var imgtodrag = $(this).parent('.item').find("img").eq(0);

        var imgtodrag = $('.product-main-img');
        // If is single
        // if ($('.single-product').length) {
        //     imgtodrag = $('.single-product .product-main-img');
        // } else {
        //     //Not single (multiple product image)
        //     imgtodrag = $(this).closest('.item').find('.product-main-img').first();
        // }

        if (imgtodrag) {
            var imgclone = imgtodrag[0].clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '9999'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

            //Error
            setTimeout(function() {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function() {
                $(this).detach()
            });
        }
    });

    $('.add-wishlist').on('click', function(img) {
        var cart = $('.wishlist-icon');
        // var imgtodrag = $(this).parent('.item').find("img").eq(0);

        var imgtodrag = $('.product-main-img');
        // If is single
        if ($('.single-product').length) {
            imgtodrag = $('.single-product .product-main-img');
        } else {
            //Not single (multiple product image)
            imgtodrag = $(this).closest('.item').find('.product-main-img').first();
            console.log(imgtodrag);
        }

        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                    top: imgtodrag.offset().top,
                    left: imgtodrag.offset().left
                })
                .css({
                    'opacity': '0.5',
                    'position': 'absolute',
                    'height': '150px',
                    'width': '150px',
                    'z-index': '9999'
                })
                .appendTo($('body'))
                .animate({
                    'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
                }, 1000, 'easeInOutExpo');

            //Error
            setTimeout(function() {
                cart.effect("shake", {
                    times: 2
                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 0,
                'height': 0
            }, function() {
                $(this).detach()
            });
        }
    });
})(jQuery);