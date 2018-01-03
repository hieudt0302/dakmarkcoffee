<div id="products" class="section darkbg" style="padding-top:0px; padding-bottom:30px;">
    <div class="section_wrapper clearfix">
        <div class="items_group clearfix">
            <!-- One full width row-->
            <div class="column one column_fancy_heading">
                <div class="fancy_heading">
                    <div class="items_group clearfix">
                        @foreach($new_products as $product)
                        <div class="column one-fourth column_trailer_box">
                            <div class="trailer_box">
                                <a href="{{url('/product')}}/{{$product->slug}}">
                                    <img class="scale-with-grid" src="{{asset('/storage')}}/{{$product->GetMediaByOrderAsc()->thumb??'images/no-image.png'}}" alt="">
                                    <div class="desc">
                                        <h2 class="pro-title">{{$product->translation->name??$product->name}}</h2>
                                        <div class="line"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>