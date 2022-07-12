<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function login_post(Request $request){
          $validate=$request->validate([
              'username'=>'required',
              'password'=>'required'
          ]);
        if (Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            $user=Auth::user();
            return response()->json(['status'=>true]);

        }else{
            return response()->json(['error'=>"Kullanıcı adı veya şifre hatalı"]);
        }
    }
}
