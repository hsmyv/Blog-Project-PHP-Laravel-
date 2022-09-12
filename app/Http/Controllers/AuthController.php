<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login_sumbit(Request $request){
       if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
        return redirect()->route('home');
       }
       return redirect()->route('login_index')->with('danger', 'sehv parol');
    }
    
    public function index1(){
        return view('auth.index');
    }

    public function login(Request $request){
        Auth::guard('customers')->attempt($request->only(['email','password']));
        return redirect()->back();
    }

}
