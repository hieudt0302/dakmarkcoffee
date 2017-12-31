(function($) {
    "use strict";

    jQuery("#menu-secondary-menu li.menu-item").on('tap', function(e) {
		e.preventDefault();
		if ($(this).hasClass("hover")){
			$(this).removeClass("hover");
			$(this).children('ul.sub-menu').css({"display": "none"});
		}else{
			$(this).addClass("hover");
			$(this).children('ul.sub-menu').css({"display": "block"});
		}
	});


	jQuery($("#menu").css("display")).change(function() {
	    if ($( window ).width() < 768){
	    	var isMenu = $("#menu").css("display")=='block';
	    	console.log("IsMenu: "+isMenu);
	    	if (isMenu){
	    		$("#menu-secondary-menu").css({"display": "none"});
	    	}
	    	else{
	    		$("#menu-secondary-menu").css({"display": "block"});
	    	}
	    }
	});

	/* RATING BOX */
    jQuery('#respond a.star').click(function(event) {
        event.preventDefault();
        var curID = $(this).attr("id");
        var yourRt = curID.charAt(0);
        let el = document.querySelector('#respond'); 
        var danhgia = el.querySelectorAll('a.star');

        for (var i = 0; i < danhgia.length; i++) {
            var exiKey = danhgia[i].querySelectorAll('i.danhgia');
            
            if (danhgia[i].id != curID){
                for (var j=0; j < exiKey.length; j++) {
                    exiKey[j].setAttribute("class", "danhgia icon-star-empty");
                }
            }else{
                for (var j=0; j < exiKey.length; j++) {
                    exiKey[j].setAttribute("class", "danhgia icon-star");
                }
            }
        }
        // GET and SET Rating select value
        $("#yourrating option[value="+yourRt+"]").prop('selected', true);
        // $('#yourrating').val(yourRt).prop('selected', true);
    });


    $('body').scrollspy({ target: '#product-tabs' })
    $('#product-tabs').affix({
      offset: {
        top: getOffset(1),
        bottom: getOffset(0)
      }
    });
    $('#product-tabs').on('activate.bs.scrollspy', function () {
        var children = $("#product-tabs li.active > a").attr("href");
    });

    function getOffset(isTop){
        if (isTop == 1){
            return ($('#Top_bar').outerHeight(true) + $('.product_image_wrapper').outerHeight(true) - 50);
        }
        if (isTop == 0){
            var mainNav = $('.main-nav').outerHeight(true);
            var mota = $('#mota').outerHeight(true);
            var specs  = $('#specs').outerHeight(true);
            var reviewbox  = $('#reviewbox').outerHeight(true);
            var relate  = $('#related_products').outerHeight(true);
            return (mainNav+mota+specs+reviewbox+relate+100);
        }

    }

    /* SUBSCRIBE */
    // var popDisplayed = $.cookie('popDisplayed');
    // if(popDisplayed == '1'){
    //     return false;
    // }else{
    //     setTimeout(function(){
    //         showPopup()
    //     }, 3000);
    //     //expires in 1 day
    //     $.cookie('popDisplayed', '1', { expires: 1 });
    // }
    // function showPopup(){
    //     $.fn.prettyPhoto({
    //         keyboard_shortcuts: true,
    //         theme: 'pp_default',
    //         horizontal_padding: 20,
    //         social_tools: false
    //     });
    //     $.prettyPhoto.open("#popup-subscribe");
    //}
	
})(jQuery);