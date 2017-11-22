
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
	@yield('header')
<meta name="google-site-verification" content="SBNKsjbUQHBBai8E7O5TxOH4R1pHOiD1F2qaSZbPxBk" />	
</head>
<body class="page-parent template-slider color-custom layout-full-width header-stack header-left subheader-transparent sticky-header sticky-white subheader-title-left">
	 
	<!-- Mobile Menu -->
	{{--<div class="mobile-menu">--}}
    	{{--@include('layouts.mobile_menu')--}}
    {{--</div>--}}
    <!-- End Mobile Menu -->

    <!-- Main Page -->
	<div id="Wrapper">
		@yield('top')

		<!-- Navigation panel -->
		@include('layouts.nav')

		<!-- End Navigation panel -->
		@yield('content')

		<!-- Foter -->
		{{--@include('layouts.footer')--}}
		<!-- End Foter -->
		<!-- End Main Page -->

 	</div>
	<!-- JS -->
	<script src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script>
	<script src="{{asset('frontend/js/mfn.menu.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.plugins.js')}}"></script>
	<script src="{{asset('frontend/js/jquery.jplayer.min.js')}}"></script>
	<script src="{{asset('frontend/js/animations/animations.js')}}"></script>
	<script src="{{asset('frontend/js/email.js')}}"></script>
	<script src="{{asset('frontend/js/scripts.js')}}"></script>
	<script src="{{asset('frontend/js/bootstrapscrollspy.min.js')}}"></script>
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
	{{--<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>--}}
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
                retinaEl.attr("src", "images/logo-retina.png").width(retinaLogoW).height(retinaLogoH)
            }
        });
	</script>

	{{--<script>--}}
		{{--(function() {--}}
			{{--$.ajaxSetup({--}}
				{{--headers: {--}}
					{{--'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
				{{--}--}}
			{{--});--}}
		{{--})();--}}
	{{--</script>--}}
    @yield('scripts')
</body>
</html>