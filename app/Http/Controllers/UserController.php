<?php

namespace App\Http\Controllers;

use App\checkIn;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Mail;
session_start();

class UserController extends Controller
{
    public function all_user(Request $request){
        $user = $request->username_search;
        if(!empty($user)){
            $all_user = DB::table('users')->Where('username','LIKE', "%{$user}%")->paginate(4);
            $manager_user  = view('admin.user.all_user')->with('all_user',$all_user);
            return view('admin_layout')->with('admin.user.all_user', $manager_user);
        }

        $all_user = DB::table('users')->Where('idRole','KH')->paginate(4);
        $manager_user  = view('admin.user.all_user')->with('all_user',$all_user);
        return view('admin_layout')->with('admin.user.all_user', $manager_user);
    }

    public function block_user($username){
        DB::table('users')->where('username',$username)->update(['status'=>0]);
        Session::put('message','Đã khóa tài khoản này.');
        return Redirect::to('all-user');

    }
    public function active_user($username){
        DB::table('users')->where('username',$username)->update(['status'=>1]);
        Session::put('message','Đã kích hoạt tài khoản này.');
        return Redirect::to('all-user');
    }

    public function edit_user($username){
        $edit_user = DB::table('users')->where('username',$username)->get();

        $manager_user  = view('admin.user.edit_user')->with('edit_user',$edit_user);

        return view('admin_layout')->with('admin.user.edit_user', $manager_user);
    }

    public function update_user(Request $request,$username){
        $data = array();
        $data['username'] = $request->username;
        $data['password'] = $request->password;
        $data['fullname'] = $request->fullname;
        $data['gender'] = $request->gender;
        $data['address'] = $request->address;
        $data['dateOfBirth'] = $request->dateOfBirth;
        $data['phoneNumber'] = $request->phoneNumber;
        $data['email'] = $request->email;

        $get_image = $request->file('avatarImg');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();

            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('/public/uploads/users',$new_image);

            $data['avatarImg'] = $new_image;

            DB::table('users')->where('username',$username)->update($data);
            Session::put('message','Đã cập nhật một tài khoản người dùng.');
            return Redirect::to('all-user');
        }
        else{
            DB::table('users')->where('username',$username)->update($data);
            Session::put('message','Đã cập nhật một tài khoản người dùng.');
            return Redirect::to('all-user');
        }
    }
}
