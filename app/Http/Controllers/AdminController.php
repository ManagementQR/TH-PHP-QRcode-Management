<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Mail;
session_start();

class AdminController extends Controller
{
    public function index(){
        return view('admin_login');
    }

    public function show_dashboard(){
        return view('admin.dashboard');
    }

    public function dashboard(Request $request){

        $admin_email = $request->admin_userName;
        $admin_password = md5($request->admin_password);

        $result = DB::table('users')->where('username',$admin_email)->where ('password',$admin_password)->
        where ('idRole','admin')->first();

        if($result){
            Session::put('fullname',$result->fullname);
            Session::put('username',$result->username);

            return Redirect::to('/dashboard');
        }else{
            Session::put('message','UserName hoặc Mật khẩu sai!');
            return Redirect::to('/admin'); // trả về trang admin
        }
    }

    public function logout(){
        Session::put('fullname', null);
        Session::put('username', null);
        return Redirect::to('/admin'); // trả về trang admin
    }
}
