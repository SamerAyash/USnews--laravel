<?php

namespace App\Http\Controllers\Auth;

use App\admin;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Intervention\Image\Facades\Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected function redirectTo()
    {
        $user = \Auth::user();
        $roles = $user->getRoleNames()->first(); // Returns a collection
        if($roles == 'admin'){
            return route('admin.index');
        }else{
            return route('profile');
        }
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'about'=>['required', 'string'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if (request('image')){
            Image::make(request('image'))
                ->save(public_path('control/images/authors_images/'.request('image')->hashName()));
            return User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'image'=>request('image')->hashName(),
                'about' => $data['about'],
                'password' =>Hash::make($data['password']),

            ]);
        }
        else{
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'image'=>'default.png',
            'about' => $data['about'],
            'password' =>Hash::make($data['password']),

        ]);}
    }
}
