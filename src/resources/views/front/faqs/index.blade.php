

@extends('layouts.master')
@section('title','Dakmark Coffee - FAQ')
@section('content')
<!-- Head Section -->

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="sections_group">
                <div class="entry-content">
                    <div class="section head-sect" style="padding-top:30px; padding-bottom:60px;">
                        <div class="section_wrapper">
                            <h2 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;"><b>@lang('common.faq')</b></h2>
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
                              <div class="column one column_faq">
                                <div class="faq">
                                  <div class="mfn-acc faq_wrapper">
                                    @foreach ($faqs as $key => $faq)
                                      <div class="question">
                                        <div class="title">
                                          <span class="num">{{$key+1}}</span><i class="icon-plus acc-icon-plus"></i><i class="icon-minus acc-icon-minus"></i> {{$faq->translation->question}}
                                        </div>
                                        <div class="answer">
                                          <p>{{$faq->translation->answer}}</p>
                                        </div>
                                      </div>
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
    </div>
@endsection
