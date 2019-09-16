@extends('master_layout.master')
@section('content')
    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}" class="btn-link"><i class="fa fm fa-home">{{ Breadcrumbs::render('tag',$type) }}</i></a></li>

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
                        <!-- Page Title Start -->
                        <div class="page--title ptop--30">
                            <h2 class="h2">Tag: <span>{{$news[0]['typeName']}}</span></h2>
                        </div>
                        <!-- Page Title End -->

                        <!-- Post Items Start -->
                        <div class="post--items post--items-5 pd--30-0">
                            <ul class="nav">
                                @foreach($news as $tNews)
                                    <li>
                                        <!-- Post Item Start -->
                                        <div class="post--item post--title-larger">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-xs-4 col-xxs-12">
                                                    <div class="post--img">

                                                        <a href="{{route('news-single',$tNews->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$tNews->image)}}" alt=""></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-8 col-sm-12 col-xs-8 col-xxs-12">
                                                    <div class="post--info">
                                                        <ul class="nav meta">
                                                            <li><a href="{{route('author',$tNews->userId)}}">{{$tNews->userName}}</a></li>
                                                            <li><a >{{date('d F Y| h a', strtotime($tNews->created_at))}}</a></li>
                                                        </ul>

                                                        <div class="title">
                                                            <h3 class="h4"><a href="{{route('news-single',$tNews->id)}}" class="btn-link">{{$tNews->title}}.</a></h3>
                                                        </div>
                                                    </div>

                                                    <div class="post--content">
                                                        <p>{!! str_limit($tNews->topic , $limit = 100)  !!}</p>
                                                    </div>

                                                    <div class="post--action">
                                                        <a href="{{route('news-single',$tNews->id)}}">Continue Reading...</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div>
                                                <!-- Divider Start -->
                                                <hr class="divider">
                                                <!-- Divider End -->
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
                                    </li>
                                @endforeach

                            </ul>
                        </div>


                    <!-- Post Items End -->
                        <!-- Pagination Start -->
                        <div class="pagination--wrapper clearfix bdtop--1 bd--color-2 ptop--60 pbottom--30">
                            <p class="pagination-hint float--left">Page {{$news->currentPage()}} of  {{$news->lastPage()}}</p>
                            <ul class="pagination float--right">
                                {{$news->links()}}
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