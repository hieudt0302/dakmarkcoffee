@extends('layouts.master')
@section('title','Dakmark Coffee - Home')
@section('content')

<!-- Slider -->
@include('front.home.slider')
 <!-- End Slider -->

<div id="Content">
    <div class="content_wrapper clearfix">
        <div class="sections_group">
            <div class="entry-content">
                <!-- Intro -->
                @include('front.home.part.intro')
                <!-- End Intro -->

                <!-- Products -->
                @include('front.home.part.product-home')
                <!-- End Products -->

                <!-- Quality -->
                @include('front.home.part.quality')
                <!-- End Quality -->

                <!-- Benefit-->
                @include('front.home.part.benefit')
                <!-- End Benefit-->

                <!-- Divider -->
                <div class="section full-width darkbg" style="padding-top:0px; padding-bottom:200px; background-image:url({{asset('frontend/images/home/backgrounddevider.png')}}); background-repeat:no-repeat; ">
                    <div class="section_wrapper mcb-section-inner"></div>
                </div>
                <!-- End Divider -->

                <!-- Info-->
                @include('front.home.part.info')
                <!-- End Info-->

                <!-- Coffee Flavor-->
                @include('front.home.part.coffeeflavor')
                <!-- End Coffee Flavor-->

                <!-- Testimonials -->
                @include('front.home.part.testimonials')
                <!-- End Testimonials -->

                <!-- Community -->
                @include('front.home.part.community')
                <!-- End Community -->

                <!-- News -->
                @include('front.home.part.news')
                <!-- End News -->

            </div>
        </div>
    </div>
</div>

    <!-- Products -->
{{--    @include('front.home.products')--}}
    <!-- End Products -->

    <!-- Promo -->
    {{--@include('front.home.promo')--}}
    <!-- End Promo -->

    <!-- Blogs -->
    {{--@include('front.home.blogs')--}}
    <!-- End Blogs -->



@endsection