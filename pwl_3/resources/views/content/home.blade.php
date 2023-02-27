@extends('layout.template')

@section('content')
    <!-- =============== main-slider =============== -->
    <section class="s-main-slider">
        <div class="main-slide-navigation"></div>
        <ul class="main-soc-list">
            <li><a href="https://www.facebook.com/rovadex">facebook</a></li>
            <li><a href="https://twitter.com/RovadexStudio">twitter</a></li>
            <li><a href="https://www.instagram.com/rovadex/">instagram</a></li>
        </ul>
        <div class="main-slider">
            <div class="main-slide">
                <div class="main-slide-bg" style="background-image: url(assets/img/bg-slider.svg);"></div>
                <div class="container">
                    <div class="main-slide-info">
                        <h2 class="title">best bikes for you</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="slide-img-cover">
                        <a href="single-shop.html" class="lable-bike">
                            <div class="lable-bike-img"><img src="assets/img/bike-info-slide.jpg" alt="img"></div>
                            <div class="lable-bike-item">
                                <div class="model">model SX-200</div>
                                <div class="price">$1399</div>
                            </div>
                        </a>
                        <img src="assets/img/img-slider.png" alt="img" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="main-slide">
                <div class="main-slide-bg" style="background-image: url(assets/img/bg-slider-2.svg);"></div>
                <div class="container">
                    <div class="main-slide-info">
                        <h2 class="title">best bikes for you</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore consectetur sint iure id
                            expedita saepe.</p>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="slide-img-cover">
                        <a href="single-shop.html" class="lable-bike">
                            <div class="lable-bike-img"><img src="assets/img/bike-info-slide.jpg" alt="img"></div>
                            <div class="lable-bike-item">
                                <div class="model">model M-300</div>
                                <div class="price">$1199</div>
                            </div>
                        </a>
                        <img src="assets/img/img-slider-2.png" alt="img" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="main-slide">
                <div class="main-slide-bg" style="background-image: url(assets/img/bg-slider-3.svg);"></div>
                <div class="container">
                    <div class="main-slide-info">
                        <h2 class="title">best bikes for you</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio tenetur ab ut!
                            Qui, facilis.</p>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="slide-img-cover">
                        <a href="single-shop.html" class="lable-bike">
                            <div class="lable-bike-img"><img src="assets/img/bike-info-slide.jpg" alt="img"></div>
                            <div class="lable-bike-item">
                                <div class="model">model X-230</div>
                                <div class="price">$1099</div>
                            </div>
                        </a>
                        <img src="assets/img/img-slider-3.png" alt="img" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="main-slide">
                <div class="main-slide-bg" style="background-image: url(assets/img/bg-slider.svg);"></div>
                <div class="container">
                    <div class="main-slide-info">
                        <h2 class="title">best bikes for you</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore.</p>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="slide-img-cover">
                        <a href="single-shop.html" class="lable-bike">
                            <div class="lable-bike-img"><img src="assets/img/bike-info-slide.jpg" alt="img"></div>
                            <div class="lable-bike-item">
                                <div class="model">model SX-200</div>
                                <div class="price">$1399</div>
                            </div>
                        </a>
                        <img src="assets/img/img-slider.png" alt="img" class="slide-img">
                    </div>
                </div>
            </div>
            <div class="main-slide">
                <div class="main-slide-bg" style="background-image: url(assets/img/bg-slider-2.svg);"></div>
                <div class="container">
                    <div class="main-slide-info">
                        <h2 class="title">best bikes for you</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore consectetur sint iure id
                            expedita saepe.</p>
                        <a href="single-shop.html" class="btn"><span>buy now</span></a>
                    </div>
                    <div class="slide-img-cover">
                        <a href="single-shop.html" class="lable-bike">
                            <div class="lable-bike-img"><img src="assets/img/bike-info-slide.jpg" alt="img"></div>
                            <div class="lable-bike-item">
                                <div class="model">model M-300</div>
                                <div class="price">$1199</div>
                            </div>
                        </a>
                        <img src="assets/img/img-slider-2.png" alt="img" class="slide-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============= main-slider end ============= -->

    <!--================ S-FIND-BIKE ================-->
    <section class="s-find-bike">
        <div class="container">
            <form class="find-bike-form">
                <h2 class="title">find the bike</h2>
                <ul class="form-wrap">
                    <li>
                        <label>Type</label>
                        <select class="nice-select">
                            <option selected="selected">Mountain bike</option>
                            <option>Hybrid/Comfort Bike</option>
                            <option>Cyclocross Bike</option>
                            <option>BMX/Trick Bike</option>
                            <option>Road Bike</option>
                            <option>Track Bike</option>
                        </select>
                    </li>
                    <li>
                        <label>Wheel Size</label>
                        <select class="nice-select">
                            <option selected="selected">20</option>
                            <option>24</option>
                            <option>26</option>
                            <option>27</option>
                            <option>27.5</option>
                            <option>28</option>
                        </select>
                    </li>
                    <li>
                        <label>Brand</label>
                        <select class="nice-select">
                            <option selected="selected">Pinarello</option>
                            <option>Eddy Merckx</option>
                            <option>Specialized</option>
                            <option>Giant</option>
                            <option>Trek</option>
                            <option>BMC</option>
                        </select>
                    </li>
                    <li><a href="shop.html" class="btn"><span>search</span></a></li>
                </ul>
            </form>
        </div>
    </section>
    <!--============== S-FIND-BIKE END ==============-->

    <!--============== S-CATEGORY-BICYKLE ==============-->
    <section class="s-category-bicycle">
        <div class="container">
            <div class="slider-categ-bicycle">
                <div class="slide-categ-bicycle">
                    <div class="categ-bicycle-item">
                        <img src="assets/img/categ-2.png" alt="category">
                        <div class="categ-bicycle-info">
                            <h4 class="title">mountain <br>& road bikes</h4>
                            <a href="shop.html" class="btn"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                <div class="slide-categ-bicycle">
                    <div class="categ-bicycle-item">
                        <img src="assets/img/categ-3.png" alt="category">
                        <div class="categ-bicycle-info">
                            <h4 class="title">bicycle <br>spare parts</h4>
                            <a href="shop.html" class="btn"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                <div class="slide-categ-bicycle">
                    <div class="categ-bicycle-item">
                        <img src="assets/img/categ-1.png" alt="category">
                        <div class="categ-bicycle-info">
                            <h4 class="title">accessories <br>& clothing</h4>
                            <a href="shop.html" class="btn"><span>view more</span></a>
                        </div>
                    </div>
                </div>
                <div class="slide-categ-bicycle">
                    <div class="categ-bicycle-item">
                        <img src="assets/img/categ-3.png" alt="category">
                        <div class="categ-bicycle-info">
                            <h4 class="title">bicycle <br>spare parts</h4>
                            <a href="shop.html" class="btn"><span>view more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--============ S-CATEGORY-BICYKLE END ============-->

    <!--=============== S-OUR-ADVANTAGES ===============-->
    <section class="s-our-advantages" style="background-image: url(assets/img/bg-advantages.jpg);">
        <span class="mask"></span>
        <div class="container">
            <h2 class="title">Our Advantages</h2>
            <div class="our-advantages-wrap">
                <div class="our-advantages-item">
                    <img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/advantages-1.svg"
                        alt="icon">
                    <h5>Free shipping <br>from $500</h5>
                </div>
                <div class="our-advantages-item">
                    <img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/advantages-2.svg"
                        alt="icon">
                    <h5>Warranty service <br>for 3 months</h5>
                </div>
                <div class="our-advantages-item">
                    <img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/advantages-3.svg"
                        alt="icon">
                    <h5>Exchange and return <br>within 14 days</h5>
                </div>
                <div class="our-advantages-item">
                    <img class="lazy" src="assets/img/placeholder-all.png" data-src="assets/img/advantages-4.svg"
                        alt="icon">
                    <h5>Discounts for <br>customers</h5>
                </div>
            </div>
        </div>
    </section>
    <!--============= S-OUR-ADVANTAGES END =============-->

    <!--================== S-TOP-SALE ==================-->
    <section class="s-top-sale">
        <div class="container">
            <h2 class="title">Top sale</h2>
            <div class="row product-cover">
                <div class="col-sm-6 col-lg-3">
                    <div class="product-item">
                        <ul class="product-icon-top">
                            <li><a href="#"><i class="fa fa-refresh" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a></li>
                        </ul>
                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-9.png" alt="product"></a>
                        <div class="product-item-cover">
                            <div class="price-cover">
                                <div class="new-price">$1.699</div>
                                <div class="old-price">$1.799</div>
                            </div>
                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls Mountain Bike</a>
                            </h6>
                            <a href="single-shop.html" class="btn"><span>buy now</span></a>
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
                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-10.png"
                                alt="product"></a>
                        <div class="product-item-cover">
                            <div class="price-cover">
                                <div class="new-price">$1.499</div>
                                <div class="old-price">$1.799</div>
                            </div>
                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls Mountain Bike</a>
                            </h6>
                            <a href="single-shop.html" class="btn"><span>buy now</span></a>
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
                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-11.png"
                                alt="product"></a>
                        <div class="product-item-cover">
                            <div class="price-cover">
                                <div class="new-price">$1.699</div>
                                <div class="old-price">$1.799</div>
                            </div>
                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls Mountain Bike</a>
                            </h6>
                            <a href="single-shop.html" class="btn"><span>buy now</span></a>
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
                        <a href="single-shop.html" class="product-img"><img class="lazy"
                                src="assets/img/placeholder-all.png" data-src="assets/img/prod-12.png"
                                alt="product"></a>
                        <div class="product-item-cover">
                            <div class="price-cover">
                                <div class="new-price">$1.499</div>
                                <div class="old-price">$1.799</div>
                            </div>
                            <h6 class="prod-title"><a href="single-shop.html">Granite Peak 24" <br>Girls Mountain Bike</a>
                            </h6>
                            <a href="single-shop.html" class="btn"><span>buy now</span></a>
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
    <!--================ S-TOP-SALE END ================-->

    <!--================== S-FEEDBACK ==================-->
    <section class="s-feedback" style="background-image: url(assets/img/bg-feedback.jpg);">
        <span class="effwct-bg-feedback" style="background-image: url(assets/img/effect-bg-feedback.svg);"></span>
        <span class="mask"></span>
        <div class="container">
            <h2 class="title">feedback</h2>
            <div class="feedback-slider">
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut
                                magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="assets/img/feedback-photo-1.png" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Li piters</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut
                                magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="assets/img/feedback-photo-2.png" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Sam Barton</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut
                                magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="assets/img/feedback-photo-3.png" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Zoe Tyler</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="feedback-slide">
                    <div class="feedback-item">
                        <div class="feedback-content">
                            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempoinc ididunt ut
                                magna aliqua dolor sit amet, consectetur adipiscing elit magna”</p>
                        </div>
                        <div class="feedback-item-top">
                            <img src="assets/img/feedback-photo-2.png" alt="photo">
                            <div class="feedback-title">
                                <h5 class="title"><span>Sam Barton</span></h5>
                                <ul class="rating">
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-bg"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="star-not-bg"><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ S-FEEDBACK END ================-->

    <!--================== S-OUR-NEWS ==================-->
    <section class="s-our-news">
        <div class="container">
            <h2 class="title">Our News</h2>
            <div class="news-cover row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-item">
                        <h6 class="title"><a href="news.html">doloremque laudantium, totam rem aperiam, eaque ipsa
                                quae</a></h6>
                        <div class="news-post-thumbnail">
                            <a href="news.html"><img class="lazy" src="assets/img/placeholder-all.png"
                                    data-src="assets/img/news-1.jpg" alt="news"></a>
                        </div>
                        <div class="meta">
                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a
                                    href="#">Samson</a></span>
                        </div>
                        <div class="post-content">
                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque lauda ntium,
                                totam rem aperiam, eaque.</p>
                        </div>
                        <a href="news.html" class="btn-news">read more</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-item">
                        <h6 class="title"><a href="news.html">At vero eos et accusamus et iusto odio dignissimos
                                ducim</a></h6>
                        <div class="news-post-thumbnail">
                            <a href="single-news.html"><img class="lazy" src="assets/img/placeholder-all.png"
                                    data-src="assets/img/news-2.jpg" alt="news"></a>
                        </div>
                        <div class="meta">
                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a
                                    href="#">Samson</a></span>
                        </div>
                        <div class="post-content">
                            <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident,
                                similique sunt in culpa qui.</p>
                        </div>
                        <a href="single-news.html" class="btn-news">read more</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="news-item">
                        <h6 class="title"><a href="news.html">On the other hand, we denounce with righteous indignation
                                a</a></h6>
                        <div class="news-post-thumbnail">
                            <a href="news.html"><img class="lazy" src="assets/img/placeholder-all.png"
                                    data-src="assets/img/news-3.jpg" alt="news"></a>
                        </div>
                        <div class="meta">
                            <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i> Dec 26,2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i> By <a
                                    href="#">Samson</a></span>
                        </div>
                        <div class="post-content">
                            <p>Blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and
                                equal blame belongs to those.</p>
                        </div>
                        <a href="single-news.html" class="btn-news">read more</a>
                    </div>
                </div>
            </div>
            <div class="btn-cover"><a class="btn" href="news.html"><span>view more</span></a></div>
        </div>
    </section>
    <!--================ S-OUR-NEWS END ================-->

    <!--=================== S-BANNER ===================-->
    <section class="s-banner" style="background-image: url(assets/img/bg-section-banner.jpg);">
        <span class="mask"></span>
        <div class="banner-img">
            <div class="banner-img-bg wow fadeIn" data-wow-duration=".6s"
                style="background-image: url(assets/img/effect-section-banner.svg);"></div>
            <img class="lazy wow fadeInLeftBlur" data-wow-duration=".8s" data-wow-delay=".3s"
                src="assets/img/placeholder-all.png" data-src="assets/img/bike-banner.png" alt="img">
        </div>
        <div class="container">
            <h2 class="title">Hyper E-Ride Bike 700C</h2>
            <p class="slogan">Maecenas consequat ex id lobortis venenatis. Mauris id erat enim. Morbi dolor dolor, auctor
                tincidunt lorem.</p>
            <div class="banner-price">
                <div class="new-price">$1.699</div>
                <div class="old-price">$1.799</div>
            </div>
            <div id="clockdiv">
                <div>
                    <span class="days"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div>
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div>
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div>
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>
        </div>
    </section>
    <!--================= S-BANNER END =================-->
@endsection
