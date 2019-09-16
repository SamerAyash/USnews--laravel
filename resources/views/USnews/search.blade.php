@extends('master_layout.master')
@section('content')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li class="active"><span>Search</span></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Search Widget Start -->
                        <div class="search--widget ptop--30">
                            <form action="#" data-form="validate">
                                <div class="input-group">
                                    <input type="search" name="search" placeholder="Search..." class="form-control" required>

                                    <div class="input-group-btn">
                                        <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Search Widget End -->

                        <!-- Page Title Start -->
                        <div class="page--title ptop--30">
                            <h2 class="h2">Search Results For: <span>news</span></h2>
                        </div>
                        <!-- Page Title End -->

                        <!-- Post Items Start -->
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('control/img/blog-img/post-01.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Kids</a>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bushyasta</a></li>
                                                        <li><a href="#">16 April 2016</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Credibly pontificate highly efficient manufactured products and enabled data.</a></h3>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="news-single-v1.html">Continue Reading...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>

                            </ul>
                        </div>
                        <!-- Post Items End -->
                        <!-- Post Items Start -->
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('control/img/blog-img/post-05.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">Old City</a>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Bune</a></li>
                                                        <li><a href="#">16 April 2016</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">Credibly pontificate highly efficient manufactured products and enabled data.</a></h3>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="news-single-v1.html">Continue Reading...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>

                            </ul>
                        </div>
                        <!-- Post Items End -->

                        <!-- Advertisement Start -->
                        <div class="ad--space">
                            <a href="#">
                                <img src="{{asset('control/img/ads-img/ad-728x90-03.jpg')}}" alt="" class="center-block">
                            </a>
                        </div>
                        <!-- Advertisement End -->

                        <!-- Post Items Start -->
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="post--img">
                                                    <a href="news-single-v1.html" class="thumb"><img src="{{asset('control/img/blog-img/post-10.jpg')}}" alt=""></a>
                                                    <a href="#" class="cat">World News</a>
                                                </div>
                                            </div>

                                            <div class="col-md-8">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">Onoskelis</a></li>
                                                        <li><a href="#">22 May 2016</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">What are they doing highly efficient manufactured products and enabled data.</a></h3>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="news-single-v1.html">Continue Reading...</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>

                            </ul>
                        </div>
                        <!-- Post Items End -->

                        <!-- Pagination Start -->
                        <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                            <p class="pagination-hint float--left">Page 02 of 03</p>

                            <ul class="pagination float--right">
                                <li><a href="#"><i class="fa fa-long-arrow-left"></i></a></li>
                                <li><a href="#">01</a></li>
                                <li class="active"><span>02</span></li>
                                <li><a href="#">03</a></li>
                                <li>
                                    <i class="fa fa-angle-double-right"></i>
                                    <i class="fa fa-angle-double-right"></i>
                                    <i class="fa fa-angle-double-right"></i>
                                </li>
                                <li><a href="#">20</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination End -->
                    </div>
                </div>
                <!-- Main Content End -->

                <!-- Main Sidebar Start -->
            @includeIf('master_layout.main_sidebar')
                <!-- Main Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Main Content Section End -->
@endsection