<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserAuthController extends Controller
{

    public function login(){
        return view('auth.login');
    }
    public function logout(Request $request){
      if (session()->has('LoggedUser')){
          session()->pull('LoggedUser');
          return redirect('login');
      }

    }
    public function check(Request $req){
        $user=admin::where('id','=',$req->user_id)->first();
        if($user){
            if(Hash::check($req->password,$user->password))
            {
                $req>session()->put('LoggedUser',$user);
                return redirect('abonne');
            }
            else{
                return   back()->with('fail', "Mot pass incorrect");
            }

        }
        else{

            return   back()->with('fail', "Utilisateur n'existe pas");

        }
    }
}
