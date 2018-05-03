@extends('layouts.master')
@section('title',$product->name)
{{--@section('header')--}}
{{--<!-- Share Nav -->--}}
{{--@include('layouts.share')--}}
{{--@endsection--}}
@section('content')

	<div id="Content">
		<div class="content_wrapper clearfix">
			<div class="sections_group">
				<div class="section">
					<div class="section_wrapper clearfix">
						<div class="items_group clearfix">
							<div class="column one woocommerce-content">
								<div id="" class="product type-product has-post-thumbnail sale shipping-taxable purchasable product-type-simple product-cat-posters instock">
									<div class="product_wrapper clearfix">
										<!-- Media -->
										<div class="column one-second product_image_wrapper">
											<div class="image_frame scale-with-grid">
											@if(count($product->medias) > 0)
												@foreach($product->medias as $key =>  $media)
													@if($key === 0)
														<div class="images image_wrapper">
															<a href="{{asset('/storage')}}/{{$media->source}}" class="woocommerce-main-image zoom" title="{{$media->description}}" data-rel="prettyPhoto[product-gallery]">
																<div class="mask"></div><img width="500" height="500" src="{{asset('/storage')}}/{{$media->source}}" class="scale-with-grid wp-post-image product-main-img" alt="{{$media->description}}" title="{{$media->description}}" />
															</a>
														</div>
													@else
														@if($key === 1)
														<div class="thumbnails">
															<div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
																<div class="image_wrapper">
																	<a href="{{asset('/storage')}}/{{$media->source}}" class="woocommerce-main-image zoom" title="{{$media->description}}" data-rel="prettyPhoto[product-gallery]">
																		<div class="mask"></div><img width="80" height="100" src="{{asset('/storage')}}/{{$media->source}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="{{$media->description}}" title="{{$media->description}}" caption="{{$media->description}}">
																	</a>
																</div>
															</div>
														@else
															<div class="image_frame scale-with-grid" ontouchstart="this.classList.toggle('hover');">
																<div class="image_wrapper">
																	<a href="{{asset('/storage')}}/{{$media->source}}" class="woocommerce-main-image zoom" title="{{$media->description}}" data-rel="prettyPhoto[product-gallery]">
																		<div class="mask"></div><img width="80" height="100" src="{{asset('/storage')}}/{{$media->source}}" class="attachment-shop_thumbnail size-shop_thumbnail" alt="{{$media->description}}" title="{{$media->description}}" caption="{{$media->description}}">
																	</a>
																</div>
															</div>
														@endif
														@if($key === (count($product->medias)-1))
														</div>
														@endif
													@endif
												@endforeach
											@else
												<div class="images image_wrapper">
													<a href="{{asset('storage/images/no-image.png') }}" class="woocommerce-main-image zoom" title="" data-rel="prettyPhoto[product-gallery]">
														<div class="mask"></div><img width="500" height="500" src="{{asset('storage/images/no-image.png') }}" class="scale-with-grid wp-post-image product-main-img" alt="" title="" />
													</a>
												</div>
											@endif
											</div>
										</div>
										<!-- End Media -->

										<!-- Info -->
										<div class="column one-second summary entry-summary">
											<h1 class="product_title entry-title">{{$product->translation->name??$product->name}}</h1>
											<div class="product-meta clearfix">
												<div class="woocommerce-product-rating">
													<div class="star-rating" title="">
														<span style="width:{{$starAvg*20}}%">
													</div>
													{{--<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span itemprop="reviewCount" class="count">4</span> customer reviews)</a>--}}
												</div>
												@if($product->sold_off)
													<strong>Sold Off</strong>
												@else
													@if(!$is_sales)
														<p class="price">
															<ins><span class="amount">{{FormatPrice::price($product->price)}}</span></ins>
														</p>
														@php($final_price = $product->price)
													@else
														<p class="price">
															<ins><span class="amount">{{FormatPrice::price($product->special_price)}}</span></ins>
															<del><span class="amount">{{FormatPrice::price($product->price)}}</span></del>
														</p>
														@php($final_price = $product->special_price)
													@endif
												@endif
											</div>
											<div class="excerpt">
												<p>
													{{$product->translation->summary??$product->summary}}
												</p>
											</div>
											@if(!$product->call_for_price)
												@if(!$product->disable_buy_button)
													<form class="cart" method="post" enctype='multipart/form-data'>
														<div class="quantity"><input type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" /></div>
														<input type="hidden" name="add-to-cart" value="1" />
														<button type="button" class="add-shoopingcart single_add_to_cart_button button button_left button_js">@lang('shoppings.add-cart')</button>
													</form>
												@endif
											@else
												<button class="call btn btn-mod btn-large btn-round" href="javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></button>
											@endif

											<div class="product_meta">
												<span class="posted_sku">SKU: {{$product->sku}}</span>
												<span class="posted_in">
													Tags:
													@foreach($product->tags as $tag)
														<a href="#" rel="tag">{{$tag->name}}</a>
													@endforeach
												</span>
												{{--<span class="posted_in">Danh Mục: <a href="shop.html" rel="tag">Posters</a>.</span>--}}
											</div>
										</div>
										<!-- End Info -->

										<!-- Product Tabs -->
										<div class="column one">
											<div class="tabsanpham bg-gray-lighter pt-0 pb-0" id="product-tabs">
												<div class="container relative">
													<ul class="nav nav-tabs tablist" role="tablist">
														<li><a href="#gioithieu" class="active">@lang('product.description')</a></li>
														<li><a href="#specs">@lang('product.add-info')</a></li>
														<li><a href="#reviewbox">@lang('product.reviews') ({{count($product->comments)}})</a></li>
													</ul>
												</div>
											</div>
										</div>
										<!-- End Product Tabs -->

										<!-- Product Intro -->
										<div class="column one" id="gioithieu">
											<div class="post-content">
												{!!$product->translation->description??''!!}
											</div>
										</div>
										<!-- End Product Intro -->

										<!-- Product Specs-->
										<div class="column one" id="specs">
											<h3 class="section-title ">@lang('product.add-info')</h3>
											<div class="specs-content">
												{!!$product->translation->specs??''!!}
											</div>
										</div>
										<!-- End Product Specs-->

										<!-- Product Review -->
										<div class="column one" id="reviewbox">
											<h3 class="section-title">@lang('product.reviews') ({{count($product->comments)}})<a href="#respond " class="section-more alignright">@lang('product.add-review')</a></h3>
											<div class="review-content">
												<div id="reviews">
													<div id="comments">
														<ol class="commentlist">
															@foreach($product->comments as  $review)
															<li itemscope itemtype="http://schema.org/Review" class="comment even thread-even depth-1" id="li-comment-{{$review->id}}">
																<div id="comment-{{$review->id}}" class="comment_container"><img alt='{{$review->name}}' src='{{ \App\Helpers\Blade\Gravatar::getdefault($review->email) }}' class='avatar avatar-60 photo' height='60' width='60' />
																	<div class="comment-text">
																		<div itemscope itemtype="http://schema.org/Rating" class="star-rating">
																			<span style="width:{{$review->rate*20}}%"></span>
																		</div>
																		<p class="meta">
																			<strong>{{$review->name}}</strong> &ndash;
																			<time datetime="{{date('M d, Y',strtotime($review->created_at))}}<">
																				{{date('M d, Y',strtotime($review->created_at))}}<
																			</time>
																			:
																		</p>
																		<div class="description">
																			<p>
																				{{$review->comment}}
																			</p>
																		</div>
																	</div>
																</div>
															</li>
															@endforeach
														</ol>
													</div>
												</div>
											</div>
										</div>
										<!-- End Product Review -->

										<!-- Product Review Form -->
										<div class="column one" id="respond">
											<h3 class="section-title">@lang('product.add-review')</h3>
											<!-- Form -->
											<form method="post" action="{{url('/products')}}/{{$product->slug}}/review" id="form" role="form" class="form review-content">
												{{ csrf_field() }}
												@guest
												<input type="text" name="name" id="name" class="input-md form-control" placeholder="Name *" maxlength="100" required>
												<input type="email" name="email" id="email" class="input-md form-control" placeholder="Email*" maxlength="100" required>
												<input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
												@else
													<input type="hidden" id="reviewer_id" name="reviewer_id" value="{{Auth::user()->id}}">
													<input type="hidden" id="name" name="name" value="{{Auth::user()->last_name}} {{Auth::user()->first_name}}">
													<input type="hidden" id="email" name="email" value="{{Auth::user()->email}}">
													<input type="hidden" id="product_id" name="product_id" value="{{$product->id}}">
													<input type="hidden" id="website" name="website" value="">
												@endguest
												<div class="review-rating">
													<a class="star" id="1-star">
														<i class="danhgia icon-star-empty"></i>
													</a>
													<a class="star" id="2-star">
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
													</a>
													<a class="star" id="3-star">
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
													</a>
													<a class="star" id="4-star">
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
													</a>
													<a class="star" id="5-star">
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
														<i class="danhgia icon-star-empty"></i>
													</a>
												</div>
												<div class="column one" style="display: none">
													<select class="input-md round form-control" id="yourrating" name="rate">
														<option selected>-- Select one --</option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
												</div>
												<!-- Comment -->
												<textarea name="comment" id="" class="" rows="6" placeholder="{{ __('product.comment')}}*" maxlength="400"></textarea>

												<!-- Send Button -->
												<button type="submit" class="btn btn-mod btn-medium btn-round ">
													{{ __('product.send-review') }}
												</button>
											</form>
										</div>
										<!-- End Product Review Form -->

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

