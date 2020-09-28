<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\User;
use Validator;

class UserRegisterController extends Controller
{
    public function Store(Request $req)
    {
      $validate= Validator::make(
        $req->all(),$this->validateRules(),$this->validateMessage());

        $user= User::create([
          'name'=> $req->name,
          'username'=> $req->username,
          'password'=>Hash::make($req->password)
        ]);

        if ($user) {
            return redirect()->route('user.login')->with('success','Register Successfully!');
        }else{
            return redirect()->route('user.login')->with('warning','Register Failed!');
        }
    }


    public function validateRules()
    {
      $rules=[
        'name'=>'required',
        'username'=>'required|max:100',
        'password'=>'required|min:8|max:250|',
      ];
      return $rules;
    }

    private function validateMessage()
    {
        $message = [
            'required' => ':attribute wajib diisi',
            'max' => ':attribute tidak boleh lebih dari :max',
            'mimes' => 'format :attribute harus salah satu dari :mimes'
        ];

        return $message;
    }
}
