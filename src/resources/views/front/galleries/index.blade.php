@extends('layouts.master') 
@section('title','Dakmark Coffee')

@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section head-sect" style="padding-top:30px; padding-bottom:60px;">
                        <div class="section_wrapper">
                            <h2 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;"><b>Dakmark Album</b></h2>
                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{ asset('/frontend/images/home/home_coffee_heading.png') }}" alt="" width="78" height="10">
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach($galleries as $gallery)
                    <div class="section mcb-section" style="padding-top:30px; padding-bottom:30px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="items_group clearfix">
                                <div class="wrap mcb-wrap one clearfix">
                                 <div class="row">
                                    <h3 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;">{{$gallery->name}}</h3>
                                </div>
                                <div class="row">
                                    <div class="column one column_column">
                                        <div class="column_attr ">
                                            <div class="gallery gallery-columns-4 gallery-size-thumbnail">
                                                @foreach($gallery->medias as $m)
                                                    <dl class='gallery-item'>
                                                        <dt class='gallery-icon landscape'>
                                                            <a href="{{asset('/storage')}}/{{$m->source}}"><img width="300" height="300" src="{{asset('/storage')}}/{{$m->thumb}}" class="attachment-thumbnail" alt="hoodie_6_front" /></a>
                                                        </dt>
                                                        <dd></dd>
                                                    </dl>
                                                @endforeach
                                            </div>  
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection