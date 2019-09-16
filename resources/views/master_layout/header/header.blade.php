
    <!-- Header Section Start -->
    <header class="header--section header--style-8">
        <!-- Header Navbar Start -->
        <div class="header--navbar navbar bd--color-1 bg--color-1" data-trigger="sticky">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#headerNav" aria-expanded="false" aria-controls="headerNav">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="headerNav" class="navbar-collapse collapse float--left">
                    <!-- Header Menu Links Start -->
                    <ul class="header--menu-links nav navbar-nav" data-trigger="hoverIntent">
                        <li class="{{ Request::path() == '/' ? 'active' : '' }}">
                            <a href="{{route('home')}}" >Home</a>
                        </li>
                        <li class="{{ Request::path() == 'category/Worlds%20News' ? 'active' : '' }}">
                            <a href="{{route('categoryNews','Worlds News')}}" >Worlds News</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <!-- Megamenu Filter Start -->
                                            <div class="megamenu--filter">
                                                <ul class="nav">
                                                    <li class="active">
                                                        <a href="#" data-action="load_cat_posts" data-cat="all">All<i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="latin-america">Latitn America<i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="africa">Africa<i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="middle-east">Middle East<i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-action="load_cat_posts" data-cat="europe">Europe<i class="fa fa-angle-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <!-- Megamenu Filter End -->
                                        </div>

                                        <div class="col-md-10">
                                            <!-- Megamenu Posts Start -->
                                            <div class="megamenu--posts" data-ajax-content="outer">
                                                <ul class="row" data-ajax-content="inner">
                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb">
                                                                <img src="{{asset('control/img/megamenu-img/post-01.jpg')}}" alt="">
                                                            </a>

                                                            <a href="#" class="cat">Beach</a>

                                                            <a href="#" class="icon"><i class="fa fa-eye"></i></a>
                                                        </div>

                                                        <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                    </li>

                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb">
                                                                <img src="{{asset('control/img/megamenu-img/post-02.jpg')}}" alt="">
                                                            </a>

                                                            <a href="#" class="cat">News</a>

                                                            <a href="#" class="icon"><i class="fa fa-star-o"></i></a>
                                                        </div>

                                                        <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                    </li>

                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb">
                                                                <img src="{{asset('control/img/megamenu-img/post-03.jpg')}}" alt="">
                                                            </a>

                                                            <a href="#" class="cat">Ice Hiking</a>

                                                            <a href="#" class="icon"><i class="fa fa-flash"></i></a>
                                                        </div>

                                                        <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                    </li>

                                                    <li class="col-md-3">
                                                        <div class="img">
                                                            <a href="news-single-v1.html" class="thumb">
                                                                <img src="{{asset('control/img/megamenu-img/post-04.jpg')}}" alt="">
                                                            </a>

                                                            <a href="#" class="cat">Mountain</a>

                                                            <a href="#" class="icon"><i class="fa fa-heart-o"></i></a>
                                                        </div>

                                                        <a href="news-single-v1.html" class="title">It is a long established fact that a reader will be distracted by</a>
                                                    </li>
                                                </ul>

                                                <!-- Preloader Start -->
                                                <div class="preloader bg--color-0--b" data-preloader="1">
                                                    <div class="preloader--inner"></div>
                                                </div>
                                                <!-- Preloader End -->
                                            </div>
                                            <!-- Megamenu Posts End -->

                                            <!-- Megamenu Pagination Start -->
                                            <div class="megamenu--pagination" data-ajax="tab">
                                                <a href="#" class="prev" data-ajax-action="load_prev_posts">
                                                    <i class="fa fa-long-arrow-left"></i>
                                                </a>

                                                <a href="world-news.html" class="all" title="View All" data-toggle="tooltip">
                                                    <i class="fa fa-th-large"></i>
                                                </a>

                                                <a href="#" class="next" data-ajax-action="load_next_posts">
                                                    <i class="fa fa-long-arrow-right"></i>
                                                </a>
                                            </div>
                                            <!-- Megamenu Pagination End -->
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ Request::path() == 'category/National' ? 'active' : '' }}"><a href="{{route('categoryNews','National')}}">National</a></li>
                        <li class="{{ Request::path() == 'category/Financial' ? 'active' : '' }}"><a href="{{route('categoryNews','Financial')}}">Financial</a></li>
                        <li class="{{ Request::path() == 'category/Entertainment' ? 'active' : '' }}"><a href="{{route('categoryNews','Entertainment')}}">Entertainment</a></li>
                        <li class="{{ Request::path() == 'category/Lifestyle' ? 'active' : '' }}"><a href="{{route('categoryNews','Lifestyle')}}">Lifestyle</a></li>
                        <li class="{{ Request::path() == 'category/Technology' ? 'active' : '' }}"><a href="{{route('categoryNews','Technology')}}">Technology</a></li>
                        <li class="{{ Request::path() == 'category/Sports' ? 'active' : '' }}"><a href="{{route('categoryNews','Sports')}}">Sports</a></li>
                        <li class="{{ Request::path() == 'category/Travel' ? 'active' : '' }}"><a href="{{route('categoryNews','Travel')}}">Travel</a></li>
                        <li class="dropdown megamenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Catagory<i class="fa flm fa-angle-down"></i></a>
                            <?php $categories =\App\category::all() ?>
                            <ul class="dropdown-menu">
                                @foreach($categories as $category)
                                <li class="dropdown">
                                    <a >{{$category->name}}</a>
                                    <?php $types = \App\types::where('category_id',$category->id)->get() ?>
                                    <ul class="dropdown-menu">
                                        @foreach($types as $type)
                                        <li><a href="{{route('UStag',$type->name)}}">{{$type->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More<i class="fa flm fa-angle-down"></i></a>

                            <ul class="dropdown-menu">
                                <li class="{{ Request::path() == 'contributors' ? 'active' : '' }}"><a href="{{route('contributors')}}">Contributors</a></li>
                                <li class="{{ Request::path() == 'contact' ? 'active' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                                @if(Auth::check())
                                 <li class="{{ Request::path() == 'login' ? 'active' : '' }}"><a href="{{route('directLogin')}}">Control Panel</a></li>
                                @else
                                <li class="{{ Request::path() == 'login' ? 'active' : '' }}"><a href="{{route('usLogin')}}">Login</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- Header Search Form Start -->
                <form action="{{route('search')}}" class="header--search-form float--right" data-form="validate">
                    <input type="search" name="search" placeholder="Search..." class="header--search-control form-control" required>

                    <button type="submit" class="header--search-btn btn"><i class="header--search-icon fa fa-search"></i></button>
                </form>
                <!-- Header Search Form End -->
                <!-- Header Menu Links End -->
            </div>
        </div>
        <!-- Header Navbar End -->

        <!-- Header Mainbar Start -->
        <div class="header--mainbar">
            <div class="container">
                <!-- Header Logo Start -->
                <div class="header--logo text-center">
                    <h1 class="h1">
                        <a href="{{route('home')}}" class="btn-link">
                            <img src="{{asset('control/img/logo.png')}}" alt="USNews Logo">
                            <span class="hidden">USNews Logo</span>
                        </a>
                    </h1>
                </div>
                <!-- Header Logo End -->
            </div>
        </div>
        <!-- Header Mainbar End -->
    </header>
    <!-- Header Section End -->
