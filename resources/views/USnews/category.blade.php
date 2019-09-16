@extends('master_layout.master')
@section('content')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}" class="btn-link"><i class="fa fm fa-home">{{Breadcrumbs::render('category',$category)}}</i></a></li>

            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <!-- Main Content Start -->
            <div class="main--content">
                <!-- Post Items Start -->
                <div class="post--items post--items-1 pd--30-0">
                    <div class="row gutter--15">
                        <div class="col-md-3">
                            <div class="row gutter--15">
                                    <div class="col-md-12 col-xs-6 col-xxs-12">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1 post--title-large">
                                            <div class="post--img">
                                                <a href="{{route('news-single',$rNews[0]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$rNews[0]['image'])}}" alt=""></a>
                                                <a href="{{route('UStag',$rNews[0]['typeName'])}}" class="cat">{{$rNews[0]['typeName']}}</a>
                                                <a  class="icon"><i class="fa fa-flash"></i></a>
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{route('author',$rNews[0]['userId'])}}">{{$rNews[0]['userName']}}</a></li>
                                                        <li><a>{{date('d F Y| h a', strtotime($rNews[0]['created_at']))}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h2 class="h4"><a href="{{route('news-single',$rNews[0]['id'])}}" class="btn-link">{{$rNews[0]['title']}}</a></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </div>


                                <div class="col-md-12 col-xs-6 hidden-xxs">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="{{route('news-single',$rNews[1]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$rNews[1]['image'])}}" alt=""></a>
                                            <a href="{{route('UStag',$rNews[1]['typeName'])}}" class="cat">{{$rNews[1]['typeName']}}</a>
                                            <a  class="icon"><i class="fa fa-support"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="{{route('author',$rNews[1]['userId'])}}">{{$rNews[1]['userName']}}</a></li>
                                                    <li><a>{{date('d F Y| h a', strtotime($rNews[1]['created_at']))}}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h2 class="h4"><a href="{{route('news-single',$rNews[1]['id'])}}" class="btn-link">{{$rNews[1]['title']}}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Post Item Start -->
                            <div class="post--item post--layout-1 post--title-larger">
                                <div class="post--img">
                                    <a href="{{route('news-single',$rNews[2]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$rNews[2]['image'])}}" alt=""></a>
                                    <a href="{{route('UStag',$rNews[2]['typeName'])}}" class="cat">{{$rNews[2]['typeName']}}</a>
                                    <a class="icon"><i class="fa fa-star-o"></i></a>
                                    <div class="post--info">
                                        <ul class="nav meta">
                                            <li><a href="{{route('author',$rNews[2]['userId'])}}">{{$rNews[2]['userName']}}</a></li>
                                            <li><a>{{date('d F Y| h a', strtotime($rNews[2]['created_at']))}}</a></li>
                                        </ul>

                                        <div class="title">
                                            <h2 class="h4"><a href="{{route('news-single',$rNews[2]['id'])}}" class="btn-link">{{$rNews[2]['title']}}</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Post Item End -->
                        </div>

                        <div class="col-md-3">
                            <div class="row gutter--15">
                                <div class="col-md-12 col-xs-6 col-xxs-12">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="{{route('news-single',$rNews[3]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$rNews[3]['image'])}}" alt=""></a>
                                            <a href="{{route('UStag',$rNews[3]['typeName'])}}" class="cat">{{$rNews[3]['typeName']}}</a>
                                            <a  class="icon"><i class="fa fa-flash"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="{{route('author',$rNews[3]['userId'])}}">{{$rNews[3]['userName']}}</a></li>
                                                    <li><a>{{date('d F Y| h a', strtotime($rNews[3]['created_at']))}}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h2 class="h4"><a href="{{route('news-single',$rNews[3]['id'])}}" class="btn-link">{{$rNews[3]['title']}}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>

                                <div class="col-md-12 col-xs-6 hidden-xxs">
                                    <!-- Post Item Start -->
                                    <div class="post--item post--layout-1 post--title-large">
                                        <div class="post--img">
                                            <a href="{{route('news-single',$rNews[4]['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$rNews[4]['image'])}}" alt=""></a>
                                            <a href="{{route('UStag',$rNews[4]['typeName'])}}" class="cat">{{$rNews[4]['typeName']}}</a>
                                            <a class="icon"><i class="fa fa-book"></i></a>
                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="{{route('author',$rNews[4]['userId'])}}">{{$rNews[4]['userName']}}</a></li>
                                                    <li><a>{{date('d F Y| h a', strtotime($rNews[4]['created_at']))}}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h2 class="h4"><a href="{{route('news-single',$rNews[4]['id'])}}" class="btn-link">{{$rNews[4]['title']}}</a></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Items End -->
            </div>
            <!-- Main Content End -->

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8 col-sm-7" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- Latin America Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <a class="h4"  href="{{route('UStag',$types[0]['name'])}}" >{{$types[0]['name']}}</a>

                                    <div class="nav">
                                        <a href="{{$type1->previousPageUrl()}}" class="prev btn-link">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="{{$type1->nextPageUrl()}}" class="next btn-link">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($type1 as $news)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('news-single',$news->id)}}">{{$news->userName}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>{!! str_limit($news->topic , $limit = 100)  !!}</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="{{route('news-single',$news->id)}}">Continue Reading... </a>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                        <li>
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
                            <!-- Latin America End -->

                            <!-- Middle East Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <a class="h4"  href="{{route('UStag',$types[1]['name'])}}">{{$types[1]['name']}}</a>

                                    <div class="nav">
                                        <a href="{{$type2->previousPageUrl()}}" class="prev btn-link">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="{{$type2->nextPageUrl()}}" class="next btn-link">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-3" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        <?php $i=1 ?>
                                        @foreach($type2 as $news)
                                            @if($i == 1)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-1">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$news->userId)}}">{{$news->userName}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                                <?php $i=0 ?>
                                                @else
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-3">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$news->userId)}}">{{$news->userName}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                                @endif
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
                            <!-- Middle East End -->

                            <!-- Ad Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Advertisement Start -->
                                <div class="ad--space">
                                    <a href="#">
                                        <img class="lazy" data-src="{{asset('control/img/ads-img/ad-728x90-01.jpg')}}" alt="" class="center-block">
                                    </a>
                                </div>
                                <!-- Advertisement End -->
                            </div>
                            <!-- Ad End -->

                            <!-- Syrian News Start -->
                            <div class="col-md-12 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <a class="h4"  href="{{route('UStag',$types[2]['name'])}}">{{$types[2]['name']}}</a>

                                    <div class="nav">
                                        <a href="{{$type3->previousPageUrl()}}" class="prev btn-link">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="{{$type3->nextPageUrl()}}" class="next btn-link">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav row" data-ajax-content="inner">
                                        <?php $i=0 ?>
                                        @foreach($type3 as $news)
                                            @if($i == 0)
                                        <li class="col-md-12">
                                            <!-- Post Item Start -->
                                            <div class="post--item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="post--img">
                                                            <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{route('author',$news->userId)}}">{{$news->userName}}</a></li>
                                                                <li><a >{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                            </div>
                                                        </div>

                                                        <div class="post--content">
                                                            <p>{!! str_limit($news->topic , $limit = 100)  !!}</p>
                                                        </div>

                                                        <div class="post--action">
                                                            <a href="{{route('news-single',$news->id)}}">Continue Reading...</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                                <?php $i=1 ?>
                                            @elseif( $i == 1)
                                        <li class="col-md-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>

                                        <li class="col-md-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-4">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$news->userId)}}">{{$news->userName}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>
                                                <?php $i=2 ?>
                                            @else
                                        <li class="col-md-6">
                                            <!-- Post Item Start -->
                                            <div class="post--item post--layout-4">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$news->userId)}}">{{$news->userName}}</a></li>
                                                            <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>

                                        <li class="col-md-12">
                                            <!-- Divider Start -->
                                            <hr class="divider">
                                            <!-- Divider End -->
                                        </li>
                                            <?php $i=1 ?>
                                            @endif
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
                            <!-- Syrian News End -->

                            <!-- Europe Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <a class="h4"  href="{{route('UStag',$types[3]['name'])}}">{{$types[3]['name']}}</a>

                                    <div class="nav">
                                        <a href="{{$type4->previousPageUrl()}}" class="prev btn-link">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="{{$type4->nextPageUrl()}}" class="next btn-link">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($type4 as $news)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{route('news-single',$news->id)}}">{{$news->userName}}</a></li>
                                                                <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p>{!! str_limit($news->topic , $limit = 100)  !!}</p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="{{route('news-single',$news->id)}}">Continue Reading... </a>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li>
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
                            <!-- Europe End -->

                            <!-- Asia Start -->
                            <div class="col-md-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <a class="h4"  href="{{route('UStag',$types[4]['name'])}}">{{$types[4]['name']}}</a>

                                    <div class="nav">
                                        <a href="{{$type5->previousPageUrl()}}" class="prev btn-link">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="{{$type5->nextPageUrl()}}" class="next btn-link">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($type5 as $news)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item post--layout-1">
                                                    <div class="post--img">
                                                        <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{route('news-single',$news->id)}}">{{$news->userName}}</a></li>
                                                                <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p>{!! str_limit($news->topic , $limit = 100)  !!}</p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="{{route('news-single',$news->id)}}">Continue Reading... </a>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>
                                            <li>
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
                            <!-- Asia End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

             <!-- Main Sidebar Start -->
            @includeIf('master_layout.main_sidebar')
            <!-- Main Sidebar End -->
            </div>

            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <div class="row">
                            <!-- Africa Start -->
                            <div class="col-md-12 col-lg-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <a class="h4"  href="{{route('UStag',$types[5]['name'])}}">{{$types[5]['name']}}</a>

                                    <div class="nav">
                                        <a href="{{$type6->previousPageUrl()}}" class="prev btn-link">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="{{$type6->nextPageUrl()}}" class="next btn-link">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items" data-ajax-content="outer">
                                    <ul class="nav row gutter--15" data-ajax-content="inner">
                                        @foreach($type6 as $news)
                                            <li>
                                                <!-- Post Item Start -->
                                                <div class="post--item">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="post--img">
                                                                <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="post--info">
                                                                <ul class="nav meta">
                                                                    <li><a href="{{route('news-single',$news->id)}}">{{$news->userName}}</a></li>
                                                                    <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                                </ul>

                                                                <div class="title">
                                                                    <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                                </div>
                                                            </div>

                                                            <div class="post--content">
                                                                <p>{!! str_limit($news->topic , $limit = 100)  !!}</p>
                                                            </div>

                                                            <div class="post--action">
                                                                <a href="{{route('news-single',$news->id)}}">Continue Reading... </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Post Item End -->
                                            </li>

                                            <li>
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
                            <!-- Africa End -->

                            <!-- War on ISIS Start -->
                            <div class="col-md-12 col-lg-6 ptop--30 pbottom--30">
                                <!-- Post Items Title Start -->
                                <div class="post--items-title" data-ajax="tab">
                                    <a class="h4"  href="{{route('UStag',$types[6]['name'])}}">{{$types[6]['name']}}</a>

                                    <div class="nav">
                                        <a href="{{$type7->previousPageUrl()}}" class="prev btn-link">
                                            <i class="fa fa-long-arrow-left"></i>
                                        </a>

                                        <span class="divider">/</span>

                                        <a href="{{$type7->nextPageUrl()}}" class="next btn-link">
                                            <i class="fa fa-long-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- Post Items Title End -->

                                <!-- Post Items Start -->
                                <div class="post--items post--items-2" data-ajax-content="outer">
                                    <ul class="nav" data-ajax-content="inner">
                                        @foreach($type7 as $news)
                                        <li>
                                            <!-- Post Item Start -->
                                            <div class="post--item">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="post--img">
                                                            <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="post--info">
                                                            <ul class="nav meta">
                                                                <li><a href="{{route('news-single',$news->id)}}">{{$news->userName}}</a></li>
                                                                <li><a>{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                            </ul>

                                                            <div class="title">
                                                                <h3 class="h4"><a href="{{route('news-single',$news->id)}}" class="btn-link">{{$news->title}}</a></h3>
                                                            </div>
                                                        </div>

                                                        <div class="post--content">
                                                            <p>{!! str_limit($news->topic , $limit = 100)  !!}</p>
                                                        </div>

                                                        <div class="post--action">
                                                            <a href="{{route('news-single',$news->id)}}">Continue Reading... </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Post Item End -->
                                        </li>

                                        <li>
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
                            <!-- War on ISIS End -->
                        </div>
                    </div>
                </div>
                <!-- Main Content End -->

            </div>
        </div>
    </div>
    <!-- Main Content Section End -->
@endsection