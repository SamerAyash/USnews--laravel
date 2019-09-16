@extends('user.master')
@section('content')
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
                                    <li  style="display:inline-block;"><span><i class="fa fa-folder-open-o"></i></span></li>
                                    @foreach($news->types as $type)
                                    <li  style="display:inline-block;"><a href="{{route('tag',$type->name)}}"><p>{{$type->name}},{{$type->category()->pluck('name')->first()}}</p></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="post--img">
                                <a href="#" class="thumb"><img src="{{asset('control/images/news_images/'.$news->image)}}" style="width: 900px" alt=""></a>
                            </div>
                            <br>
                            <div class="post--title-largest h1">
                                {{ $news->title }}
                            </div>
                            <div class="post--content h4">
                               {!! $news->topic !!}
                            </div>
                        </div>
                        <!-- Post Item End -->

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection