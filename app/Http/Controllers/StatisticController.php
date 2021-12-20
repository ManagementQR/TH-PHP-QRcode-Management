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
       /*if (!isset($date_start) || !isset($date_end)){
           Session::put('message','Ngày bắt đầu và ngày kết thúc không để trống.');
       }*/

        $fromDate = "2021-12-20";
        $toDate   = "2021-12-25";

        $all_user = DB::table('checkin')->where(DB::raw(
            "(gioVao >= ? AND gioVao <= ?)"),
            [$fromDate." 00:00:00", $toDate." 23:59:59"])->get();

        return view('admin.statistic.work_days_month')->with('all_user',$all_user);
    }
}
