<?php

namespace App\Http\Controllers;

use App\category;
use App\news;
use App\news_types;
use App\types;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Matrix\Builder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
////    {   if ($this->middleware('auth'))true;
////        elseif ($this->middleware('auth:admin'))true;
//    {
//        $this->middleware('auth');
//
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $randomNews =news::join('news_types','news_types.news_id','=','news.id')
            ->join('users','users.id','=','news.user_id')
            ->select('news.*','users.name','users.id as userId','users.about')->inRandomOrder()->distinct()->take(3)->get()->toArray();
        $lastNews =news::orderBy('updated_at', 'desc')->take(12)->get();

        $worldsNews = array();$national = array();$financial = array();$entertainment = array();
            $technology = array();$lifestyle = array();$sports = array();$travel = array();
        foreach (category::all() as $category) {
            if ($category->name == 'Worlds News') {

                array_push($worldsNews, $this->getNewsByCat($category->id));
            }
            elseif ($category->name == 'National') {
                array_push($national, $this->getNewsByCat($category->id));

            } elseif ($category->name == 'Financial') {
                array_push($financial, $this->getNewsByCat($category->id));

            } elseif ($category->name == 'Entertainment') {
                array_push($entertainment, $this->getNewsByCat($category->id));

            } elseif ($category->name == 'lifestyle') {
                array_push($lifestyle, $this->getNewsByCat($category->id));

            } elseif ($category->name ==  'Technology') {
                array_push($technology, $this->getNewsByCat($category->id));

            } elseif ($category->name == 'Sports') {
                array_push($sports, $this->getNewsByCat($category->id));

            }elseif ($category->name == 'Travel') {
                array_push($travel, $this->getNewsByCat($category->id));

            }
        }

        return view('USnews.home', compact('randomNews','lastNews','worldsNews','national','financial','entertainment',
            'lifestyle','technology','sports','travel'));
    }

    function getNewsByCat($catId){
                return  news::join('news_types','news_types.news_id','=','news.id')
            ->join('types','news_types.type_id','=','types.id')
            ->join('categories','categories.id','=','types.category_id')
            ->join('users','users.id','=','news.user_id')
            ->where('categories.id', $catId)->where('news.acceptable','1')->orderBy('created_at', 'desc')
            ->select('news.*','users.name','users.id as userId','users.about','types.id as typeId','types.name as typeName')->distinct()->take(5)->get()->toArray();

    }
    function getNewsByType($type,$num){
        return news::join('news_types','news_types.news_id','=','news.id')
            ->join('types','news_types.type_id','=','types.id')
            ->join('users','users.id','=','news.user_id')
            ->where('types.name',$type)->where('news.acceptable','1')
            ->select('news.*','users.name as userName','users.id as userId','types.id as typeId','types.name as typeName')->distinct()->orderBy('created_at', 'desc')->paginate($num);
    }

    public function directLogin(){
        $user =Auth::user();
        if ($user->hasRole('admin')){
            return redirect(route('admin.index'));
        }
        else{
            return redirect(route('profile'));
        }
    }

    public function newsSingle($id)
    {
        $news =news::find($id);

        $author =User::where('id',$news->user_id)->first();
        // dd($author);
        $news_types=news_types::where('news_id',$news->id)->get();
        $categoryTypes =types::where('category_id',$news->types->first()->category->id)->get();

        $previousNews=news::find($id-1);
        if(empty($previousNews )){
            $previousNews  = null ;
        }

        $nextNews =news::find($id+1);
        if(empty($nextNews )){
            $nextNews  = null ;
        }
        $pnNews=[$previousNews,$nextNews];
       // dd($pnNews[0] == null);
        $types=[];
        foreach ($news_types as $news_type) {
            $type = types::where('id',$news_type->type_id)->get();
            array_push($types,$type);
        }
        $likeNews = news::join('news_types','news_types.news_id','=','news.id')
        ->join('types','news_types.type_id','=','types.id')
        ->join('categories','categories.id','=','types.category_id')
        ->join('users','users.id','=','news.user_id')
        ->where('categories.id', $news->types->first()->category->id)->where('news.acceptable','1')
        ->select('news.*','users.name','users.id as usersId','types.id as typeId','types.name as typeName')->inRandomOrder()->distinct()->take(2)->get()->toArray();
        return view('USnews.news-single',compact('news','types','categoryTypes','author','pnNews','likeNews'));
    }

    public function viewTag($typee){
        $type=types::where('name',$typee)->first();
        $news = $this->getNewsByType($typee,4);

        return view('USnews.tag',compact('news','type'));
    }

    public function author($id){
        $author=User::where('id',$id)->select('id','name','about','image')->get();
        $aNews =news::where('news.user_id',$id)->where('news.acceptable','1')->orderBy('news.created_at', 'desc')
        ->distinct()->paginate(6);

        return view('USnews.author',compact('author','aNews'));
    }

    public function category($category){
        $rNews = news::join('news_types','news_types.news_id','=','news.id')
            ->join('types','news_types.type_id','=','types.id')
            ->join('categories','categories.id','=','types.category_id')
            ->join('users','users.id','=','news.user_id')
            ->where('categories.name',$category)->where('news.acceptable','1')
            ->select('news.*','users.name as userName','users.id as userId','types.id as typeId','types.category_id','types.name as typeName')
            ->inRandomOrder()->distinct()->take(5)->get()->toArray();

       $types=types::where('category_id',$rNews[0]['category_id'])->select('types.id','types.name')->get()->toArray();
       $type1=$this->getNewsByType($types[0]['name'],2);
        $type2=$this->getNewsByType($types[1]['name'],5);
        $type3=$this->getNewsByType($types[2]['name'],5);
        $type4=$this->getNewsByType($types[3]['name'],2);
        $type5=$this->getNewsByType($types[4]['name'],2);
        $type6=$this->getNewsByType($types[5]['name'],3);
        $type7=$this->getNewsByType($types[6]['name'],3);
        //$page =strtolower(str_replace(' ','-',$category));
        return view('USnews.category',compact('category','rNews','types','type1','type2','type3','type4','type5','type6','type7'));
    }

    public function contributors(){
        //$authors =User::join('news','news.user_id','=','users.id');
    }

}
