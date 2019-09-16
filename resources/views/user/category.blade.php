@extends('user.master')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
@endpush
@section('content')
    <div class="container">
        @foreach($categoryNews as $newsPost)
            @if($newsPost->user_id == Auth::user()->id)
                <div class="container " >
                    <div class="card text-white mb-5 m-2 "style="width: 90%">
                     <span class="text-right">
                    @if($newsPost->acceptable == 1)
                             <i style="text-decoration: none;"
                                class="fas fa-check text-white"></i>
                         @endif
                     </span>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card mb-4 box-shadow">
                                    <img class="card-img-top "style="width: 500px" src="{{asset('control/images/news_images/'.$newsPost->image)}}" alt="Card image cap">
                                    <div class="card-body">
                                        <h3><strong class="card-title">{{$newsPost->title}}</strong><p class="text-muted">{{$newsPost->types->pluck('name')->implode(' ,')}}</p></h3>
                                        <p class="card-text">{!! str_limit($newsPost->topic , $limit = 150, $end = ' ...') !!}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="{{route('view-news',$newsPost->id)}}" style="color: black;text-decoration: none">
                                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                                </a>

                                                @if(Auth::user()->can('active'))
                                                    <a href="{{route('edit',$newsPost->id)}}" style="color: black;text-decoration: none;">
                                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                                    </a>
                                                    <a class="remove-news" data-value="{{$newsPost->id}}" style="color:red ;text-decoration: none;">
                                                        <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                                                    </a>
                                                @endif
                                            </div>
                                            <small class="text-muted">{{$newsPost->created_at}}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            @endif
        @endforeach
    </div>
@endsection
@push('script')
    <script>
        $('.remove-news').click(function () {
            var id=$(this).data('value');
            swal({
                    title: "Are you sure?",
                    text: "Do you want delete news ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                },
                function(){
                    window.location='{{route('news.destroy')}}/'+id;
                });
        });

    </script>
@endpush