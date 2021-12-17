<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;
use App\checkIn;

class CheckInController extends Controller
{
    public function addCheckIn($user_name)
    {
        $data = array();
        $data['gioVao'] = new DateTime('NOW');
        $data['username'] = $user_name;

        DB::table('checkin')->insert($data);
        return date_format($data['gioVao'],"d/m/Y H:i:s");
        

    }
    
    public function showCheckIn($user_name)
    {
        $rs_checkin = checkIn::where('username',$user_name)->paginate(4);
        return view('gioVao')->with('checkin',$rs_checkin);
    }

    public function search(Request $request){
        $user = $request->username;
        $key = $request->keyword;
        if(empty($key)){
            $rs_checkin = checkIn::where('username',$user)->paginate(4);
        }
        else{
            $rs_checkin = checkIn::where('username',$user)->whereDate('gioVao',date('Y-m-d', strtotime($key)))->paginate(4);
        }
        return view('gioVao')->with('checkin',$rs_checkin);
    }
}
