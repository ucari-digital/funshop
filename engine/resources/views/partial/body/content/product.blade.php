<div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    {{!empty($custom_titanium) ? $custom_titanium: ''}}
    <div class="more-info-tab clearfix ">
        <h3 class="new-product-title pull-left">New Products</h3>
        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
            <li><a data-transition-type="backSlide" href="#clothing" data-toggle="tab">Clothing</a></li>
            <li><a data-transition-type="backSlide" href="#electronics" data-toggle="tab">Electronics</a></li>
            <li><a data-transition-type="backSlide" href="#shoes" data-toggle="tab">Shoes</a></li>
        </ul><!-- /.nav-tabs -->
    </div>

    <div class="tab-content outer-top-xs">
        <div class="tab-pane in active" id="all">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                    @for($i=1;$i<6;$i++)
                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('detail')}}"><img src="assets/images/products/p1.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag {{\App\Helper::typeProduct($i)}}"><span>{{\App\Helper::typeProduct($i)}}</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                            <span class="price">
                                                $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a data-toggle="tooltip" class="add-to-cart" href="{{url('detail')}}" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a data-toggle="tooltip" class="add-to-cart" href="{{url('detail')}}" title="Compare">
                                                        <i class="fa fa-signal" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    @endfor
                </div><!-- /.home-owl-carousel -->
            </div><!-- /.product-slider -->
        </div><!-- /.tab-pane -->

        <div class="tab-pane" id="clothing">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    @for($i=1;$i<6;$i++)
                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('detail')}}"><img src="assets/images/products/p5.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag {{\App\Helper::typeProduct($i)}}"><span>{{\App\Helper::typeProduct($i)}}</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                        <span class="price">
                                            $450.99 </span>
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
                                                        <i class="fa fa-signal" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    @endfor
                </div><!-- /.home-owl-carousel -->
            </div><!-- /.product-slider -->
        </div><!-- /.tab-pane -->

        <div class="tab-pane" id="electronics">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    @for($i=1;$i<6;$i++)
                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('detail')}}"><img src="assets/images/products/p1.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag {{\App\Helper::typeProduct($i)}}"><span>{{\App\Helper::typeProduct($i)}}</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                            <span class="price">
                                                $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a data-toggle="tooltip" class="add-to-cart" href="{{url('detail')}}" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a data-toggle="tooltip" class="add-to-cart" href="{{url('detail')}}" title="Compare">
                                                        <i class="fa fa-signal" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    @endfor
                </div><!-- /.home-owl-carousel -->
            </div><!-- /.product-slider -->
        </div><!-- /.tab-pane -->

        <div class="tab-pane" id="shoes">
            <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                    @for($i=1;$i<6;$i++)
                        <div class="item item-carousel">
                            <div class="products">

                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <a href="{{url('detail')}}"><img src="assets/images/products/p1.jpg" alt=""></a>
                                        </div><!-- /.image -->

                                        <div class="tag {{\App\Helper::typeProduct($i)}}"><span>{{\App\Helper::typeProduct($i)}}</span></div>
                                    </div><!-- /.product-image -->


                                    <div class="product-info text-left">
                                        <h3 class="name"><a href="{{url('detail')}}">Floral Print Buttoned</a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        <div class="product-price">
                                            <span class="price">
                                                $450.99 </span>
                                            <span class="price-before-discount">$ 800</span>

                                        </div><!-- /.product-price -->

                                    </div><!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </button>
                                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>

                                                </li>

                                                <li class="lnk wishlist">
                                                    <a data-toggle="tooltip" class="add-to-cart" href="{{url('detail')}}" title="Wishlist">
                                                        <i class="icon fa fa-heart"></i>
                                                    </a>
                                                </li>

                                                <li class="lnk">
                                                    <a data-toggle="tooltip" class="add-to-cart" href="{{url('detail')}}" title="Compare">
                                                        <i class="fa fa-signal" aria-hidden="true"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div><!-- /.action -->
                                    </div><!-- /.cart -->
                                </div><!-- /.product -->

                            </div><!-- /.products -->
                        </div><!-- /.item -->
                    @endfor
                </div><!-- /.home-owl-carousel -->
            </div><!-- /.product-slider -->
        </div><!-- /.tab-pane -->

    </div><!-- /.tab-content -->
</div>