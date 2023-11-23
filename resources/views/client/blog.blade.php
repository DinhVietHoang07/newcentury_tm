@extends('client.layout.main')
@section('content')

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Blog List</h2>
                        <div class="breadcrumb-option">
                            <a href="#"><i class="fa fa-home"></i> Home</a>
                            <span>Blog Default</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section Begin -->

    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-1.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                            </ul>
                            <h4><a href="/blog-details">Enhance Your Brand Potential With Giant.</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-2.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 18th Jan, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">Illustration In Marketing Materials</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-3.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 22th Jan, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">Branding Do You Know Who You Are</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-4.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 24th Jan, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">Looking For Your Dvd Printing Solution</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-5.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 29th Jan, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">How To Set Intentions That Energize You</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-6.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 30th Jan, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">Do Your Self Realizations Quickly Fade</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-3.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 02th Feb, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">Motivation How To Build Trust At Work</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-7.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 09th Feb, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">Not All Blank Cassettes Are Created Equal</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-item">
                        <div class="sb-pic">
                            <img src="{{asset('client/img/blog/latest-8.jpg')}}" alt="">
                        </div>
                        <div class="sb-text">
                            <ul>
                                <li><i class="fa fa-user"></i> Adam Smith</li>
                                <li><i class="fa fa-clock-o"></i> 12th Feb, 2019</li>
                            </ul>
                            <h4><a href="./blog-details.html">The Small Change That Creates Massive Results</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="loadmore">
                        <a href="#" class="primary-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Partner Carousel Section Begin -->
    <div class="partner-section">
        <div class="container">
            <div class="partner-carousel owl-carousel">
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{asset('client/img/partner/partner-1.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{asset('client/img/partner/partner-2.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{asset('client/img/partner/partner-3.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{asset('client/img/partner/partner-4.png')}}" alt="">
                    </div>
                </a>
                <a href="#" class="partner-logo">
                    <div class="partner-logo-tablecell">
                        <img src="{{asset('client/img/partner/partner-5.png')}}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Partner Carousel Section End -->



@endsection
