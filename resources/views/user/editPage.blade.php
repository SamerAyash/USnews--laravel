@extends('user.master')
@push('css')
    <script src="https://cdn.jsdelivr.net/npm/vue@^2"></script>
    <!-- include vue-treeselect & its styles. you can change the version tag to better suit your need. -->
    <script src="https://cdn.jsdelivr.net/npm/@riophae/vue-treeselect@0.0.38/dist/vue-treeselect.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@riophae/vue-treeselect@0.0.38/dist/vue-treeselect.min.css">
@endpush
@section('content')
    <main class="container " style="margin: 10px; width: 90%">
        <form  action="{{route('updateNews',['id'=>$news->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            {{csrf_field()}}
            <div class="row margin-bottom-10" >
                <div class="fileinput fileinput-new col-lg-6" data-provides="fileinput" >
                        <div class="fileinput-new thumbnail" >
                            <img src="{{asset('control/images/news_images/'.$news->image)}}" alt=""style="width: 500px;"> </div>
                        <div class="fileinput-preview fileinput-exists thumbnail">
                            <img src="{{asset('control/images/news_images/'.$news->image)}}"style="width: 500px;"></div>
                        <div>
                                                            <span class="btn red btn-outline btn-file">
                                                                <span class="fileinput-new">Select image </span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="image" > </span>
                            <a href="javascript:" class="btn red fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    <div class="alert-danger">{{$errors->first('image')}}</div>
                </div>
                <div class="col-lg-6">
                    <div id="app">
                        <treeselect v-model="value" :multiple="true"  :options="options" aria-required="type">

                        </treeselect>
                    </div>
                </div>
            </div>

            <div class="form-group ">
                <label>News title:</label>
                <input name="title" value="{{$news->title}}" type="text" class="form-control" placeholder="Enter news title">
            </div>
            <div class="alert-danger">{{$errors->first('title')}}</div>
            <div class="form-group ">
                <label>News detail:</label>
                <textarea name="topic" id="topic" rows="8"  type="text" class="form-control"  placeholder="Enter news detail">{{$news->topic}}</textarea>
            </div>
            <div class="alert-danger">{{$errors->first('topic')}}</div>
            <input type="submit" class="btn text-white" style="background-color:#F9AF17;" value="Publish" >
            <span>
                <a href="{{route('news')}}" class="btn  btn-danger">Cancel</a>
            </span>
        </form>
    </main>
@endsection
@push('script')
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#topic' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>

        var types = [
                @foreach (\App\types::all() as $type)
            {id:"{{ $type->id }}", label:"{{ $type->name.', '.$type->category()->pluck('name')}}"},
            @endforeach
        ];
    </script>
    <script>
        // register the component
        Vue.component('treeselect', VueTreeselect.Treeselect)

        new Vue({
            el: '#app',
            data: {
                // define options
                options:types,
                // define default value
                value: [{{$news->types->pluck('id')->implode(',')}}],
                allowClearingDisabled : true,
                allowSelectingDisabledDescendants : true

            }})
    </script>
@endpush