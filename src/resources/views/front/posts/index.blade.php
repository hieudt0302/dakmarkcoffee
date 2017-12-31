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
                            <h2 class="title themecolor aligncenter" style="padding-top:20px; padding-bottom:20px; font-size: 35px;">{{$category->translation->name??$category->name}}</h2>
                            <div class="image_frame image_item no_link scale-with-grid aligncenter no_border">
                                <div class="image_wrapper">
                                    <img class="scale-with-grid" src="{{asset('frontend/images/home/home_coffee_heading.png')}}" alt="" width="78" height="10">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Header -->

                    <!-- Blog List -->
                    <div class="section mcb-section" style="padding-top:30px; padding-bottom:30px;">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one clearfix">
                                <div class="column one column_blog">
                                    <div class="blog_wrapper isotope_wrapper">
                                        <!-- Masonry blog posts -->
                                        <div class="posts_group lm_wrapper grid col-2 isotope">
                                            @foreach($posts as $post)
                                            <div class="post has-post-thumbnail post-item isotope-item clearfix">
                                                @if($post->img)
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
                                                @endif
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
                                {{ $posts->links() }}
                            </div>
                        </div>
                    </div>
                    <!-- END Blog List -->
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
                                @foreach($lastPosts as $recentpost)
                                    <li class="post ">
                                        <a href="{{url('/posts')}}/{{$recentpost->slug}}">
                                            @if($recentpost->img)
                                            <div class="photo">
                                                <img width="80" height="80" src="{{ asset('/storage/images/blog')}}/{{$recentpost->img }}" alt="{{$recentpost->translation->title??$recentpost->title}}">
                                            </div>
                                            @else 
                                            <div class="photo">
                                                <img width="80" height="80" src="{{ asset('/storage/images/no-image.png') }}" alt="{{$recentpost->translation->title??$recentpost->title}}">
                                            </div>
                                            @endif
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
                            @foreach($blog_menu as $menu)
                                @if ( !$menu->GetMenuSubLevel1()->isEmpty() )
                                    <li class="cat-item">
                                        <a href="{{url('/cat/')}}/{{$menu->slug}}"><span>{{$menu->translation->name??$menu->name}}</span></a>
                                        <ul class="sub-menu">
                                        @foreach($menu->GetMenuSubLevel1() as $sub)
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="{{url('/cat/')}}/{{$menu->slug}}/{{$sub->slug}}"><span>{{$sub->translation->name??$sub->name}}</span></a>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </li>
                                @else
                                    <li class="cat-item">
                                        <a href="{{url('/cat/')}}/{{$menu->slug}}"><span>{{$menu->translation->name??$menu->name}}</span></a>
                                    </li>
                                @endif
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