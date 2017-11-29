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
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('/products')}}"><span>{{$product_menu->translation->name??$product_menu->name}}</span></a></li>

                                    @foreach($blog_menu as $menu)

                                        @if ( !$menu->GetMenuSubLevel1()->isEmpty() )
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu">
                                                <a href="{{url('/cat/')}}/{{$menu->slug}}"><span>{{$menu->translation->name??$menu->name}}</span></a>
                                                <ul class="sub-menu" style="display: none;">
                                                @foreach($menu->GetMenuSubLevel1() as $sub)
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="{{url('/cat/')}}/{{$menu->slug}}/{{$sub->slug}}"><span>{{$sub->translation->name??$sub->name}}</span></a>
                                                    </li>
                                                @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{url('/cat/')}}/{{$menu->slug}}"><span>{{$menu->translation->name??$menu->name}}</span></a></li>
                                        @endif
                                    @endforeach
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page last"><a href="{{url('/contact')}}"><span>@lang('header.contact')</span></a></li>
                                </ul>
                            </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                        </div>
                        <!-- Secondary menu area - only for certain pages -->
                        <div class="secondary_menu_wrapper">
                            <nav id="secondary-menu" class="menu-secondary-menu-container">
                                <ul id="menu-secondary-menu" class="secondary-menu">
                                    <li class="menu-item">
                                        <a id="wishlist" href="{{ url('/wishlist') }}"><i class="wishlist-icon icon-heart-empty-fa"></i></a>
                                    </li>
                                    <li class="menu-item shopping-cart-icon">
                                        <a href="{{ url('/cart') }}"><i class="icon-basket"></i></a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#"><i class="icon-user-line"></i></a>
                                        <ul class="sub-menu">
                                        @if (Auth::guest())
                                        <!-- Sub Column -->
                                            <li class="menu-item"><a href="{{ url('/login') }}">@lang('auth.login')</a></li>
                                            <li class="menu-item"><a href="{{ url('/register') }}">@lang('auth.register')</a></li>
                                            <!-- End Sub Column -->
                                        @else
                                            <li class="menu-item"><a href="{{ url('/cart') }}">@lang('footer.view-cart')</a></li>
                                            <li class="menu-item"><a href="{{ url('/wishlist') }}">@lang('footer.my-wishlist')</a></li>
                                            <li class="menu-item"><a href="{{ url('/Account/Orders') }}">@lang('footer.order-history')</a></li>
                                            <li class="menu-item"><a href="{{ url('/logout') }}">@lang('auth.logout')</a></li>
                                        @endif
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="">{{ strtoupper(app()->getLocale()) }}<i class="icon-down-open-mini"></i></a>
                                        <ul class="sub-menu">
                                            <li class="menu-item">
                                                <a href="{{URL::asset('')}}language/vi">
                                                    Tiếng Việt
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{URL::asset('')}}language/en">
                                                    English
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{URL::asset('')}}language/cn">
                                                    中文
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{URL::asset('')}}language/jp">
                                                    日本語
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="{{URL::asset('')}}language/kr">
                                                    한국어
                                                </a>
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
                            {!! Form::open(array('url' => '/search')) !!}
                                <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                <input type="text" class="field" name="key" placeholder="Enter your search" />
                                <input type="submit" class="submit flv_disp_none" value="" />
                                <input type="hidden" name="searchtype" id="searchtype" value="all">
                            {!! Form::close() !!}
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