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
        $messages = [
            'username.required' => 'Tài khoản bắt buộc nhập',
            'fullname.required' => 'Tên bắt buộc nhập',
            'password.required' => 'Mật khẩu bắt buộc nhập',
            'email.required' => 'Email bắt buộc nhập',
            'confirm_password.required' => 'mật khẩu xác nhận lại bắt buộc nhập',
        ];
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
            'fullname'=>'required',
            'email'=>'required',
            'confirm_password'=>'required'
        ], $messages);

        $errors = $validate->errors();
        $data = array();
        $data['username'] = $request->username_register;
        $data['password'] = $request->password_register;
        $data['fullname'] = $request->fullname;
        $data['email'] = $request->email;
        $data['gender'] = 0;
        $data['idRole'] = 'KH';
        if($data['password']!=$request->confirm_password){
            Session::put('error','Xác nhận mật khẩu không đúng!');
            return redirect('/login');
        }
        DB::table('users')->insert($data);
        Session::put('message','Đăng ký thành công. Mời đăng nhập!');
        return redirect('/login');
    }
}
