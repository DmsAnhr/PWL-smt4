@extends('layout.template')

@section('content')
<!-- ================ HEADER-TITLE ================ -->
<section class="s-header-title">
    <div class="container">
        <h1>News</h1>
        <ul class="breadcrambs">
            <li><a href="index.html">Home</a></li>
            <li>News</li>
        </ul>
    </div>
</section>
<!-- ============== HEADER-TITLE END ============== -->

<!--===================== S-NEWS =====================-->
<section class="s-news">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 blog-cover">
                <div class="post-item-cover">
                    <h4 class="title title-line-left"><a href="#"><?php echo $news?></a></h4>
                    <div class="post-header">
                        <div class="post-thumbnail">
                            <a href="#">
                                <img src="assets/img/blog-1.jpg" alt="img">
                            </a>
                        </div>
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 26, 2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a href="#">Samson</a></span>
                            <span class="post-category">Category: <a href="#">Coaching</a><a href="#">Lorem</a></span>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="text">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique.</p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-comment"><a href="#">Comments 2</a></span>
                            <span class="post-tags">Tags: <a href="#">Lorem</a><a href="#">Dorem</a></span>
                        </div>
                        <a href="#" class="btn"><span>more</span></a>
                    </div>
                </div>
                <div class="post-item-cover">
                    <h4 class="title title-line-left"><a href="#">Duis aute irure dolor in reprehenderit in</a></h4>
                    <div class="post-header">
                        <div class="post-thumbnail">
                            <a href="#">
                                <img src="assets/img/blog-2.jpg" alt="img">
                            </a>
                        </div>
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 26, 2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a href="#">Samson</a></span>
                            <span class="post-category">Category: <a href="#">Coaching</a><a href="#">Lorem</a></span>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="text">
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique.</p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-comment"><a href="#">Comments 2</a></span>
                            <span class="post-tags">Tags: <a href="#">Lorem</a><a href="#">Dorem</a></span>
                        </div>
                        <a href="#" class="btn"><span>more</span></a>
                    </div>
                </div>
                <div class="post-item-cover">
                    <blockquote>
                        <p>“At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias”</p>
                        <cite>by <a href="#">Kerry Ashman</a></cite>
                    </blockquote>
                </div>
                <div class="post-item-cover">
                    <div class="post-header">
                        <h4 class="title title-line-left"><a href="#">sed do eiusmod tempor incididunt ut labore et</a></h4>
                        <div class="meta">
                            <span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 26, 2019</span>
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a href="#">Samson</a></span>
                            <span class="post-category">Category: <a href="#">Coaching</a><a href="#">Lorem</a></span>
                        </div>
                    </div>
                    <div class="post-content">
                        <div class="text">
                            <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra vel turpis nunc eget. Et leo duis ut diam quam nulla. Cras pulvinar mattis nunc sed blandit libero volutpat. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit. </p>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="meta">
                            <span class="post-comment"><a href="#">Comments 2</a></span>
                            <span class="post-tags">Tags: <a href="#">Lorem</a><a href="#">Dorem</a></span>
                        </div>
                        <a href="#" class="btn"><span>more</span></a>
                    </div>
                </div>
                <div class="pagination-cover">
                    <ul class="pagination">
                        <li class="pagination-item item-prev"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                        <li class="pagination-item active"><a href="#">1</a></li>
                        <li class="pagination-item"><a href="#">2</a></li>
                        <li class="pagination-item"><a href="#">3</a></li>
                        <li class="pagination-item"><a href="#">4</a></li>
                        <li class="pagination-item"><a href="#">5</a></li>
                        <li class="pagination-item item-next"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <!--================= SIDEBAR =================-->
            <div class="col-12 col-lg-4 sidebar">
                <a href="#" class="btn btn-sidebar"><span>Widgets</span></a>
                <ul class="widgets">
                    <!--=========== WIDGET-SEARCH ===========-->
                    <li class="widget widget-search">
                        <h5 class="title">search</h5>
                        <form class="search-form">
                            <i class="fa fa-at" aria-hidden="true"></i>
                            <input class="inp-form" type="email" name="search" placeholder="E-mail">
                            <button type="submit" class="btn btn-form"><span>send</span></button>
                        </form>
                    </li>
                    <!--========= WIDGET-SEARCH END =========-->
                    <!--============ WIDGET-TAGS ============-->
                    <li class="widget widget-tags">
                        <h5 class="title">Tags</h5>
                        <ul>
                            <li><a href="#">Loremiipsum</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Sitiamet</a></li>
                            <li><a href="#">Dolor</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Loremiipsum</a></li>
                            <li><a href="#">Dolor</a></li>
                            <li><a href="#">Sitiamet</a></li>
                        </ul>
                    </li>
                    <!--========== WIDGET-TAGS END ==========-->
                    <!--=========== WIDGET-ARHIVE ===========-->
                    <li class="widget widget-archive">
                        <h5 class="title">archive</h5>
                        <ul>
                            <li><a href="#">January 2019</a></li>
                            <li><a href="#">February 2019</a></li>
                            <li><a href="#">March 2019</a></li>
                            <li><a href="#">April 2019</a></li>
                            <li><a href="#">May 2019</a></li>
                        </ul>
                    </li>
                    <!--========= WIDGET-ARHIVE END =========-->
                    <!--========= WIDGET-CATEGORIES =========-->
                    <li class="widget widget-categories">
                        <h5 class="title">categories</h5>
                        <ul>
                            <li><a href="#">Training</a></li>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">Conferences</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">UI/UX Designer</a></li>
                        </ul>
                    </li>
                    <!--======= WIDGET-CATEGORIES END =======-->
                    <!--======== WIDGET-RECENT-POSTS ========-->
                    <li class="widget widget-recent-posts">
                        <h5 class="title">recent blog posts</h5>
                        <ul>
                            <li>
                                <a href="#">Mobile App Design: From Beginner to Intermediate</a>
                                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 27, 2019 at 5:47 pm</div>
                            </li>
                            <li>
                                <a href="#">Et harum quidem rerum facilis est et expedita distinctio</a>
                                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 17, 2018 at 5:47 pm</div>
                            </li>
                            <li>
                                <a href="#">Nam libero tempore, cum soluta nobis est eligendi optio</a>
                                <div class="date"><i class="fa fa-calendar" aria-hidden="true"></i>Dec 8, 2018 at 5:47 pm</div>
                            </li>
                        </ul>
                    </li>
                    <!--====== WIDGET-RECENT-POSTS END ======-->
                    <!--========== WIDGET-INSTAGRAM ==========-->
                    <li class="widget widget-instagram">
                        <h5 class="title">Instagram</h5>
                        <ul>
                            <li>
                                <a href="#"><img src="assets/img/insta-widget-1.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/insta-widget-2.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/insta-widget-3.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/insta-widget-4.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/insta-widget-5.jpg" alt="img"></a>
                            </li>
                            <li>
                                <a href="#"><img src="assets/img/insta-widget-6.jpg" alt="img"></a>
                            </li>
                        </ul>
                    </li>
                    <!--======== WIDGET-INSTAGRAM END ========-->
                    <!--========== WIDGET-NEWSLETTER ==========-->
                    <li class="widget widget-newsletter">
                        <h5 class="title">newsletter</h5>
                        <form class="subscribe-form">
                            <i class="fa fa-at" aria-hidden="true"></i>
                            <input class="inp-form" type="email" name="subscribe" placeholder="E-mail">
                            <button type="submit" class="btn btn-form"><span>send</span></button>
                        </form>
                    </li>
                    <!--======== WIDGET-NEWSLETTER END ========-->
                </ul>
            </div>
            <!--=============== SIDEBAR END ===============-->
        </div>
    </div>
</section>
<!--=================== S-NEWS END ===================-->
@endsection