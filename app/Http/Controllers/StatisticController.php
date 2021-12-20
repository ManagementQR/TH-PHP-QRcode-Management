<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Mail;
session_start();

class StatisticController extends Controller
{
    public function staff_is_late(){

    }

    public function work_days(){
        return view('admin.statistic.work_days_month');
    }

    public function work_days_month(Request $request){
       $date_start = $request->date_start;
       $date_end = $request->date_end;

       $all_checkin = DB::table('checkin')->get();
       $data = array();


       if (!isset($date_start) || !isset($date_end)){
           Session::put('message','Ngày bắt đầu và ngày kết thúc không để trống.');
       }

        $all_user = DB::table('checkin')->where(DB::raw("DATE_FORMAT(gioVao, '%m-%d-%Y')"),$date_start)->get();

        return view('admin.statistic.work_days_month')->with('all_user',$all_user);
    }
}
