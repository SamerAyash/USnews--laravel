<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('store',function(Request $request){
    $request->validate([
        'title'=>'required',
        'topic'=>'required',
        'image'=>'required|image',

    ],[
        'title.required'=>'News Title is required',
        'topic.required'=>'News Details is required',
        'image.required'=>'News Image is required',
    ]);
    return new \App\Http\Resources\TUser(\App\User::all());

    $imageName=time().'.'.$request->file('image')->getClientOriginalExtension();
    $news =new \App\news();
    $news['title']=$request->input('title');
    $news['topic']=$request->input('topic');
    $news['image']=$imageName;
    /* if (Auth::user()->hasPermissionTo('trust')){
         $news->acceptable="1";
     }else{
         $news->acceptable="0";
     }*/
    $news->save();
    /*foreach (\request('treeSelect') as $select){
        $news_types=new news_types();
        $news_types['news_id']=$news->id;
        $news_types['type_id']=$select;
        $news_types->save();
    }*/
    Image::make(request('image'))
        ->save(public_path('control/images/news_images/'.$imageName))->resize(600);

    return response()->json(['success'=>'News published successfully'],200);

});
Route::match(['PUT','PATCH'],'update/{id}',function (Request $request, $id){
    $request->validate([
        'title'=>'required',
        'topic'=>'required',
    ],[
        'title.required'=>'News Title is required',
        'topic.required'=>'News Details is required',
    ]);
    $news=news::find($id);
    /*if ($request->hasFile('image')){
        $imageName=time().'.'.$request->file('image')->getClientOriginalExtension();
        Image::make(request('image'))
            ->save(public_path('control/images/news_images/'.$imageName))->resize(600);

        if(File::exists(public_path('control/images/news_images/'.$news->image))){
            File::delete(public_path('control/images/news_images/'.$news->image));
        }
        $news['image']=$imageName;
    }*/
    $news['title']=$request->input('title');
    $news['topic']=$request->input('topic');
    $news->update();

    return response()->json(['success'=>'News updated successfully',$request->all()],200);

});

Route::post('store2','api\newsController@store');
Route::get('index', 'api\newsController@index');
