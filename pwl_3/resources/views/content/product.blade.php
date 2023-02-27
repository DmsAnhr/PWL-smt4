@extends('layout.template')

@section('content')
<!-- ================ HEADER-TITLE ================ -->
<section class="s-header-title">
    <div class="container">
        <h1>Shop</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>Shop</li>
        </ul>
    </div>
</section>
<!-- ============== HEADER-TITLE END ============== -->

<!-- ============== S-SINGLE-PRODUCT ============== -->
<section class="s-single-product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <!--===== SLIDER-SINGLE-FOR =====-->
                <div class="slider-single-for">
                    <div class="slide-single-for">
                        <a href="../assets/img/single-slider-1.jpg" class="single-for-img" data-fancybox="prod1">
                            <img src="../assets/img/single-slider-1.jpg" alt="img">
                        </a>
                    </div>
                </div>
                <!--=== SLIDER-SINGLE-FOR END ===-->
                <!--===== SLIDER-SINGLE-NAV =====-->
                <div class="slider-single-nav">
                    <div class="slide-single-nav">
                        <div class="single-nav-img">
                            <img src="../assets/img/single-slider-1.jpg" alt="img">
                        </div>
                    </div>
                </div>
                <!--=== SLIDER-SINGLE-NAV END ===-->
            </div>
            <div class="col-12 col-md-7 single-shop-left">
                <h2 class="title">26 inch mountain bike</h2>
                <div class="single-price">
                    <div class="new-price">$1.699</div>
                    <div class="old-price">$1.799</div>
                </div>
                <div class="single-color">
                    <label>color:</label>
                    <span class="name-color">green</span>
                    <span class="color" style="background-color: #e0e44a;"></span>
                </div>
                <div class="frame-size">
                    <label>frame size:</label>
                    <ul>
                        <li class="active">S</li>
                        <li>M</li>
                        <li>L</li>
                    </ul>
                </div>
                <div class="wheel-size">
                    <label>wheel size:</label>
                    <ul>
                        <li class="active">24</li>
                        <li>26</li>
                        <li>28</li>
                    </ul>
                </div>
                <div class="single-quanity">
                    <label>quanity:</label>
                    <input id="quanity" name="value" value="1">
                </div>
                <div class="single-btn-cover">
                    <a href="#" class="btn btn-buy-now"><span>buy now</span></a>
                    <a href="#" class="btn btn-wishlist"><span>add to wishlist</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============ S-SINGLE-PRODUCT END ============ -->


<!--=============== RELATED PRODUCTS ===============-->
<section class="s-related-products">
    <div class="container">
        <h2 class="title">Related Products</h2>
        <div class="row product-cover">
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <span class="top-sale">top sale</span>
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="/product/product-1" class="product-img"><img src="../assets/img/prod-1.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                            <div class="old-price">$1.799</div>
                        </div>
                        <h6 class="prod-title"><a href="/product/product-1">Granite Peak 24" <br>Girls Mountain Bike</a></h6>
                        <a href="/product/product-1" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="/product/product-1" class="product-img"><img src="../assets/img/prod-2.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                        </div>
                        <h6 class="prod-title"><a href="/product/product-1">Hyper E-Ride Bike 700C <br>20+ Mile Range</a></h6>
                        <a href="/product/product-1" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="/product/product-1" class="product-img"><img src="../assets/img/prod-4.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                        </div>
                        <h6 class="prod-title"><a href="/product/product-1">New Spring Beach Cruiser <br>Bicycle Chrome</a></h6>
                        <a href="/product/product-1" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="product-item">
                    <span class="sale">11%</span>
                    <ul class="product-icon-top">
                        <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                    </ul>
                    <a href="/product/product-1" class="product-img"><img src="../assets/img/prod-3.png" alt="product"></a>
                    <div class="product-item-cover">
                        <div class="price-cover">
                            <div class="new-price">$1.699</div>
                            <div class="old-price">$1.799</div>
                        </div>
                        <h6 class="prod-title"><a href="/product/product-1">Lightweight M370-27speed <br>Aluminum Alloy Mantis</a></h6>
                        <a href="/product/product-1" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="prod-info">
                        <ul class="prod-list">
                            <li>Frame Size: <span>17</span></li>
                            <li>Class: <span>City</span></li>
                            <li>Number of speeds: <span>7</span></li>
                            <li>Type: <span>Rigid</span></li>
                            <li>Country registration: <span>USA</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= RELATED PRODUCTS END =============-->
@endsection