@extends('layouts.master')
@section('title','Dakmark Coffee')

@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section head-sect" style="padding-top:30px; padding-bottom:60px;">
                        <div class="section_wrapper">
                            <h2 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;"><b>{{$info_page->translation->title??$info_page->title}}</b></h2>
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
                             <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <ul class="menu-filter">
                                        <li class="active" data-filter="*"><a href="#">All</a></li>
                                        @foreach($galleries as $gallery)
                                        <li  data-filter=".{{str_slug($gallery->name, "-")}}"><a href="#">{{$gallery->name}}</a></li>
                                        @endforeach

                                        <!-- <li  data-filter=".fruits"><a href="#">Fruits</a></li>
                                        <li  data-filter=".vegetable"><a href="#">vegetable</a></li>
                                        <li  data-filter=".juices"><a href="#">juices</a></li>
                                        <li  data-filter=".dried"><a href="#">dried fruits</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="grid gallery-items">
                                    @foreach($galleries as $gallery)
                                        @foreach($gallery->medias as $m)
                                            <div class="grid-item {{str_slug($gallery->name, "-")}} gallery-it it pro-it">
                                                <a href="{{asset('/storage')}}/{{$m->thumb}}" data-lightbox="test1">
                                                    <img class="pro-img" src="{{asset('/storage')}}/{{$m->source}}" alt="">
                                                    <div class="hover-inner">
                                                        <h1>{{$m->name}}</h1>
                                                        <span class="sub">{{$m->description}}</span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @endforeach
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