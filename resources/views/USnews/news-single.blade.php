@extends('master_layout.master')
@section('content')

    <!-- Main Breadcrumb Start -->
    <div class="main--breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li ><a class="btn-link"><i class="fa fm fa-home">{{ Breadcrumbs::render('post',$news) }}</i></a></li>
            </ul>
        </div>
    </div>
    <!-- Main Breadcrumb End -->

    <!-- Main Content Section Start -->
    <div class="main-content--section pbottom--30">
        <div class="container">
            <div class="row">
                <!-- Main Content Start -->
                <div class="main--content col-md-8" data-sticky-content="true">
                    <div class="sticky-content-inner">
                        <!-- Post Item Start -->
                        <div class="post--item post--single post--title-largest pd--30-0">
                            <div class="post--cats">
                                <ul class="nav">
                                    <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                    @foreach($types as $type)
                                    <li><a href="{{route('UStag',$type[0]->name)}}">{{$type[0]->name}}</a></li>
                                        @endforeach
                                </ul>
                            </div>

                            <div class="post--info">
                                <ul class="nav meta">
                                    <li><a href="{{route('author',$author->id)}}">{{$author->name}}</a></li>
                                    <li><a>{{date('d F Y| h a', strtotime($news['created_at']))}}</a></li>
                                    <li><span><i class="fa fm fa-eye"></i>45k</span></li>
                                    <li><a href="#"><i class="fa fm fa-comments-o"></i>02</a></li>
                                </ul>

                                <div class="title">
                                    <h2 class="h4">{{$news->title}}</h2>
                                </div>
                            </div>

                            <div class="post--img">
                                <a href="#" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$news->image)}}" alt=""></a>
                                <a href="#" class="icon"><i class="fa fa-star-o"></i></a>

                                <div class="post--map">
                                    <div class="map--wrapper">
                                        <div data-map-latitude="23.790546" data-map-longitude="90.375583" data-map-zoom="6" data-map-marker="[[23.790546, 90.375583]]"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="post--content">
                                {!! $news->topic !!}
                            </div>
                        </div>
                        <!-- Post Item End -->

                        <!-- Advertisement Start -->
                        <div class="ad--space pd--20-0-40">
                            <a href="#">
                                <img src="{{asset('control/img/ads-img/ad-728x90-02.jpg')}}" alt="" class="center-block">
                            </a>
                        </div>
                        <!-- Advertisement End -->

                        <!-- Post Tags Start -->
                        <div class="post--tags">
                            <ul class="nav">
                                <li><span><i class="fa fa-tags"></i></span></li>
                                @foreach($categoryTypes as $ctype )
                                <li><a href="{{route('UStag',$ctype->name)}}">{{$ctype->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- Post Tags End -->

                        <!-- Post Social Start -->
                        <div class="post--social pbottom--30">
                            <span class="title"><i class="fa fa-share-alt"></i></span>

                            <!-- Social Widget Start -->
                            <div class="social--widget style--4">
                                <ul class="nav">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div>
                            <!-- Social Widget End -->
                        </div>
                        <!-- Post Social End -->

                        <!-- Post Author Info Start -->
                        <div class="post--author-info clearfix">
                            <div class="img">
                                <div class="vc--parent">
                                    <div class="vc--child">
                                        <a href="{{route('author',$author->id)}}" class="btn-link">
                                            <img class="lazy" data-class="lazy" data-src="{{asset('control/images/authors_images/'.$author->image)}}" alt="">
                                            <p class="name">{{$author->name}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="info">
                                <h2 class="h4">About The Author</h2>

                                <div class="content">
                                    <p>{{$author->about}}.</p>
                                </div>

                            </div>
                        </div>
                        <!-- Post Author Info End -->

                        <!-- Post Nav Start -->
                        <div class="post--nav">
                            <ul class="nav row">

                                @if(isset($pnNews[0]) && $pnNews[0] !=   null)
                                <li class="col-xs-6 ptop--30 pbottom--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item">
                                        <div class="post--img">
                                            <a href="{{route('news-single',$pnNews[0]->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$pnNews[0]->image)}}" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{$pnNews[0]->user->name}}</a></li>
                                                    <li><a >{{date('d F Y| h a', strtotime($pnNews[0]->created_at))}}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="{{route('news-single',$pnNews[0]->id)}}"  class="btn-link">{{$pnNews[0]->title}}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>

                                @endif
                                @if(isset($pnNews[1]) && $pnNews[1] !=   null)

                                <li class="col-xs-6 ptop--30 pbottom--30">
                                    <!-- Post Item Start -->
                                    <div class="post--item">
                                        <div class="post--img">
                                            <a href="{{route('news-single',$pnNews[1]->id)}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$pnNews[1]->image)}}" alt=""></a>

                                            <div class="post--info">
                                                <ul class="nav meta">
                                                    <li><a href="#">{{$pnNews[1]->user->name}}</a></li>
                                                    <li><a>{{date('d F Y| h a', strtotime($pnNews[1]->created_at))}}</a></li>
                                                </ul>

                                                <div class="title">
                                                    <h3 class="h4"><a href="{{route('news-single',$pnNews[1]->id)}}" class="btn-link">{{$pnNews[1]->title}}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Post Item End -->
                                </li>
                                    @endif
                            </ul>
                        </div>
                        <!-- Post Nav End -->

                        <!-- Post Related Start -->
                        <div class="post--related ptop--30">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title" data-ajax="tab">
                                <h2 class="h4">You Might Also Like</h2>

                                <div class="nav">
                                    <a href="#" class="prev btn-link" data-ajax-action="load_prev_related_posts">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>

                                    <span class="divider">/</span>

                                    <a href="#" class="next btn-link" data-ajax-action="load_next_related_posts">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Post Items Title End -->

                            <!-- Post Items Start -->
                            <div class="post--items post--items-2" data-ajax-content="outer">
                                <ul class="nav row" data-ajax-content="inner">
                                    @foreach($likeNews as $lNews)
                                    <li class="col-sm-6 pbottom--30">
                                        <!-- Post Item Start -->
                                        <div class="post--item post--layout-1">
                                            <div class="post--img">
                                                <a href="{{route('news-single',$lNews['id'])}}" class="thumb"><img class="lazy" data-src="{{asset('control/images/news_images/'.$lNews['image'])}}" alt=""></a>
                                                <a href="#" class="cat">{{$lNews['typeName']}}</a>
                                                <a class="icon"><i class="fa fa-flash"></i></a>

                                                <div class="post--info">
                                                    <ul class="nav meta">
                                                        <li><a href="{{route('news-single',$lNews['id'])}}">{{$lNews['name']}}</a></li>
                                                        <li><a>{{$lNews['created_at']}}</a></li>
                                                    </ul>

                                                    <div class="title">
                                                        <h3 class="h4"><a href="#" class="btn-link">{{$lNews['title']}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="post--content">
                                                <p>{!! str_limit($lNews['topic'] , $limit = 150)  !!}.</p>
                                            </div>

                                            <div class="post--action">
                                                <a href="{{route('news-single',$lNews['id'])}}">Continue Reading...</a>
                                            </div>
                                        </div>
                                        <!-- Post Item End -->
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
                        <!-- Post Related End -->

                        <!-- Comment List Start -->
                        <div class="comment--list pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
                                <h2 class="h4">03 Comments</h2>

                                <i class="icon fa fa-comments-o"></i>
                            </div>
                            <!-- Post Items Title End -->

                            <ul class="comment--items nav">
                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment--item clearfix">
                                        <div class="comment--img float--left">
                                            <img class="lazy" data-src="{{asset('control/img/news-single-img/comment-avatar-01.jpg')}}" alt="">
                                        </div>

                                        <div class="comment--info">
                                            <div class="comment--header clearfix">
                                                <p class="name">Karla Gleichauf</p>
                                                <p class="date">12 May 2017 at 05:28 pm</p>

                                                <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                            </div>

                                            <div class="comment--content">
                                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->
                                </li>

                                <li>
                                    <!-- Comment Item Start -->
                                    <div class="comment--item clearfix">
                                        <div class="comment--img float--left">
                                            <img class="lazy" data-src="{{asset('control/img/news-single-img/comment-avatar-02.jpg')}}" alt="">
                                        </div>

                                        <div class="comment--info">
                                            <div class="comment--header clearfix">
                                                <p class="name">M Shyamalan</p>
                                                <p class="date">12 May 2017 at 05:28 pm</p>

                                                <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                            </div>

                                            <div class="comment--content">
                                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Comment Item End -->

                                    <ul class="comment--items nav">
                                        <li>
                                            <!-- Comment Item Start -->
                                            <div class="comment--item clearfix">
                                                <div class="comment--img float--left">
                                                    <img class="lazy" data-src="{{asset('control/img/news-single-img/comment-avatar-03.jpg')}}" alt="">
                                                </div>

                                                <div class="comment--info">
                                                    <div class="comment--header clearfix">
                                                        <p class="name">Liz Montano</p>
                                                        <p class="date">12 May 2017 at 05:28 pm</p>

                                                        <a href="#" class="reply"><i class="fa fa-mail-reply"></i></a>
                                                    </div>

                                                    <div class="comment--content">
                                                        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Comment Item End -->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- Comment List End -->

                        <!-- Comment Form Start -->
                        <div class="comment--form pd--30-0">
                            <!-- Post Items Title Start -->
                            <div class="post--items-title">
                                <h2 class="h4">Leave A Comment</h2>

                                <i class="icon fa fa-pencil-square-o"></i>
                            </div>
                            <!-- Post Items Title End -->

                            <div class="comment-respond">
                                <form action="#" data-form="validate">
                                    <p>Don’t worry ! Your email address will not be published. Required fields are marked (*).</p>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>
                                                <span>Comment *</span>
                                                <textarea name="comment" class="form-control" required></textarea>
                                            </label>
                                        </div>

                                        <div class="col-sm-6">
                                            <label>
                                                <span>Name *</span>
                                                <input type="text" name="name" class="form-control" required>
                                            </label>

                                            <label>
                                                <span>Email Address *</span>
                                                <input type="email" name="email" class="form-control" required>
                                            </label>

                                            <label>
                                                <span>Website</span>
                                                <input type="text" name="website" class="form-control">
                                            </label>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary">Post a Comment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Comment Form End -->
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