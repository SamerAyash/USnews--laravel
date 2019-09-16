@extends('layouts.app')
@section('content')

    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <form action="{{route('createNews')}}" class="form-actions ml-2">
            <button type="submit" class="btn btn-primary"  @if(!\Illuminate\Support\Facades\Auth::user()->can('active')){{'disabled'}}@endif >
                Create news
                <i class="fas fa-plus"></i>
            </button>
        </form>
        @foreach( \App\news::all()->reverse() as $newsPost )
                @if($newsPost->acceptable == 1)
                <div class="w-100 ">
                <div class="card text-white bg-dark mb-2 m-2">
                    @if($newsPost->user_id == Auth::user()->id)
                        @can('active')
                            <span class="text-right">
                            <a style="text-decoration: none"
                               class="fas fa-trash m-1 text-white remove-news" data-value="{{$newsPost->id}}"></a>
                            <a href="{{route('edit',$newsPost->id)}}" style="text-decoration: none;"
                               class="fas fa-pen-square text-white"></a>
                        </span>
                        @endcan
                    @endif
                    <div class="card-header h6">
                        {{$newsPost->user()->first()->name}}
                        <label class="text-muted ">{{$newsPost->updated_at}}</label></div>
                    <div class="card-body">
                        <h5 class="card-title h3 fontTitle">{{$newsPost->title}}</h5>
                        <p class="card-text" >{{$newsPost->topic}}.</p>
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
