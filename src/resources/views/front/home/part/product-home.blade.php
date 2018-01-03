<div id="products" class="section woocommerce darkbg" style="padding-top:0px; padding-bottom:30px;">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading">
                    <div class="items_group clearfix">
                         <div class="column one woocommerce-content">
                            <div class="products_wrapper isotope_wrapper">
                                <ul class="products grid col-4">
                                    @foreach($new_products as $product)
                                    <li class="product has-post-thumbnail">
                                        <div class="item_wrapper">
                                            <div class="hover_box hover_box_product">
                                                <a href="{{url('/product')}}/{{$product->slug}}">
                                                    <img class="scale-with-grid" src="{{asset('/storage')}}/{{$product->GetMediaByOrderAsc()->thumb??'images/no-image.png'}}" alt="">
                                                </a>
                                            </div>
                                            <div class="desc">
                                                <h4><a href="{{url('/product')}}/{{$product->slug}}">{{$product->translation->name??$product->name}}</a></h4>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>