@extends('layout.template')

@section('content')
<!-- ================ HEADER-TITLE ================ -->
<section class="s-header-title">
    <div class="container">
        <h1>Services</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
        </ul>
    </div>
</section>
<!-- ============== HEADER-TITLE END ============== -->

<!--============== S-CATEGORY-BICYKLE ==============-->
<section class="s-category-bicycle page-services">
    <div class="container">
        <h2 class="title">Our Services</h2>
        <div class="slider-categ-bicycle">
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="assets/img/categ-1.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title"><span>mountain & road bikes</span></h4>
                        <a href="shop.html" class="btn"><span>view more</span></a>
                    </div>
                </div>
            </div>
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="assets/img/categ-2.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title"><span>bicycle spare parts</span></h4>
                        <a href="shop.html" class="btn"><span>view more</span></a>
                    </div>
                </div>
            </div>
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="assets/img/categ-3.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title"><span>accessories & clothing</span></h4>
                        <a href="shop.html" class="btn"><span>view more</span></a>
                    </div>
                </div>
            </div>
            <div class="slide-categ-bicycle">
                <div class="categ-bicycle-item">
                    <img src="assets/img/categ-2.png" alt="category">
                    <div class="categ-bicycle-info">
                        <h4 class="title"><span>bicycle spare parts</span></h4>
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
                <img src="assets/img/advantages-1.svg" alt="icon">
                <h5>Free shipping <br>from $500</h5>
            </div>
            <div class="our-advantages-item">
                <img src="assets/img/advantages-2.svg" alt="icon">
                <h5>Warranty service <br>for 3 months</h5>
            </div>
            <div class="our-advantages-item">
                <img src="assets/img/advantages-3.svg" alt="icon">
                <h5>Exchange and return <br>within 14 days</h5>
            </div>
            <div class="our-advantages-item">
                <img src="assets/img/advantages-4.svg" alt="icon">
                <h5>Discounts for <br>customers</h5>
            </div>
        </div>
    </div>
</section>
<!--============= S-OUR-ADVANTAGES END =============-->
@endsection