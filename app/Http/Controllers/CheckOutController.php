<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CheckOut;
use DB;

class CheckOutController extends Controller
{
    public function showCheckOut($user_name)
    {
        $rs_checkout = CheckOut::where('username',$user_name)->paginate(4);
        return view('gioRa')->with('checkout',$rs_checkout);
    }

    public function addCheckOut($user_name)
    {
        $data = array();
        $data['username'] = $user_name;
        DB::table('checkout')->insert($data);
        return $data['username'];
    }

    public function search(Request $request){
        $user = $request->username;
        $key = $request->keyword;
        if(empty($key)){
            $rs_checkout = CheckOut::where('username',$user)->paginate(4);
        }
        else{
            $rs_checkout = CheckOut::where('username',$user)->whereDate('gioRa',date('Y-m-d', strtotime($key)))->paginate(4);
        }
        return view('gioRa')->with('checkout',$rs_checkout);
    }
}
