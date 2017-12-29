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
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu"><a href="{{ url('/about')}}"><span>@lang('header.introduction')</span></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('/about')}}"><span>@lang('header.dakmark-coffee')</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('/tht-san-xuat-ca-phe-ben-vung/')}}"><span>@lang('header.tht')</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('/htx-cscc')}}"><span>@lang('header.htx')</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page last-item"><a href="{{ url('/album-dakmark')}}"><span>@lang('header.album')</span></a></li>
                                        </ul>
                                        <span class="menu-toggle"></span></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children submenu"><a href="{{ url('/chung-nhan/')}}"><span>@lang('header.cert')</span></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('/chung-nhan-rainforest-alliance/')}}"><span>@lang('header.rainforest')</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('/chung-nhan-4c/')}}"><span>@lang('header.4c')</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="{{ url('/chung-nhan-haccp/')}}"><span>@lang('header.haccp')</span></a></li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page last-item"><a href="{{ url('/tieu-chuan-iso-22000/')}}"><span>@lang('header.iso')</span></a></li>
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
                                            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"></i>@lang('auth.logout')</a></li>
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
                                <input type="text" class="field" name="key" placeholder="{{__('header.enter-keyword')}}" />
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