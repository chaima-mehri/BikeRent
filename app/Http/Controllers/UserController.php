<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            $req->session()->put('msg','passwod or user name do not match ');
            return back();


        }
        else {
            $req->session()->put('user',$user);
            
            if($user->role_id=='0'){
                return redirect('/');
            }else{
                return redirect('/admin');
            }
          
        }
        
    }
    function register(Request $req)
    {
        
       $user =new User();
        $user->name=$req->Name;
        $user->email=$req->Email;
        $user->password=Hash::make($req->Password);
        $user->avatar=$req->picture;
        $user->save();
        return (redirect('/login'));
     
    }
}