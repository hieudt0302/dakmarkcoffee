(function($) {
    "use strict";

    jQuery("#menu-secondary-menu li.menu-item").click(function(e) {
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
	// $( ".responsive-menu-toggle" ).click(function() {
		
	//     if ($( window ).width() < 768){
	//     	var isMenu = $("#menu").css("display")=='block';
	//     	var isActive = $(this).hasClass("active");
	//     	console.log("IsMenu: "+isMenu);
	//     	console.log("isActive: "+isMenu);
	// 		if ( isActive || isMenu ){
	// 			$("#menu-secondary-menu").css({"display": "none"});
	// 		}else{
	// 			$("#menu-secondary-menu").css({"display": "block"});
	// 		}
	// 	}
	// });
	
})(jQuery);