<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login'); 
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

    public function index_register()
    {
        return view('register'); 
    }

    public function register(Request $request)
    {
        $messages = [
            'username.required' => 'Tài khoản bắt buộc nhập',
            'username.max:255' => 'Tài khoản phải ít hơn 255 kí tự',
            'username.min:3' => 'Tài khoản phải nhiều hơn 3 kí tự',
            'fullname.required' => 'Tên bắt buộc nhập',
            'password.required' => 'Mật khẩu bắt buộc nhập',
            'email.required' => 'Email bắt buộc nhập',
            'confirm_password.required' => 'mật khẩu xác nhận lại bắt buộc nhập',
        ];
        $this->validate($request,[
            'username'=>'required|max:255|min:3',
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
        if($data['password']==$request->confirm_password){
            DB::table('users')->insert($data);
            Session::put('message','Đăng ký thành công. Mời đăng nhập!');
            return view('/login');
        }

        Session::put('message','Xác nhận mật khẩu không đúng!');
        return redirect('/register');
        
    }
}
