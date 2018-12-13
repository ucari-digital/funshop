<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">upsell products</h3>
    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
        @for($i=1;$i<6;$i++)
            <div class="item item-carousel">
            <div class="products">

                <div class="product">
                    <div class="product-image">
                        <div class="image">
                            <a href="{{url('detail')}}"><img  src="assets/images/products/p1.jpg" alt=""></a>
                        </div><!-- /.image -->

                        <div class="tag {{\App\Helper::typeProduct($i)}}"><span>{{\App\Helper::typeProduct($i)}}</span></div>
                    </div><!-- /.product-image -->


                    <div class="product-info text-left">
                        <h3 class="name"><a href="{{url('detail')}}">Floral Print Buttoned</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>

                        <div class="product-price">
				            <span class="price">$650.99</span>
                            <span class="price-before-discount">$ 800</span>
                        </div><!-- /.product-price -->

                    </div><!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                </li>

                                <li class="lnk wishlist">
                                    <a class="add-to-cart" href="{{url('detail')}}" title="Wishlist">
                                        <i class="icon fa fa-heart"></i>
                                    </a>
                                </li>

                                <li class="lnk">
                                    <a class="add-to-cart" href="{{url('detail')}}" title="Compare">
                                        <i class="fa fa-signal"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- /.action -->
                    </div><!-- /.cart -->
                </div><!-- /.product -->

            </div><!-- /.products -->
        </div>
        @endfor
    </div>
</section>