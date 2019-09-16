@extends('layouts.app')
@section('content')
    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        @foreach( \App\news::all()->reverse() as $newsPost )
            @if($newsPost->acceptable == 0)
                <div class="w-auto ">
                    <div class="card text-white bg-dark mb-2 m-2">
                         <span class="text-right">
                             <a style="text-decoration: none;color: white"
                                class="fas fa-trash m-1 remove-news" data-value="{{$newsPost->id}}"></a>
                            <a href="{{route('acceptNews',$newsPost->id)}}" style="text-decoration: none;"
                               class="fas fa-check-square text-white"></a>
                        </span>
                        <div class="card-header h6">
                            {{$newsPost->user()->first()->name}}
                            <label class="text-muted ">{{$newsPost->updated_at}}</label></div>
                        <div class="card-body">
                            <h5 class="card-title h3 fontTitle">{{$newsPost->title}}</h5>
                            <p class="card-text ">{{$newsPost->topic}}.</p>
                        </div>
                    </div>
                    <hr>
                </div>
            @endif
        @endforeach
    </div>
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
@endsection
