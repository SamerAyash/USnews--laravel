@extends('master_layout.master')
@section('content')
    <!-- News Ticker Start -->
    <div class="news--ticker">
        <div class="container">
            <div class="title">
                <h2>News Updates</h2>
            </div>
            <div class="news-updates--list" data-marquee="true">
                <ul class="nav">
                    @foreach($lastNews as $news)
                        <li>
                            <h3 class="h3"><a href="{{route('news-single',$news['id'])}}">{{$news['title']}}</a></h3>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- News Ticker End -->
    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <!-- Main Content Start -->
            <div class="main--content">
                <!-- Post Items Start -->
                <div class="post--items pd--30-0" data-ajax-content="outer">
                    <ul class="nav row gutter--0" data-ajax-content="inner">
                        @foreach($randomNews as $rNews)
                        <li class="col-md-4 col-xs-6 col-xxs-12">
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-1" >
                                <div class="post--img">
                                    <a href="{{route('news-single',$rNews['id'])}}" class="thumb"><img src="{{asset('control/images/news_images/'.$rNews['image'])}}" alt=""></a>

                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="{{route('author',$rNews['userId'])}}">{{ucfirst($rNews['name'])}}</a></li>
                                            <li><a>{{date('d F Y| h a', strtotime($rNews['created_at']))}}</a></li>
                                        </ul>

                                        <div class="title">
                                            <h3 class="h4"><a href="{{route('news-single',$rNews['id'])}}" class="btn-link">{{$rNews['title']}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->
                        </li>
                        <li class="col-xs-12 hidden shown-xxs">
                            <!-- Divider Start -->
                            <hr class="divider">
                            <!-- Divider End -->
                        </li>
                        @endforeach
                    </ul>

                    <!-- Preloader Start -->
                    <div class="preloader bg--color-0--b" data-preloader="1">
                        <div class="preloader--inner"></div>
                    </div>
                    <!-- Preloader End -->
                </div>
                <!-- Post Items End -->
            </div>
            <!-- Main Content End -->

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- World News Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Worlds News</h2>
                                </div>
                                <!-- Post Items Title End -->
                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-xs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img" >
                                                    <a href="{{route('news-single',$worldsNews[0][0]['id'])}}" class="thumb"><img src="{{asset('control/images/news_images/'.$worldsNews[0][0]['image'])}}" alt="">
                                                    <a href="{{route('UStag',$worldsNews[0][0]['typeName'])}}" class="cat">{{$worldsNews[0][0]['typeName']}}</a>
                                                    </a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$worldsNews[0][0]['userId'])}}">{{ucfirst($worldsNews[0][0]['name'])}}</a></li>
                                                            <li><a >{{date('d F Y| h a', strtotime($worldsNews[0][0]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$worldsNews[0][0]['id'])}}" class="btn-link">{{$worldsNews[0][0]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li class="col-xs-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                        @for($i=1;$i < count($worldsNews[0]);$i++)
                                            <li class="col-xs-6">
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-2">
                                                    <div class="post--img">
                                                        <a href="{{route('news-single',$worldsNews[0][$i]['id'])}}" class="thumb">
                                                            <img class="lazy" data-src="{{asset('control/images/news_images/'.$worldsNews[0][$i]['image'])}}" alt="">
                                                        </a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{route('author',$worldsNews[0][$i]['userId'])}}">{{ucfirst($worldsNews[0][$i]['name'])}}</a></li>
                                                                <li><a>{{date('d F Y| h a', strtotime($worldsNews[0][$i]['created_at']))}}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{route('news-single',$worldsNews[0][$i]['id'])}}" class="btn-link">{{$worldsNews[0][$i]['title']}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        @endfor
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- World News End -->

                            <!-- Technology Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Technology</h2>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$technology[0][0]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$technology[0][0]['image'])}}"alt=""></a>
                                                    <a href="{{route('UStag',$technology[0][0]['typeName'])}}" class="cat">{{$technology[0][0]['typeName']}}</a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$technology[0][0]['userId'])}}">{{ucfirst($technology[0][0]['name'])}}</a></li>
                                                            <li><a >{{date('d F Y| h a', strtotime($technology[0][0]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$technology[0][0]['id'])}}" class="btn-link">{{$technology[0][0]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    @for($i=1;$i < count($technology[0]);$i++)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-3">
                                                    <div class="post--img">
                                                        <a href="{{route('news-single',$technology[0][$i]['id'])}}" class="thumb">
                                                            <img class="lazy" data-src="{{asset('control/images/news_images/'.$technology[0][$i]['image'])}}" alt="">
                                                        </a>

                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{route('author',$technology[0][$i]['userId'])}}">{{ucfirst($technology[0][$i]['name'])}}</a></li>
                                                                <li><a >{{date('d F Y| h a', strtotime($technology[0][$i]['created_at']))}}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{route('news-single',$technology[0][$i]['id'])}}" class="btn-link">{{$technology[0][$i]['title']}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                        @endfor
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Technology End -->

                            <!-- Ad Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Advertisement Start -->
                                <div class="ad--space">
                                    <a href="#">
                                        <img src="{{asset('control/img/ads-img/ad-728x90-01.jpg')}}" alt="" class="center-block">
                                    </a>
                                </div>
                                <!-- Advertisement End -->
                            </div>
                            <!-- Ad End -->

                            <!-- Finance Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Financial</h2>

                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <li class="col-md-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$financial[0][0]['id'])}}"  class="thumb">
                                                        <img class="lazy" data-src="{{asset('control/images/news_images/'.$financial[0][0]['image'])}}" alt="">
                                                        <a href="{{route('UStag',$financial[0][0]['typeName'])}}" class="cat">{{$financial[0][0]['typeName']}}</a>

                                                    </a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$financial[0][0]['userId'])}}">{{ucfirst($financial[0][0]['name'])}}</a></li>
                                                            <li><a >{{date('d F Y| h a', strtotime($financial[0][0]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$financial[0][0]['id'])}}" class="btn-link">{{$financial[0][0]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>

                                        <li class="col-md-6">
                                            <ul class="nav row">
                                                <li class="col-xs-12 hidden-md hidden-lg">
                                                    <!-- Divider Start -->
                                                    <hr class="divider">
                                                    <!-- Divider End -->
                                                </li>
                                                @for($i=1;$i < count($financial[0]);$i++)
                                                <li class="col-xs-6">
                                                    <!-- Post Item Start -->
                                                    <div class="post--item post--layout-2">
                                                        <div class="post--img">
                                                            <a href="{{route('news-single',$financial[0][$i]['id'])}}"  class="thumb">
                                                                <img class="lazy" data-src="{{asset('control/images/news_images/'.$financial[0][$i]['image'])}}" alt="">

                                                            </a>
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="{{route('author',$financial[0][$i]['userId'])}}">{{ucfirst($financial[0][$i]['name'])}}</a></li>
                                                                    <li><a>{{date('d F Y| h a', strtotime($financial[0][$i]['created_at']))}}</a></li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a href="{{route('news-single',$financial[0][$i]['id'])}}" class="btn-link">{{$financial[0][$i]['title']}}</a></h3>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Post Item End -->
                                                </li>
                                                @endfor
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Finance End -->

                            <!-- Politics Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">National</h2>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        <li class="col-xs-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$national[0][0]['id'])}}"  class="thumb">
                                                        <img class="lazy" data-src="{{asset('control/images/news_images/'.$national[0][0]['image'])}}" alt="">
                                                    </a>
                                                    <a href="{{route('UStag',$national[0][0]['typeName'])}}" class="cat">{{$national[0][0]['typeName']}}</a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$national[0][0]['userId'])}}">{{ucfirst($national[0][0]['name'])}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($national[0][0]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$national[0][0]['id'])}}" class="btn-link">{{$national[0][0]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    @for($i=1;$i < count($national[0]);$i++)
                                        <li class="col-xs-6">
                                            <div>
                                                <!-- Divider Start -->
                                                <hr class="divider">
                                                <!-- Divider End -->
                                            </div>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-2">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$national[0][$i]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$national[0][$i]['image'])}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$national[0][$i]['userId'])}}">{{ucfirst($national[0][$i]['name'])}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($national[0][$i]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$national[0][$i]['id'])}}" class="btn-link">{{$national[0][$i]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                     @endfor
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Politics End -->

                            <!-- Sports Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <h2 class="h4">Sports</h2>

                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$sports[0][0]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$sports[0][0]['image'])}}" alt=""></a>
                                                    <a href="{{route('UStag',$sports[0][0]['typeName'])}}" class="cat">{{$sports[0][0]['typeName']}}</a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$sports[0][0]['userId'])}}">{{ucfirst($sports[0][0]['name'])}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($sports[0][0]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$sports[0][0]['id'])}}" class="btn-link">{{$sports[0][0]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>

                                        @for($i=1;$i < count($sports[0]);$i++)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$sports[0][$i]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$sports[0][$i]['image'])}}" alt=""></a>
                                                    </a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$sports[0][$i]['userId'])}}">{{ucfirst($sports[0][$i]['name'])}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($sports[0][$i]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$sports[0][$i]['id'])}}" class="btn-link">{{$sports[0][$i]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        @endfor
                                    </ul>

                                    <!-- Preloader Start -->
                                    <div class="preloader bg--color-0--b" data-preloader="1">
                                        <div class="preloader--inner"></div>
                                    </div>
                                    <!-- Preloader End -->
                                </div>
                                <!-- Post Items End -->
                            </div>
                            <!-- Sports End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->


                <!-- Main Sidebar Start -->
            @includeIf('master_layout.main_sidebar')
            <!-- Main Sidebar End -->
        </div>

        <!-- Main Content Start -->

        <!-- Main Content End -->

        <!-- Advertisement Start -->
        <div class="ad--space pd--30-0">
            <a href="#">
                <img src="{{asset('control/img/ads-img/ad-970x90.jpg')}}" alt="" class="center-block">
            </a>
        </div>
        <!-- Advertisement End -->

        <div class="row">
            <!-- Main Content Start -->
            <div class="main--content " style="margin: 100px" data-sticky-content="true">
                <div class="sticky-content-inner">
                    <div class="row">
                        <!-- Health and fitness Start -->
                        <div class="col-md-12 col-lg-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Entertainment</h2>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-3" data-ajax-content="outer">
                                <ul class="nav" data-ajax-content="inner">
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="{{route('news-single',$entertainment[0][0]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$entertainment[0][0]['image'])}}" alt=""></a>
                                                <a href="{{route('UStag',$entertainment[0][0]['typeName'])}}" class="cat">{{$entertainment[0][0]['typeName']}}</a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{route('author',$entertainment[0][0]['userId'])}}">{{ucfirst($entertainment[0][0]['name'])}}</a></li>
                                                        <li><a>{{date('d F Y| h a', strtotime($entertainment[0][0]['created_at']))}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{route('news-single',$entertainment[0][0]['id'])}}" class="btn-link">{{$entertainment[0][0]['title']}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>

                                    @for($i=1;$i < count($entertainment[0]);$i++)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$entertainment[0][$i]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$entertainment[0][$i]['image'])}}" alt=""></a>

                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$entertainment[0][$i]['userId'])}}">{{ucfirst($entertainment[0][$i]['name'])}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($entertainment[0][$i]['created_at']))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$entertainment[0][$i]['id'])}}" class="btn-link">{{$entertainment[0][$i]['title']}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                    @endfor
                                </ul>
                                <!-- Post Items End -->
                            </div>
                        </div>
                        <!-- Health and fitness End -->

                        <!-- Lifestyle Start -->
                        <div class="col-md-12 col-lg-6 ptop--30 pbottom--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">Lifestyle</h2>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items" data-ajax-content="outer">
                                <ul class="nav row gutter--15" data-ajax-content="inner">
                                    <li class="col-xs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="{{route('news-single',$lifestyle[0][0]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$lifestyle[0][0]['image'])}}" alt=""></a>
                                                <a href="{{route('UStag',$lifestyle[0][0]['typeName'])}}" class="cat">{{$lifestyle[0][0]['typeName']}}</a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{route('author',$lifestyle[0][0]['userId'])}}">{{ucfirst($lifestyle[0][0]['name'])}}</a></li>
                                                        <li><a>{{date('d F Y| h a', strtotime($lifestyle[0][0]['created_at']))}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{route('news-single',$lifestyle[0][0]['id'])}}" class="btn-link">{{$lifestyle[0][0]['title']}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                    @for($i=1;$i < count($lifestyle[0]);$i++)

                                    <li class="col-xs-6">
                                        <div>
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </div>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-2">
                                            <div class="post--img">
                                                <a href="{{route('news-single',$lifestyle[0][$i]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$lifestyle[0][$i]['image'])}}" alt=""></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{route('author',$lifestyle[0][$i]['userId'])}}">{{ucfirst($lifestyle[0][$i]['name'])}}</a></li>
                                                        <li><a>{{date('d F Y| h a', strtotime($lifestyle[0][$i]['created_at']))}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="{{route('news-single',$lifestyle[0][$i]['id'])}}" class="btn-link">{{$lifestyle[0][$i]['title']}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->

                                    </li>
                                    @endfor
                                </ul>
                            </div>
                            <!-- Post Items End -->
                        </div>
                        <!-- Lifestyle End -->
                    </div>
                </div>
            </div>
            <!-- Main Content End -->
        </div>
        </div>
    <!-- Main Content Section End -->
    </div>
@endsection