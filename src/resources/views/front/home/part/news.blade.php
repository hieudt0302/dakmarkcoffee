<div class="section mcb-section" style="padding-top:30px; padding-bottom:30px; background-color: rgba(61, 43, 19, 0.86);">
    <div class="section_wrapper mcb-section-inner">
        <div class="wrap mcb-wrap one clearfix">
            <div class="column mcb-column one column_fancy_heading ">
                <div class="fancy_heading fancy_heading_arrows">
                    <div class="animate fadeInUp" data-anim-type="fadeInUp">
                        <h2 class="title"><i class="icon-right-dir"></i>Tin Tức - Khuyến Mãi<i class="icon-left-dir"></i></h2>
                    </div>
                </div>
            </div>
            <div class="column one column_blog">
                <div class="blog_wrapper isotope_wrapper">
                    <!-- Masonry blog posts -->
                    <div class="posts_group lm_wrapper masonry isotope">
                        @foreach($new_blogs as $post)
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
        </div>
    </div>
</div>