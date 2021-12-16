<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DB;

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
        $rs = DB::table('checkin')->where('username',$user_name);
        return view('');
    }
}
