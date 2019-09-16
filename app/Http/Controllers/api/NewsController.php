<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\news;
use App\news_types;
use App\types;
use App\User;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    public function store(Request $request){

        $data=$request->validate([
            'title'=>'required',
            'topic'=>'required',
            'image'=>'required|image',

        ],[
            'title.required'=>'News Title is required',
            'topic.required'=>'News Details is required',
            'image.required'=>'News Image is required',
        ]);
        $imageName=time().'.'.$request->file('image')->getClientOriginalExtension();
        $news =new news();
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

        return response()->json(['success'=>'News published successfully','news'=>$news],200)->header('Content-Type','application/json');
    }

    public function index(){
        return response()->json(['success'=>'News published successfully'],200);
    }


    public function updateNews(Request $request, $id){
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
       /* if (Auth::user()->hasPermissionTo('trust')){
            $news['acceptable']="1";
        }
        else{
            $news['acceptable']="0";
        }*/

        $news->update();

        return response()->json(['success'=>'News updated successfully'],200);

    }


    public function destroy($id){
        try{
            $news=news::findOrfail($id);
            File::delete(public_path('control/images/news_images/'.$news->image));
            $news->delete();
            return redirect()->back()->with('success',"News $news->name deleted successfully");
        }catch (ModelNotFoundException $exception){
            return redirect()->back()->with('error','News not found');
        }

    }

    public function viewNews($id){
        $news=news::find($id);
        return view('user.news-single',compact('news'));
    }

    public function viewTag($type){
        $types = types::where('name',$type)->first();
        $tag= $types->news;
        //  dd();
//        $tag=[];
//        foreach(news::all()->reverse() as $news ){
//            foreach ($news->types->pluck('name') as $types){
//                if ($types == $type){
//                    array_push($tag,$news);
//                }
//            }
//        }
        return view('user.tag',compact('tag'));
    }

    public function newsCategory($category){
        $categoryNews=[];
        foreach (news::all()->reverse() as $news){
            foreach ($news->types as $types){
                if ($types->category->name == $category){
                    array_push($categoryNews,$news);
                    break;
                }
            }
        }
        return view('user.category',compact('categoryNews'));
    }

    public function changeInf(Request $request,$id){
        if (! $request->ajax()){
            dd($request);
            return 'Illegel';
        }
        $request->validate( [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'about'=>['required', 'string'],
        ]);
        $author =User::find($id);
        if ($author->email == $request->input('email')){
            $author->name =$request->input('name');
            $author->about =$request->input('about');
            $author->update();
            return response()->json(['success'=>'Profile Info updated successfully']);
        }
        else{
            $request->validate( [
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users']]);
            $author->name =$request->input('name');
            $author->email =$request->input('email');
            $author->about =$request->input('about');
            $author->update();
            return response()->json('success','Profile Info updated successfully');
        }
    }
    public function changeImage(Request $request,$id){
        $request->validate( [
            'authorImage'=>'required',]);
        $author =User::find($id);

        if ($request->hasFile('authorImage')){
            $imageName =time().'.'.$request->file('authorImage')->getClientOriginalExtension();
            Image::make($request->file('authorImage')->getRealPath())
                ->save(public_path('control/images/authors_images/'.$imageName))->resize(600);

            if(File::exists(public_path('control/images/authors_images/'.$author->image))){
                File::delete(public_path('control/images/authors_images/'.$author->image));
            }
            $author->image =$imageName;
            $author->update();
        }
        return redirect()->back()->with('success','Profile image updated successfully');}
    public function changePass (Request $request,$id){
        $request->validate( [
            'cPass' => ['required', 'string', 'max:255'],
            'nPass' => ['required', 'string', 'max:255'],
            'rNPass' => ['required', 'string', 'max:255'],
        ]);

        $author =User::find($id);


        if (Hash::check($request->cPass, Auth::user()->password)) {

            if ($request->input('nPass') == $request->input('rNPass')){
                $author->password = Hash::make($request->input('nPass'));
                $author->update();
                return redirect()->back()->with('success','password updated successfully');
            }
            else{
                return redirect()->back()->withErrors('New passwords do not match');
            }
        }else{
            return redirect()->back()->withErrors('OLD passwords do not match');
        }
    }


}
