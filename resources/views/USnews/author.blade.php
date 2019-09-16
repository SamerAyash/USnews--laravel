@extends('master_layout.master')
@section('content')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="home-1.html" class="btn-link"><i class="fa fm fa-home"></i>Home</a></li>
                <li class="active"><span>Author</span></li>
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
                        <!-- Post Author Info Start -->
                        <div class="post--author-info clearfix">
                            <div class="img">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <img class="lazy" data-src="{{asset('control/images/authors_images/'.$author[0]->image)}}" alt="">
                                        <p class="name">{{$author[0]->name}}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <h2 class="h4">About The Author</h2>

                                <div class="content">
                                    <p>{{$author[0]->about}}.</p>
                                </div>

                                <ul class="social nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Post Author Info End -->
                        @foreach($aNews as $news)
                            <?php $i=0 ?>
                        <!-- Post Items Start -->
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                <li>
                                    <!-- Post Item Start -->
                                    <div class="post--item post--title-larger">
                                        <div class="row">
                                            <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                                <div class="post--img">
                                                    <a href="{{route('news-single',$news->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                                    <a href="#" class="cat">{{$news->typeName}}</a>
                                                </div>
                                            </div>

                                            <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="#">{{$author[0]->name}}</a></li>
                                                        <li><a href="#">{{date('d F Y| h a', strtotime($news->created_at))}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="news-single-v1.html" class="btn-link">{{$news->title}}.</a></h3>
                                                    </div>
                                                </div>

                                                <div class="post--content">
                                                    <p>{!! str_limit($news->topic  , $limit = 150)  !!}.</p>
                                                </div>

                                                <div class="post--action">
                                                    <a href="{{route('news-single',$news->id)}}">Continue Reading...</a>
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
                         {{--@if($aNews->count()/2 == (($aNews->currentPage()-1) * $aNews->perPage() + $aNews->count()))
                        <div class="ad--space">
                            <a href="#">
                                <img class="center-block lazy" data-src="{{asset('control/img/ads-img/ad-728x90-02.jpg')}}" alt="">
                            </a>
                        </div>
                                @endif--}}
                        <!-- Advertisement End -->
                        @endforeach
                        <!-- Pagination Start -->
                        <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                            <p class="pagination-hint float--left">Page {{$aNews->currentPage()}} of  {{$aNews->lastPage()}}</p>
                            <ul class="pagination float--right">
                                {{$aNews->links()}}
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