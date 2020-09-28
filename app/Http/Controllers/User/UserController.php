<?php

namespace App\Http\Controllers\User;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function login()
    {
      return view('login.login');
    }
    public function authenticate(Request $req){
      $valid=$this->validator($req);
      if(Auth::guard('user')->attempt(['username'=>$req->username,'password'=>$req->password])){
        return redirect()->route('login.login')->with('success','Login Successfully!');
      }else{
        // flash('Username or Password not Found')->error();
        return back()->with('danger','Error!');
      }
    }

    public function validator(Request $req){
      $rules=[
        'username'=>'required|exists:users,username',
        'password'=>'required|string|min:6|max:255',
      ];
      $messages = [
            '*' => 'Login failed.'
        ];
      $validator=$req->validate($rules,$messages);
      return $validator;
    }


    public function guard(){
      return Auth::guard('user');
    }
}
