@extends('layouts.master')
@section('title','Dakmark Coffee - Post')
{{--@section('header')--}}
{{--<!-- Share Nav -->--}}
{{--@include('layouts.share')--}}
{{--@endsection--}}
@section('content')
    <div id="Content">
        <div class="content_wrapper clearfix">
            <!-- Content -->
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
                            <h2 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;">{{$post->translation->title??$post->title}}</h2>
                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{asset('frontend/images/home/home_coffee_heading.png')}}" alt="" width="78" height="10">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Header -->

                    <!-- Blog -->
                    <div class="section mcb-section" style="padding-top:30px; padding-bottom:30px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one clearfix">
                                <div class="column one column_blog">
                                    <div class="blog_wrapper isotope_wrapper">
                                        {{--<div class="column one single-photo-wrapper">--}}
                                            {{--<div class="image_frame scale-with-grid disabled">--}}
                                                {{--<div class="image_wrapper">--}}
                                                    {{--<img width="800" height="480" src="images/home/blog-2.jpg" class="scale-with-grid wp-post-image" alt="lịch sử và ý nghĩa của ngày valentine" itemprop="image">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <div class="post-wrapper-content">
                                            <div class="section the_content has_content">
                                                <div class="section_wrapper">
                                                    <div class="the_content_wrapper">
                                                        {{$post->translation->content??$post->content}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column one author-box" style="padding-top: 50px;">
                                        <div class="author-box-wrapper">
                                            <div class="avatar-wrapper">
                                                <img alt="Muffin Group" src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&f=y" class="avatar avatar-64 photo" height="64" width="64">
                                            </div>
                                            <div class="desc-wrapper">
                                                <h5><a href="#">{{$post->author->last_name}} {{$post->author->first_name}}</a></h5>
                                                <div class="desc">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Blog -->

                    <!-- Comments -->
                    <div class="section section-post-comments" id="comments">
                        <div class="section_wrapper clearfix">
                            <!-- One full width row-->
                            <div class="column one comments">
                                <div id="comments">

                                    <h4 id="comments-title">({{count($post->comments)}}) {{ __('blog.comment') }}</h4>
                                    <!-- Comment List-->
                                    <ol class="commentlist">
                                        @foreach($post->comments as $comment)
                                        <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1 parent" id="{{$comment->id}}">
                                            <div id="div-comment-4" class="comment-body">
                                                <div class="comment-author vcard">
                                                    <img alt="" src="{{ \App\Helpers\Blade\Gravatar::getdefault($comment->email) }}" class="avatar avatar-64 photo" height="64" width="64">
                                                    <cite class="fn">{{$comment->name}}</cite><span class="says"></span>
                                                </div>
                                                <div class="comment-meta commentmetadata">
                                                    <a href="#">{{ date('d-m-Y', strtotime($comment->created_at)) }}</a>
                                                </div>
                                                <p>
                                                    {{$comment->comment}}
                                                </p>
                                                <div class="reply">
                                                    {{--class: comment-reply-login--}}
                                                    <a rel="nofollow" class="" href="#respond">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ol>
                                    <!-- END Comment List-->

                                    <!-- Comment Form-->
                                    <div id="respond" class="comment-respond">
                                        <div class="column one column_column">
                                            <div class="column_attr ">
                                                <h3 id="reply-title" class="comment-reply-title">@lang('blog.leave-a-comment')</h3>
                                                <div id="contactWrapper_popup">
                                                    <form class="form flv_fullwidth" method="post" action="{{url('/posts')}}/{{$post->slug}}/comment" id="contactform_popup" role="form">
                                                        {{ csrf_field() }}
                                                        @guest
                                                        <span><input type="text" name="name" id="name" aria-required="true" aria-invalid="false" placeholder="{{ __('blog.name') }} *"></span>
                                                        <span><input type="email" name="email" id="email" aria-required="true" aria-invalid="false" placeholder="{{ __('blog.email') }} *"></span>
                                                        <!-- <span><input type="text" name="subject_popup" id="subject_popup" aria-required="true" aria-invalid="false" placeholder="Subject"></span> -->
                                                        @else
                                                        <input type="hidden" id="reader_id" name="reader_id" value="{{Auth::user()->id}}">
                                                        <input type="hidden" id="post_id" name="post_id" value="{{$post->id}}">
                                                        <input type="hidden" id="name" name="name" value="{{Auth::user()->last_name}} {{Auth::user()->first_name}}">
                                                        <input type="hidden" id="email" name="email" value="{{Auth::user()->email}}">
                                                        <!-- <span><input type="text" name="subject_popup" id="subject_popup" aria-required="true" aria-invalid="false" placeholder="Subject"></span> -->
                                                        @endguest
                                                        <span><textarea name="comment" id="body_popup" rows="6" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span>
                                                        {{--<span><textarea name="comment" id="comment" aria-required="true" aria-invalid="false"  class="comt input-md form-control" rows="6" placeholder="{{ __('blog.comment') }}*"></textarea></span>--}}
                                                        <span><input type="submit" value="{{ __('blog.send-comment') }}" class="button button_left button_js" id="submit_popup" onclick="return check_values_popup();"></span>
                                                    </form>
                                                    <div id="confirmation_popup"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END Comment Form-->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Comments -->
                </div>
            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div class="sidebar sidebar-1 four columns">
                <div class="widget-area clearfix " style="min-height: 2064px;">
                    <!-- Search form-->
                    <aside class="widget widget_search">
                        <h3>@lang('header.search')</h3>
                        {!! Form::open(array('url' => '/search', 'class' => 'form')) !!}
                        <div class="search-wrap">
                            <input type="hidden" name="searchtype" value="blog">
                            <input type="text" class="form-control search-field" id="s" name="key" placeholder="@lang('header.enter-keyword')">
                        </div>
                        {!! Form::close() !!}
                    </aside>

                    <aside class="widget widget_mfn_recent_posts">
                        <h3>@lang('blog.last-posts')</h3>
                        <div class="Recent_posts">
                            <ul>
                                @foreach($last_posts as $recentpost)
                                    <li class="post ">
                                        <a href="{{url('/posts')}}/{{$recentpost->slug}}">
                                            <div class="photo">
                                                <img width="80" height="80" src="{{ asset('images/blog/' . $recentpost->img) }}" class="scale-with-grid wp-post-image" alt="beauty_portfolio_2">
                                            </div>
                                            <div class="desc">
                                                <h6>{{$recentpost->translation->title??$recentpost->title}}</h6><span class="date"><i class="icon-clock"></i>{{ date('d-m-Y', strtotime($recentpost->created_at)) }}</span>
                                            </div>
                                        </a>
                                    </li>

                                @endforeach
                            </ul>

                        </div>
                    </aside>

                    <!-- Categories Area -->
                    <aside class="widget widget_categories">
                        <h3>@lang('common.categories')</h3>
                        <ul>
                            @foreach($blog_menu as $cat)
                                <li class="cat-item">
                                    <a href="{{url('/blog')}}/{{$cat->slug}}" title="">
                                        <i class="fa fa-circle-thin" aria-hidden="true"></i>  {{$cat->translation->name??$cat->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </aside>

                    <!--Tag Cloud -->
                    <aside class="widget widget_tag_cloud">
                        <h3>Tags (CHƯA CÓ LANG)</h3>
                        <div class="tagcloud">
                            @foreach($tags as $tag)
                                <a href="{{url('/tag')}}/{{$tag->slug}}" class="tag-link-20" title="">{{$tag->translation->name??$tag->name}}</a>
                            @endforeach

                        </div>
                    </aside>
                </div>
            </div>
            <!-- End Sidebar -->

        </div>
    </div>
@endsection