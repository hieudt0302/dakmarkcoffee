<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
<head>
	<!-- Basic need -->
	<title>@yield('title')</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="profile" href="#">
	<!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:bold,black,regular"> -->
	<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:bold,italic,bolditalic"> -->
	<!-- Fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700&amp;subset=cyrillic,vietnamese" rel="stylesheet">	 -->
	<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" > -->
	<!-- <link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,900"> -->
	<!-- -->
	{{--<link  rel="stylesheet" type="text/css" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">--}}
	{{--<link  rel="stylesheet" type="text/css"  href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
	<!-- Mobile specific meta -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="format-detection" content="telephone-no">
	<!-- CSS files -->
	<!-- <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap-dropdownhover.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/hover-min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/ionicons.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/lightbox.min.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/nivo-lightbox.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/organie.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/owl.transitions.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/pushy.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/revicons.css')}}">
	<link rel="stylesheet" href="{{asset('frontend/css/settings.css')}}"> -->
	<link rel='stylesheet' href='{{asset('frontend/css/global.css')}}'>
	<link rel='stylesheet' href='{{asset('frontend/css/structure.css')}}'>
	<link rel='stylesheet' id='style-static' href='{{asset('frontend/css/store.css')}}'>
	<link rel='stylesheet' id='style-static' href='{{asset('frontend/css/skins/coffee/stylec721.css')}}'>
	<link rel='stylesheet' href='{{asset('frontend/css/custom.css')}}'>
	<link rel="stylesheet" href="{{asset('frontend/plugins/rs-plugin/css/settings.css')}}">
	<script src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script>
	<!-- <script type="text/javascript" src="{{ asset('frontend/js/jquery-1.11.2.min.js') }}"></script> -->
	@yield('header')
	<!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<meta name="google-site-verification" content="SBNKsjbUQHBBai8E7O5TxOH4R1pHOiD1F2qaSZbPxBk" />	
</head>
<body class="{{ (isset($bodyclass) ? $bodyclass : 'page-parent template-slider color-custom layout-full-width header-stack header-left subheader-transparent sticky-header sticky-white subheader-title-left') }}">

    <!-- Main Page -->
	<div id="Wrapper">
		@yield('top')

		<!-- Navigation panel -->
		@include('layouts.nav')

		<!-- End Navigation panel -->
		@yield('content')

		<!-- Footer -->
		@include('layouts.footer')
		<!-- End Footer -->

		<!-- FOr Testing
		<a href="#popup-subscribe" rel="prettyphoto" class="popup-link button button_js"><span class="button_label">Click to open Popup</span></a>
		-->
		{{--<div id="popup-subscribe" class="popup-content">--}}
			{{--<div class="popup-inner">--}}
				{{--<div class="fancy_heading fancy_heading_icon">--}}
					{{--<span class="icon_top"><i class="icon-paper-plane-line"></i></span>--}}
					{{--<h2 class="title">ĐỪNG BỎ LỠ!</h2>--}}
					{{--<div class="inside">--}}
						{{--<p style="line-height: 1.5em;">--}}
							{{--Đăng ký ngay để nhận được những khuyến mãi hấp dẫn nhất từ DAKMARK COFFEE--}}
						{{--</p>--}}
						{{--<div class="popup-subscribe_popup">--}}
							{{--<form id="popup-subscribe_popup" class="form aligncenter">--}}
							{{--<span>--}}
								{{--<input type="email" name="email" id="email" aria-required="true" aria-invalid="false" placeholder="email *" style="width: 90%; text-align: center; margin: 10px auto;">--}}
							{{--</span>--}}
								{{--<span>--}}
								{{--<input type="submit" value="Send Message" id="submit_popup" onclick="return check_values_popup();">--}}
							{{--</span>--}}
							{{--</form>--}}
							{{--<div id="confirmation_popup"></div>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}

 	</div>
	<!-- JS -->
	<!-- <script src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script> -->
	<!-- <script src="{!!url('frontend/js/jquery-2.1.4.min.js')!!}"></script> -->
	<script src="{{asset('frontend/js/mfn.menu.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.plugins.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.jplayer.min.js')}}"></script>
	<script src="{{asset('frontend/js/animations/animations.js')}}"></script>
	<script src="{{asset('frontend/js/email.js')}}"></script>
	<script src="{{asset('frontend/js/scripts.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrapscrollspy.min.js')}}"></script>
	{{--<script src="{{asset('frontend/js/jquery.cookie.js')}}"></script>--}}
	<script src="{{asset('frontend/js/custom-scripts.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/extensions/revolution.extension.video.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/extensions/revolution.extension.actions.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/extensions/revolution.extension.navigation.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/extensions/revolution.extension.migration.min.js')}}"></script>
	<script src="{{asset('frontend/plugins/rs-plugin/js/extensions/revolution.extension.parallax.min.js')}}"></script>
	{{--<script src="{{asset('frontend/js/plugins.js')}}"></script>--}}
	{{--<script src="{{asset('frontend/js/custom.js')}}"></script>--}}
	<!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
	{{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>--}}
	{{--<script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>--}}
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJyWgPF1EBDeQjx4ctp4e_DuoLi7Zf8OA" type="text/javascript"></script>
	<script type="text/javascript">
        var tpj = jQuery;
        tpj.noConflict();
        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hesperiden",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1100,
                    gridheight: 720,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/

	</script>
	<script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "frontend/images/logo-retina.png").width(retinaLogoW).height(retinaLogoH);
            }
        });
	</script>
    @yield('scripts')

    <script>
		if (typeof jQuery == 'undefined') {
		    document.write(unescape("%3Cscript src='{{asset('frontend/js/jquery-2.1.4.min.js')}}'' type='text/javascript'%3E%3C/script%3E")); //Load the Local file (if google is down for some reason) 
		}
		jQuery(document).ready(function($){
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			$("button.subscribe2").click(function () {
				var email = $("input[name='subscribe_email']").val();
				var postURL = "{{url('/subscribe')}}";
				console.log("Email: "+email+" URL: "+postURL);
				$.ajax({
		            type: "POST",
		            url: postURL ,
		            data: {
		                "email": email,
		            },
		            success: function(res){
		                if(res.success){
		                    $(".subscribe-success").show();
		                    $(".subscribe-failed").hide();
		                }
		                else{
		                    $(".subscribe-success").hide();
		                    $(".subscribe-failed").show();
		                }
		                
		            },
		            error:function(res){
		                console.log("Error!");  
		                console.log(res);  
		            }
		        });
			});
		});
		    
	</script>

    
</body>
</html>