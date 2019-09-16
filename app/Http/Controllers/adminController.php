<?php

namespace App\Http\Controllers;

use App\news;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
class adminController extends Controller
{
    //
    public function getUsers()
    {
        return DataTables::of(User::query())
            ->editColumn('name', function($user) {
                return
                    $data = '<a href='.route('showUser', $user->id ).'>'.$user->name.'</a>';
            })
            ->addColumn('trust', function($user) {
                if($user->hasPermissionTo('trust')){
                    $data ='<a id="trustBut" class="btn btn-danger text-white" data-value='.$user->id.'>Un trusted</a>';
                }else {
                    $data='<a  id="trustBut" class="btn btn-primary text-white" data-value='.$user->id.'>Trusted</a>';

                }
                return $data;
            })
            ->addColumn('active', function($user) {
                if($user->hasPermissionTo('active')){
                    $data = '<a href='.route('active', $user->id ).'><button class="btn btn-danger">Not active</button></a>';
                }else {
                    $data='<a  href='.route('active', $user->id ).'><button class="btn btn-primary">active</button></a>';
                }
                return $data;
            })
            ->setRowClass(function ($user) {
            return $user->hasPermissionTo('active')? 'alert-success' : 'alert-danger';
        })
            ->rawColumns(['name','trust','active'])
            ->make(true);

    }
    public function trusted($id){
        $user=User::find($id);
        if ($user->hasPermissionTo('trust')){
            $user->revokePermissionTo('trust');
        }else{
            $user->givePermissionTo('trust');

        }
        $isTrusted=$user->hasPermissionTo('trust');

         return response()->json(['isTrusted'=>$isTrusted],200);
    }
    /////////////////////////////////////////////////////////////////////
    public function active($id){
        $user=User::find($id);
        if ($user->hasPermissionTo('active')){
            $user->revokePermissionTo('active');
        }else{
            $user->givePermissionTo('active');

        }
        return redirect(route('admin.index'));

    }

    public function showUser($id){
        return redirect(route('userProfile'))->with(['id'=>$id]);
    }

    ////////////////////////////////////////////////////////
    public function destroy($id){
        try{
            $news=news::findOrfail($id);
            $news->delete();
            return redirect()->back()->with('success',"News $news->name deleted successfully");
        }catch (ModelNotFoundException $exception){
            return redirect()->back()->with('error','News not found');
        }
    }
    /////////////////////////////////////////////////////////
    public function acceptNews($id){
             try{
                 $news=news::findOrfail($id);
                 $news->acceptable="1";
                 $news->update();
                 return redirect()->back()->with('success',"News accepted successfully");
             }catch (ModelNotFoundException $exception){
                 return redirect()->back()->with('error','News not found');
             }
    }

}
