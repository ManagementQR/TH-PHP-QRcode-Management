<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{
    public function index()
    {
    return view('login'); // trả về trang test.blade.php
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $rs = DB::table('users')->where('username',$username)->where('password',$password)->first();
        if($rs){
            return view('client-dashboard');
        }
        Session::put('message','Tài khoản hoặc mật khẩu không đúng!');
        return redirect('/login');
    }

    public function signup(Request $request)
    {
        // $data = $request->all();
        // $brand = new Brand();
        // $brand->username = $data['username_register'];
        // $brand->password = $data['password_register'];
        // $brand->fullname = $data['fullname'];
        // $brand->email = $data['email'];
        // $brand->save();

    }
}
