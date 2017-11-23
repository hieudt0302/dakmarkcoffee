<!-- BEGIN | Header -->
<!-- Header Wrapper -->
<div id="Header_wrapper">
    <!-- Header -->
    <header id="Header">
        <!-- Header -  Logo and Menu area -->
        <div id="Top_bar">
            <div class="container">
                <div class="column one">
                    <div class="top_bar_left clearfix">
                        <!-- Logo-->
                        <div class="logo">
                            <a id="logo" href="{{ url('/')}}" title="DARMARK COFFEE"><img class="scale-with-grid" src="{{asset('frontend/images/retina-theme.png')}}" alt="DARMARK COFFEE" /></a>
                        </div>
                        <!-- Main menu-->
                        <div class="menu_wrapper">
                            <nav id="menu">
                                <ul id="menu-main-menu" class="menu">
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="{{ url('/')}}"><span>@lang('common.home')</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu"><a href="http://dak.dev/gioi-thieu/"><span>GIỚI THIỆU</span></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/gioi-thieu/"><span>Giới thiệu về công ty</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/gioi-thieu/tht-san-xuat-ca-phe-ben-vung/"><span>THT Sản xuất cà phê bền vững</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/gioi-thieu/htx-cscc/"><span>HTX CSCC</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page last-item"><a href="http://dak.dev/album-dakmark/"><span>ALBUM DAKMARK</span></a></li>
                                        </ul>
                                        <span class="menu-toggle"></span></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu"><a href="http://dak.dev/chung-nhan/"><span>CHỨNG NHẬN</span></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/chung-nhan/chung-nhan-rainforest-alliance/"><span>Chứng nhận Rainforest Alliance</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/chung-nhan/chung-nhan-4c/"><span>Chứng nhận 4C</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/chung-nhan/chung-nhan-haccp/"><span>Chứng Nhận HACCP</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page last-item"><a href="http://dak.dev/chung-nhan/tieu-chuan-iso-22000/"><span>Tiêu chuẩn ISO 22000</span></a></li>
                                        </ul>
                                        <span class="menu-toggle"></span></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/san-pham-ca-phe-dakmark/"><span>SẢN PHẨM</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu"><a href="http://dak.dev/goc-ca-phe/"><span>GÓC CÀ PHÊ</span></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/goc-ca-phe/ca-phe-va-du-lich/"><span>Cà phê và du lịch</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/goc-ca-phe/ca-phe-va-doanh-nhan/"><span>Cà phê và doanh nhân</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/goc-ca-phe/ca-phe-va-suc-khoe/"><span>Cà phê và sức khỏe</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/goc-ca-phe/ca-phe-va-nghe-thuat/"><span>Cà phê và nghệ thuật</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page last-item"><a href="http://dak.dev/goc-ca-phe/ca-phe-va-sach/"><span>Cà phê và sách</span></a></li>
                                        </ul>
                                        <span class="menu-toggle"></span></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/kien-thuc/"><span>KIẾN THỨC</span></a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu last"><a href="http://dak.dev/tin-tuc/"><span>TIN TỨC</span></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/tin-tuc/tin-cong-ty/"><span>Tin công ty</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="http://dak.dev/tin-tuc/tin-tuc-chung/"><span>Tin tức chung</span></a></li>
                                            <li class="menu-item menu-item-type-taxonomy menu-item-object-category last-item"><a href="http://dak.dev/category/tin-tuc/tin-tuyen-dung/"><span>Tin tuyển dụng</span></a></li>
                                        </ul>
                                        <span class="menu-toggle"></span></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page last"><a href="http://dak.dev/lien-he/"><span>LIÊN HỆ</span></a></li>
                                </ul>
                            </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                        </div>
                        <!-- Secondary menu area - only for certain pages -->
                        <div class="secondary_menu_wrapper">
                            <nav id="secondary-menu" class="menu-secondary-menu-container">
                                <ul id="menu-secondary-menu" class="secondary-menu">
                                    <li class="menu-item">
                                        <a id="wishlist" href="#"><i class="icon-heart-empty-fa"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#"><i class="icon-basket"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#"><i class="icon-user-line"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="#">Login</a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="#">Register</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="">VN<i class="icon-down-open-mini"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="#">English</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Vietnamese</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="#">Frances</a>
                                                </li>
                                            </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Banner area - only for certain pages-->
                        {{--<div class="banner_wrapper">--}}
                            {{--<a href="#" target="_blank"><img src="images/468x60.gif" alt="">--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        <!-- Header Searchform area-->
                        <div class="search_wrapper">
                            <form method="get" action="#">
                                <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                <input type="text" class="field" name="s" placeholder="Enter your search" />
                                <input type="submit flv_disp_none" class="submit flv_disp_none" value="" />
                            </form>
                        </div>
                    </div>
                    <div class="top_bar_right coffee_bottom_nav">
                        <div class="top_bar_right_wrapper">
                            <div class="menu_wrapper">
                                <a id="search_button" href="#"><i class="icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>
</div>

<!-- END | Header -->