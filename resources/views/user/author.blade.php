@extends('user.master')
@section('content')
    <div style="width: 90%;">
    <div class="profile-sidebar">
        <!-- PORTLET MAIN -->
        <div class="portlet light profile-sidebar-portlet bordered">
            <!-- SIDEBAR USERPIC -->
            <div class="profile-userpic col-lg-6 col-md-6">
                <img src="{{asset('control/images/authors_images/'.Auth::user()->image)}}" style="width: 300px;" class="img-rounded" alt="">
            </div>
            <!-- END SIDEBAR USERPIC -->
            <!-- SIDEBAR USER TITLE -->
            <div class="profile-usertitle col-lg-6 col-md-6 font-dark bold" style="margin-left: -150px">
                <b class="h3 font-blue-madison">Name : </b><span class="profile-usertitle-name h4">{{Auth::user()->name}}</span>
                <div>
                    <hr class="divider">
                </div>
                <b class="h3 font-blue-madison">About you :</b>
                <div class="profile-usertitle-job h4">{{Auth::user()->about}}</div>
            </div>
            <!-- END SIDEBAR USER TITLE -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet light ">
                            <div class="portlet-title tabbable-line">
                                <div class="caption caption-md">
                                    <i class="icon-globe theme-font hide"></i>
                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                </div>
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#tab_1_1" data-toggle="tab">Personal Info</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_2" data-toggle="tab">Change Avatar</a>
                                    </li>
                                    <li>
                                        <a href="#tab_1_3" data-toggle="tab">Change Password</a>
                                    </li>

                                </ul>
                            </div>

                            <div class="portlet-body">
                                <div class="tab-content">
                                    <!-- PERSONAL INFO TAB -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="tab-pane active" id="tab_1_1">
                                        <form id="infoForm" >
                                            <div class="form-group">
                                                <label class="control-label">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}"/></div>
                                            <div class="form-group">
                                                <label class="control-label">About</label>
                                                <textarea class="form-control" rows="3" name="about">{{Auth::user()->about}}</textarea>
                                            </div>

                                            <div class="margiv-top-10">
                                                <input type="submit" id="saveInfo" class="btn green" value="Save Changes"/>
                                                <a href="{{route('myProfile')}}" class="btn default"> Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END PERSONAL INFO TAB -->
                                    <!-- CHANGE AVATAR TAB -->
                                    <div class="tab-pane" id="tab_1_2">

                                        <form action="{{route('changeImage',Auth::user()->id)}}" role="form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                                                    <div>
                                                                        <span class="btn default btn-file">
                                                                            <span class="fileinput-new"> Select image </span>
                                                                            <span class="fileinput-exists"> Change </span>
                                                                            <input type="file" name="authorImage"> </span>
                                                        <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top-10">
                                                <input type="submit" class="btn green" value="Submit"/>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE AVATAR TAB -->
                                    <!-- CHANGE PASSWORD TAB -->
                                    <div class="tab-pane" id="tab_1_3">

                                        <form action="{{route('changePass',Auth::user()->id)}}" role="form" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label class="control-label">Current Password</label>
                                                <input type="password" class="form-control" name="cPass" /></div>
                                            <div class="form-group">
                                                <label class="control-label">New Password</label>
                                                <input type="password" class="form-control" name="nPass"/></div>
                                            <div class="form-group">
                                                <label class="control-label">Re-type New Password</label>
                                                <input type="password" class="form-control" name="rNPass"/></div>
                                            <div class="margin-top-10">
                                                <input type="submit" class="btn green" value="Change Password"/>
                                                <a href="{{route('myProfile')}}" class="btn default"> Cancel </a>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- END CHANGE PASSWORD TAB -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
    </div>

    @push('script')
        <script  type="text/javascript">
            $("#saveInfo").on('submit',function(e){
                e.preventDefault();
                mydata =$('#infoForm').serialize();
                $.ajax({
                    url: '{{route('changeInf',Auth::user()->id)}}' ,
                    _method: "post",
                    data: {
                        mydata:mydata,
                        _token:'{{csrf_token()}}'
                    },
                    success: function( response ) {
                        console.log(response);
                        alert(response);
                    }
                });
            });
        </script>
    @endpush
@endsection