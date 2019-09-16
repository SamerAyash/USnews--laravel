<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

///////////////////////////// guests routes /////////////////////////////
/////////////////////////// Auth routes //////////////////////////
Auth::routes(['verify' => true]);
Route::get('directLogin',['as'=>'directLogin','uses'=>'HomeController@directLogin']);
////////////////////////////////// USnews route
Route::get('/', ['as'=>'home','uses'=>'HomeController@index']);
Route::view('contributors','USnews.contributors')->name('contributors');
Route::view('contact','USnews.contact')->name('contact');
Route::get('author/{id}',['as'=>'author','uses'=>'HomeController@author']);
Route::get('news-single/{id}',['as'=>'news-single','uses'=>'HomeController@newsSingle']);
Route::view('search','USnews.search')->name('search');
Route::get('tag/{type}',['as'=>'UStag','uses'=>'HomeController@viewTag']);
Route::get('category/{category}',['as'=>'categoryNews','uses'=>'HomeController@category']);
Route::view('usLogin','USnews.login')->name('usLogin');
///////////////////////////// Users routes /////////////////////////////
Route::group(['prefix'=>'user','middleware' =>['role:publisher'=>'verified']],function (){
    Route::view('news','user.news')->name('news');
    Route::get('view-news/{id}',['as'=>'view-news','uses'=>'NewsController@viewNews']);
    Route::view('create','user.createNews')->name('createNews')->middleware('permission:active');
    Route::post('store',['as'=>'store','uses'=> 'NewsController@store'])->middleware('permission:active');
    Route::get('edit/{id}',['as'=>'edit','uses'=> 'NewsController@edit'])->middleware('permission:active');
    Route::get('destroy/{id?}',['as'=>'news.destroy','uses'=> 'NewsController@destroy'])->middleware('permission:active');
    Route::put('update/{id}',['as'=>'updateNews','uses'=> 'NewsController@updateNews'])->middleware('permission:active');
    Route::view('profile','user.profile')->name('profile');
    Route::get('category/{category}',['as'=>'category','uses'=>'NewsController@newsCategory']);
    Route::get('tag/{type}',['as'=>'tag','uses'=>'NewsController@viewTag']);
    Route::view('author','user.author')->name('myProfile');
    Route::post('changeInf/{id}',['as'=>'changeInf','uses'=>'NewsController@changeInf']);
    Route::put('changeImage/{id}',['as'=>'changeImage','uses'=>'NewsController@changeImage']);
    Route::put('changePass/{id}',['as'=>'changePass','uses'=>'NewsController@changePass']);


});
//////////////////////////// Admin routes ///////////////////////////
Route::group(['prefix'=>'admin','middleware'=>['role:admin'=>'verified']],function (){
    Route::view('index','admin.index')->name('admin.index');
    Route::view('acceptPage','admin.newsAccept')->name('admin.acceptPage');
    Route::get('acceptNews/{id}',['as'=>'acceptNews','uses'=>'adminController@acceptNews']);
    Route::get('active/{id}',['as'=>'active','uses'=>'adminController@active']);
    Route::get('getUsers',['as'=>'getUsers','uses'=>'adminController@getUsers']);
    Route::get('showUser/{id}',['as'=>'showUser','uses'=>'adminController@showUser']);
    Route::get('trusted/{id?}',['as'=>'trusted','uses'=>'adminController@trusted']);
    Route::view('userProfile','admin.showUser')->name('userProfile');
    Route::get('destroy/{id?}',['as'=>'admin.destroy','uses'=> 'adminController@destroy']);

});
Route::resource('newprofile','ProfileController');

