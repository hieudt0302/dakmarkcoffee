@extends('layouts.master')
@section('title','Dakmark Coffee - Product')
@section('content')
{{--@section('header')--}}
<!-- Share Nav -->
{{--@include('layouts.share')--}}

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <!-- Header -->
                <div class="section head-sect" style="padding-top:30px; padding-bottom:30px;">
                    <div class="section_wrapper">
                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{asset('frontend/images/home/home_coffee_subheader.png')}}" alt="" width="58" height="65">
                            </div>
                        </div>
                        <h2 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;">@lang('header.products')</h2>
                        <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                            <div class="image_wrapper">
                                <img class="scale-with-grid" src="{{asset('frontend/images/home/home_coffee_heading.png')}}" alt="" width="78" height="10">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Header -->

                <!-- New Products Section -->
                <div class="section woocommerce productlist" style="padding-top:30px; padding-bottom:60px;">
                    <div class="section_wrapper clearfix">
                        <div class="items_group clearfix">
                            <!-- Product Items-->
                            <div class="column one woocommerce-content">
                                <div class="products_wrapper isotope_wrapper">
                                    <ul class="products grid">
                                    @php($curDate = Carbon\Carbon::now())    
                                    @foreach($results as $key => $product)
                                        @php($isSale = 0)
                                        @if($product->special_price != 0 && $product->special_price_start_date  <= $curDate && $curDate <= $product->special_price_end_date )
                                            @php($isSale = 1)
                                        @endif                                      
                                        <!-- Product Item -->
                                        <li class="product item has-post-thumbnail">
                                            <div class="item_wrapper">
                                                <div class="hover_box hover_box_product">
                                                    <a href="{{url('/product')}}/{{$product->slug}}">
                                                        <div class="image_wrapper">
                                                            <img class="scale-with-grid product-main-img" src="{{asset('/storage')}}/{{$product->GetMediaByOrderAsc()->thumb??'images/no-image.png'}}" alt="">
                                                        </div>

                                                    </a>
                                                </div>
                                                <div class="desc">
                                                    <h4 class="title themecolor">
                                                        <a href="{{url('/product')}}/{{$product->slug}}" class="themecolor">{{$product->translation->name??$product->name}}</a>
                                                    </h4>
                                                    @if ($isSale == 1)
                                                        <del>
                                                            <span class="amount">{{FormatPrice::price($product->price)}}</span>
                                                        </del>
                                                        <span class="price">
                                                            <span class="amount">{{FormatPrice::price($product->special_price)}}</span>
                                                        </span>
                                                    @else
                                                        <span class="price">
                                                            <span class="amount">{{FormatPrice::price($product->price)}}</span>
                                                        </span>
                                                    @endif

                                                    <span class="description ">
                                                        <hr class="hr_narrow hr_color">
                                                        {{$product->translation->summary??''}}
                                                    </span>
                                                </div>
                                                <div class="action aligncenter">
                                                    <!-- <a class="mfn-link mfn-link-1 " href="#" data-hover="Phasellus"><i class="icon-heart-empty-fa"></i></a> -->
                                                    <a data-id="{{$product->id}}" data-name="{{$product->name}}" class="yeuthich add-wishlist button button_grey button_js"><span class="button_icon"><i class="add-wishlist icon-heart-empty-fa"></i></span></a>
                                                    <a data-id="{{$product->id}}" data-name="{{$product->name}}" class="add-shoopingcart button button_orange button_right button_js kill_the_icon"><span class="button_icon"><i class="icon-basket"></i></span><span class="button_label">@lang('shoppings.add-cart')</span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Product Item -->
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                            <!-- End Product Items-->

                            <!-- Product Link -->
                            {{ $results->links() }}
                            {{--<div class="column one pager_wrapper">--}}
                                {{--<!-- Navigation Area -->--}}
                                {{--<div class="pager">--}}
                                    {{--<div class="pages">--}}
                                        {{--<a href="blog-full-classic.html" class="active">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a href="#">6</a>--}}
                                    {{--</div><a class="next_page" href="#">Next page<i class="icon-right-open"></i></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            <!-- End Product Link -->
                        </div>

                        <!-- Product Futured -->
                        @include('front.products.futuredproduct')
                        <!-- End Product Futured -->


                    </div>
                </div>
                <!-- End New Products Section -->

            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('js/flytocart.js') }}"></script>
    <script>
        (function($) {
            "use strict";
            jQuery('.add-shoopingcart').click(function() {
                var id = $(this).attr("data-id")
                var name = $(this).attr("data-name")
                var price = 0;
                var quantity = 1;
                $.ajax({
                    type:'POST',
                    url:'{{ url("/add-to-cart") }}',
                    data: {
                        'id': id, //just test
                        'name': name,//just test
                        'price': price,//just test
                        'quantity': quantity,//just test
                    },
                    success:function(response){
                        console.log(response['message']);
                    },
                    error:function(response){
                        console.log(response['message']);
                    }
                });
            });
            jQuery('.add-wishlist').click(function() {
                var id = $(this).attr("data-id")
                var name = $(this).attr("data-name")
                var price = 0;
                var quantity = 1;
                $(this).effect("shake", {
                    times: 1
                }, 200);

                $.ajax({
                    type:'POST',
                    url:'{{ url("/add-to-wishlist") }}',
                    data: {
                        'id': id, //just test
                        'name': name,//just test
                        'price': price,//just test
                        'quantity': quantity,//just test
                    },
                    success:function(response){
                        console.log(response['message']); //debug
                    },
                    error:function(response){
                        console.log(response['message']); //debug
                    }
                });
            });
            jQuery('.call').click(function() {
                var target = $( event.target );
                var x = document.getElementById("call-number");
                target.text('');
                target.html(x.innerHTML);
//		    if (x.style.display === "none") {
//		        x.style.display = "block";
//		    } else {
//		        x.style.display = "none";
//		    }
            });
        })(jQuery);
    </script>
@endsection