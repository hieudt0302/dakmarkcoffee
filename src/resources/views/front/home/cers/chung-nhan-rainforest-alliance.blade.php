@extends('layouts.master')
@section('title','Dakmark Coffee')

@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section head-sect" style="padding-top:30px; padding-bottom:60px;">
                        <div class="section_wrapper">
                            <h2 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;"><b>{{$info_page_translation->title}}</b></h2>
                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{ asset('/frontend/images/home/home_coffee_heading.png') }}" alt="" width="78" height="10">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Blog -->
                    <div class="section mcb-section" style="padding-top:30px; padding-bottom:30px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one clearfix">
                                <div class="column one column_blog">
                                    <div class="blog_wrapper isotope_wrapper">
                                        <div class="post-wrapper-content">
                                            <div class="section the_content has_content">
                                                <div class="section_wrapper">
                                                    <div class="the_content_wrapper">
                                                        {!! $info_page->translation->content??$info_page->content !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection