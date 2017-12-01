@extends('layouts.master')
@section('title','Pokofarms - Tìm kiếm')
@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <!-- Head -->
                    <div class="section head-sect" style="padding-top:30px; padding-bottom:30px;">
                        <div class="section_wrapper">
                            <h2 class="title themecolor" style="padding-top:20px; padding-bottom:20px; font-size: 35px;">TAG (CHƯA CÓ LANG) <strong>{{$search_key}}</strong></h2>
                        </div>
                    </div>
                    <!-- End Head -->

                    <!-- Product Result -->
                    <div class="content_wrapper clearfix">
                        <div class="sections_group">
                            <div class="entry-content">
                                <div class="section head-sect" style="padding-top:30px; padding-bottom:30px;">
                                    <div class="section_wrapper">
                                        <h3 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;"><strong>@lang('header.products')</strong></h>
                                    </div>
                                </div>
                                <!-- New Products Section -->
                                <div class="section woocommerce productlist" style="padding-top:30px; padding-bottom:60px;">
                                    <div class="section_wrapper clearfix">
                                        <div class="items_group clearfix">
                                            <!-- One full width row-->
                                            <div class="column one woocommerce-content">
                                                <div class="products_wrapper isotope_wrapper">
                                                    <ul class="products grid">
                                                    @foreach($products as $product)
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
                                                                        @if($product->special_price != 0 && $product->special_price_start_date  <= $product->special_price_end_date )
                                                                            <del>
                                                                                <span class="amount">{{FormatPrice::price($product->price)}}</span>
                                                                            </del>
                                                                            <span class="price"><span class="amount">{{FormatPrice::price($product->special_price)}}</span></span>
                                                                        @else
                                                                            @if($product->old_price > 0)
                                                                                <del>
                                                                                    <span class="amount">{{FormatPrice::price($product->old_price)}}</span>
                                                                                </del>
                                                                            @endif
                                                                            <span class="price"><span class="amount">{{FormatPrice::price($product->price)}}</span></span>
                                                                        @endif

                                                                        <span class="description "><hr class="hr_narrow hr_color">{{$product->translation->summary??''}}</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- End Product Item -->
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="column one pager_wrapper">
                                                <!-- Navigation Area -->
                                                {{ $products->appends(request()->all())->render() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Result -->

                    <!-- Blog Result -->
                    <div class="section mcb-section" style="padding-top:30px; padding-bottom:30px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one clearfix">
                                <div class="column one">
                                    <h3 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;"><strong>@lang('header.blogs')</strong></h>
                                </div>
                                <div class="column one column_blog">
                                    <div class="blog_wrapper isotope_wrapper">
                                        <!-- Masonry blog posts -->
                                        <div class="posts_group lm_wrapper grid col-3 isotope">
                                            @foreach($posts as $post)
                                                <div class="post has-post-thumbnail post-item isotope-item clearfix">
                                                    <div class="image_frame post-photo-wrapper scale-with-grid">
                                                        <div class="image_wrapper">
                                                            <a href="{{url('/')}}/posts/{{$post->slug}}">
                                                                <div class="mask"></div>
                                                                <img src="{{asset('/storage/images/blog/')}}/{{$post->img??'no-image.png'}}" alt="{{$post->translation->title??$post->title}}">
                                                            </a>
                                                            <div class="image_links">
                                                                <a href="{{url('/')}}/posts/{{$post->slug}}" class="link"><i class="icon-link"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="post-desc-wrapper">
                                                        <div class="post-desc">
                                                            <div class="post-meta clearfix">
                                                                <div class="author-date">
                                                                    <span class="author"><i class="icon-user"></i> <a href="#">{{$post->author->last_name}} {{$post->author->first_name}}</a></span>
                                                                    <span class="date"><i class="icon-clock"></i> {{ date('d-m-Y', strtotime($post->created_at)) }}</span>
                                                                </div>
                                                            </div>
                                                            <div class="post-title">
                                                                <h2 class="entry-title"><a href="{{url('/')}}/posts/{{$post->slug}}">{{$post->translation->title??$post->title}}</a></h2>
                                                            </div>
                                                            <div class="post-excerpt">
                                                                <span>{{$post->translation->excerpt??$post->excerpt}}</span>
                                                            </div>
                                                            <div class="post-footer">
                                                                <div class="button-love">
                                                                    <i class="icon-comment-empty-fa"></i> <a href="{{url('/')}}/posts/{{$post->slug}}#comments" class="post-comments">{{count($post->comments)}}</a>
                                                                </div>
                                                                <div class="post-links">
                                                                    <i class="icon-doc-text"></i><a href="{{url('/')}}/posts/{{$post->slug}}" class="post-more">@lang('common.read-more')</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="column one pager_wrapper">
                                    <!-- Navigation Area -->
                                    {{ $posts->appends(request()->all())->render() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Blog Result -->

                </div>
            </div>
        </div>
    </div>
@endsection