@section('scripts')

<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="{{ asset('js/flytocart.js') }}"></script>
<script>
    (function($) {
        "use strict";
        jQuery('.add-shoopingcart').click(function() {
			 var quantity = $("input[name='quantity']").val();
			 $.ajax({
				 type:'POST',
				 url:'{{ url("/add-to-cart") }}',
				 data: {
					 'id': '{{$product->id}}',
					 'name': '{{$product->name}}',
					 'price': {{$final_price}},
					 'quantity': quantity,
				 },
				 success:function(response){
					 console.log(response['message']); //debug
					 //$('.cartItemCount').html($('.cartItemCount').html().replace (/\((.*?)\)/g,"(" + response['newCartItemCount'] + ")"));
					 $('.cartItemCount').html(response['newCartItemCount']);
				 },
				 error:function(response){
					 console.log(response['message']); //debug
				 }
			 });
		 });
        jQuery('.add-wishlist').click(function() {
			 $(this).effect("shake", {
				 times: 1
			 }, 200);

			 $.ajax({
				 type:'POST',
				 url:'{{ url("/add-to-wishlist") }}',
				 data: {
					 'id': '{{$product->id}}',
					 'name': '{{$product->name}}',
					 'price': {{$product->price}},
					 'quantity': 1,
				 },
                 success:function(response){
					 console.log(response['message']); //debug
				     if(response['status'] === 'error')
				   	 window.location.href = "/login";
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