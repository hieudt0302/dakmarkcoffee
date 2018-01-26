<footer id="Footer" class="clearfix">
    <div class="widgets_wrapper">
        <div class="container">
            <div class="one-fourth column">
                <aside id="widgetintro" class="widget widget_text">
                    <h5>@lang('header.about-us')</h5>
                    <div class="textwidget" style="text-align: justify;">
                        <!-- <img src="images/logo-retina.png" alt="" class="aligncenter"> -->
                        <!-- <br /> -->
                        <p>
                            @lang('footer.message')
                        </p>
                        <a href="#">
                            <i class="icon-location"></i> {{ Setting::config('address') }}
                        </a>
                        <br />
                        <a href="tel:+842462531666" id="call-number">
                            <i class="icon-phone"></i> +84 24 6253 1666
                        </a>
                        <br />
                        <a href="tel:+84916322822">
                            <i class="icon-phone"></i> +84 916 322 822
                        </a>
                        <br />
                        <a href="mailto:dakmark@dakmark.com.vn">
                            <i class="icon-mail"></i> dakmark@dakmark.com.vn
                        </a>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <aside class="widget widget_text">
                    <h5>@lang('footer.customer-support')</h5>
                    <div class="textwidget">
                        <ul>
                            <li>
                                <a href="{{ url('/returns') }}" title=" "><i class="icon-right-open-mini"></i> @lang('footer.returns')</a>
                            </li>
                            <li>
                                <a href="{{ url('/faqs') }}" title=" "><i class="icon-right-open-mini"></i> @lang('footer.faq')</a>
                            </li>
                            <li>
                                <a href="{{ url('/purchase-flow') }}" title=" "><i class="icon-right-open-mini"></i> @lang('footer.purchase-flow')</a>
                            </li>
                            <li>
                                <a href="{{ url('/showrooms') }}" title=" "><i class="icon-right-open-mini"></i> @lang('footer.showroom-locations')</a>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <aside class="widget widget_text">
                    <h5>@lang('footer.my-account')</h5>
                    <div class="textwidget">
                        <ul>
                        @if (Auth::guest())
                        <!-- Sub Column -->
                            <li><a href="{{ url('/login') }}"><i class="icon-right-open-mini"></i> @lang('auth.login')</a></li>
                            <li><a href="{{ url('/register') }}"><i class="icon-right-open-mini"></i> @lang('auth.register')</a></li>
                            <!-- End Sub Column -->
                        @else
                            <li><a href="{{ url('/cart') }}"><i class="icon-right-open-mini"></i> @lang('footer.view-cart')</i></a></li>
                            <li><a href="{{ url('/wishlist') }}"><i class="icon-right-open-mini"></i> @lang('footer.my-wishlist')</i></a></li>
                            <li><a href="{{ url('/Account/Orders') }}"><i class="icon-right-open-mini"></i> @lang('footer.order-history')</i></a></li>
                            <!-- <li><a href="{{ url('/logout') }}"><i class="icon-right-open-mini"></i> @lang('auth.logout')</i></a></li> -->
                            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="icon-right-open-mini"></i>@lang('auth.logout')</a></li>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>                            
                        @endif
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="one-fourth column">
                <aside class="widget widget_text">
                    <h5>@lang('footer.follow-us')</h5>
                    <div class="textwidget">
                        <span class="big">@lang('footer.newsletter-message')</span>
                        <form iid="mailchimp" class="form aligncenter clearfix" style="margin-top: 10px; margin-bottom: 20px;">
                            <span>
                                <input type="email" name="subscribe_email" id="email" aria-required="true" aria-invalid="false" placeholder="{{ __('profile.email') }}" style="width: 100%; margin-bottom: 10px;">
                            </span>
                            <span class="alignleft" style="margin:0">
                                <input type="submit" value="@lang('footer.subscribe')" id="submit_popup" onclick="return check_values_popup();">
                            </span>
                        </form>
                        <div class="column one">
                            <div class="column_attr">
                                <a href="http://www.facebbook.com/{{ Setting::config('facebook') }}" class="icon_bar icon_bar_facebook icon_bar_small">
                                    <span class="t"><i class="icon-facebook"></i></span><span class="b"><i class="icon-facebook"></i></span>
                                </a>
                                <a href="skype:{{ Setting::config('skype')}}?chat" class="icon_bar icon_bar_skype icon_bar_small">
                                    <span class="t"><i class="icon-skype"></i></span><span class="b"><i class="icon-skype"></i></span>
                                </a>
                                <a href="http://www.twitter.com/{{ Setting::config('twitter') }}" class="icon_bar icon_bar_twitter icon_bar_small">
                                    <span class="t"><i class="icon-twitter"></i></span><span class="b"><i class="icon-twitter"></i></span>
                                </a>
                                <a href="http://www.vimeo.com/{{ Setting::config('vimeo') }}" class="icon_bar icon_bar_vimeo icon_bar_small">
                                    <span class="t"><i class="icon-vimeo"></i></span><span class="b"><i class="icon-vimeo"></i></span>
                                </a>
                                <a href="http://www.youtube.com/{{ Setting::config('youtube') }}" class="icon_bar icon_bar_youtube icon_bar_small">
                                    <span class="t"><i class="icon-play"></i></span><span class="b"><i class="icon-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</footer>