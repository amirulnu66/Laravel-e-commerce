@extends('frontend.master')
@section('title')


@section('contant')
    <div class="info-boxes-container">
        <div class="container">
            <div class="info-box">
                <i class="icon-shipping"></i>

                <div class="info-box-content">
                    <h4>FREE SHIPPING & RETURN</h4>
                    <p>Free shipping on all orders over $99.</p>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->

            <div class="info-box">
                <i class="icon-us-dollar"></i>

                <div class="info-box-content">
                    <h4>MONEY BACK GUARANTEE</h4>
                    <p>100% money back guarantee</p>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->

            <div class="info-box">
                <i class="icon-support"></i>

                <div class="info-box-content">
                    <h4>ONLINE SUPPORT 24/7</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->
        </div><!-- End .container -->
    </div><!-- End .info-boxes-container -->

    <div class="banners-group">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="banner banner-image">
                        <a href="#">
                            <img src="{{URL::to('frontend')}}/assets/images/banners/banner-1.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->

                    <div class="banner banner-image">
                        <a href="#">
                            <img src="{{URL::to('frontend')}}/assets/images/banners/banner-2.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->

                    <div class="banner banner-image">
                        <a href="#">
                            <img src="{{URL::to('frontend')}}/assets/images/banners/banner-3.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                    <div class="banner banner-image">
                        <a href="#">
                            <img src="{{URL::to('frontend')}}/assets/images/banners/banner-4.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->

                    <div class="banner banner-image">
                        <a href="#">
                            <img src="{{URL::to('frontend')}}/assets/images/banners/banner-5.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-lg-3 -->

                <div class="col-lg-9 col-sm-6">
                    <div class="row row-sm">
                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="{{URL::to('frontend')}}/assets/images/products/product-1.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">USB Flash</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$28.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="{{URL::to('frontend')}}/assets/images/products/product-2.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                <span class="product-label label-sale">-20%</span>
                                <span class="product-label label-hot">New</span>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Inline Headset</a>
                                </h2>
                                <div class="price-box">
                                    <span class="old-price">$60.00</span>
                                    <span class="product-price">$48.00</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->

                    <div class="col-6 col-md-4">
                        <div class="product">
                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="{{URL::to('frontend')}}/assets/images/products/product-3.jpg" alt="product">
                                </a>
                                <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                            </figure>
                            <div class="product-details">
                                <div class="ratings-container">
                                    <div class="product-ratings">
                                        <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                    </div><!-- End .product-ratings -->
                                </div><!-- End .product-container -->
                                <h2 class="product-title">
                                    <a href="product.html">Computer Mouse</a>
                                </h2>
                                <div class="price-box">
                                    <span class="product-price">$8.90</span>
                                </div><!-- End .price-box -->

                                <div class="product-action">
                                    <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                        <span>Add to Wishlist</span>
                                    </a>

                                    <a href="product.html" class="paction add-cart" title="Add to Cart">
                                        <span>Add to Cart</span>
                                    </a>

                                    <a href="#" class="paction add-compare" title="Add to Compare">
                                        <span>Add to Compare</span>
                                    </a>
                                </div><!-- End .product-action -->
                            </div><!-- End .product-details -->
                        </div><!-- End .product -->
                    </div><!-- End .col-md-4 -->
                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-4.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Laptop</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-5.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Wireless Headset</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$79.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-6.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    <span class="product-label label-hot">Hot</span>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Active NC</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$119.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->

                    </div>
                    <div class="row">
                        <div class="col-lg-12" style="margin-bottom: 45px;">
                            <div class="product-single-video" style="background-image: url('assets/images/products/single/extended/bg-4.jpg'); height: 100px;">
                                <div class="container">
                                    <h3>Concept Film</h3>

                                </div><!-- End .container -->
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row row-sm">
                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-1.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">USB Flash</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$28.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-2.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    <span class="product-label label-sale">-20%</span>
                                    <span class="product-label label-hot">New</span>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Inline Headset</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="old-price">$60.00</span>
                                        <span class="product-price">$48.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-3.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:60%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Computer Mouse</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$8.90</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->
                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-4.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Laptop</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$299.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-5.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Wireless Headset</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$79.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-6 col-md-4">
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="product.html" class="product-image">
                                        <img src="{{URL::to('frontend')}}/assets/images/products/product-6.jpg" alt="product">
                                    </a>
                                    <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                    <span class="product-label label-hot">Hot</span>
                                </figure>
                                <div class="product-details">
                                    <div class="ratings-container">
                                        <div class="product-ratings">
                                            <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                                        </div><!-- End .product-ratings -->
                                    </div><!-- End .product-container -->
                                    <h2 class="product-title">
                                        <a href="product.html">Active NC</a>
                                    </h2>
                                    <div class="price-box">
                                        <span class="product-price">$119.00</span>
                                    </div><!-- End .price-box -->

                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>

                                        <a href="product.html" class="paction add-cart" title="Add to Cart">
                                            <span>Add to Cart</span>
                                        </a>

                                        <a href="#" class="paction add-compare" title="Add to Compare">
                                            <span>Add to Compare</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        </div><!-- End .col-md-4 -->



                    </div>
                </div><!-- End .col-lg-6 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .banners-group -->

    <div class="mb-4"></div><!-- margin -->

    <div class="featured-section">
        <div class="container">
            <h2 class="carousel-title">Featured Products</h2>

            <div class="featured-products owl-carousel owl-theme owl-dots-top">

                <div class="product">
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="{{URL::to('frontend')}}/assets/images/products/product-1.jpg" alt="product">
                        </a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">USB Flash</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$28.00</span>
                        </div><!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                <span>Add to Cart</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="{{URL::to('frontend')}}/assets/images/products/product-2.jpg" alt="product">
                        </a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Inline Headset</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$48.00</span>
                        </div><!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                <span>Add to Cart</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="{{URL::to('frontend')}}/assets/images/products/product-3.jpg" alt="product">
                        </a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:40%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Computer Mouse</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$8.90</span>
                        </div><!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                <span>Add to Cart</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="{{URL::to('frontend')}}/assets/images/products/product-4.jpg" alt="product">
                        </a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Laptop</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$299.00</span>
                        </div><!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                <span>Add to Cart</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details -->
                </div><!-- End .product -->

                <div class="product">
                    <figure class="product-image-container">
                        <a href="product.html" class="product-image">
                            <img src="{{URL::to('frontend')}}/assets/images/products/product-5.jpg" alt="product">
                        </a>
                        <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                    </figure>
                    <div class="product-details">
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:50%"></span><!-- End .ratings -->
                            </div><!-- End .product-ratings -->
                        </div><!-- End .product-container -->
                        <h2 class="product-title">
                            <a href="product.html">Wireless Headset</a>
                        </h2>
                        <div class="price-box">
                            <span class="product-price">$79.00</span>
                        </div><!-- End .price-box -->

                        <div class="product-action">
                            <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                <span>Add to Wishlist</span>
                            </a>

                            <a href="product.html" class="paction add-cart" title="Add to Cart">
                                <span>Add to Cart</span>
                            </a>

                            <a href="#" class="paction add-compare" title="Add to Compare">
                                <span>Add to Compare</span>
                            </a>
                        </div><!-- End .product-action -->
                    </div><!-- End .product-details -->
                </div><!-- End .product -->

            </div><!-- End .featured-proucts -->
        </div><!-- End .container -->
    </div><!-- End .featured-section -->
@endsection



