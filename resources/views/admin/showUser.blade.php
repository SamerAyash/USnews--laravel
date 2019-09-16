@extends('layouts.app')
@section('content')

    <div class="container">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{session('error')}}
                </div>
            @endif
        <?php if (session()->has('id'))session()->put('user_id',session('id'));
            $user=\App\User::find(session('user_id'));
            ?>
            <ul class="nav ">
                <li class="nav-item">
                    <p class="nav-link h2" >{{$user->name}}</p>
                </li>
                <li class="nav-item m-2">
                    @if($user->hasPermissionTo('active'))
                    <a href={{route('active', $user->id )}}><button class="btn btn-danger">Not active</button></a>
                    @else
                    <a  href={{route('active', $user->id )}}><button class="btn btn-primary">active</button></a>
                    @endif
                </li>
                <li class="nav-item m-2">
                    @if($user->hasPermissionTo('trust'))
                    <a href={{route('trusted', $user->id )}}><button class="btn btn-danger">Un trusted</button></a>
                    @else
                    <a  href={{route('trusted', $user->id )}}><button class="btn btn-primary">Trusted</button></a>
                    @endif
                </li>
            </ul>
        @foreach( \App\news::all()->reverse() as $newsPost )
            @if($newsPost->user_id == session('user_id'))
                <div class="w-100">
                    <div class="card text-white bg-dark mb-2 m-2">
                     <span class="text-right">
                            <a style="text-decoration: none;color: white"
                               class="fas fa-trash m-1 remove-news" data-value="{{$newsPost->id}}"></a>
                         @if($newsPost->acceptable == 1)
                             <i style="text-decoration: none;"
                                class="fas fa-check text-white"></i>
                             @else
                             <a href="{{route('acceptNews',$newsPost->id)}}" style="text-decoration: none;"
                                class="fas fa-check-square text-white"></a>
                         @endif
                     </span>
                        <div class="card-header h6 ">
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
                    window.location='{{route('admin.destroy')}}/'+id;
                });
        });
    </script>
@endsection