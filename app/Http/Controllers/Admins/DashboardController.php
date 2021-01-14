<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Job;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
class DashboardController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function redirect() {

        $date_from = date('Y-m-01 h:i:s');
        $date_to = date('Y-m-d h:i:s',strtotime(' +1 month'));
        //$date_to = date('Y-m-d h:i:s');


        $usersCount = User::select()->count();
        $adminsCount = Admin::select()->count();
        $jobsCount = Job::select()->whereBetween('created_at', [$date_from, $date_to])->count();
        $jobsCountunver = Job::select()->where('status', 0)->count();
        $jobsCountver = Job::select()->where('status', 1)->count();
        $catsCount = Category::select()->count();

        $job_dates = Job::all();

//        foreach($job_dates as $job_date) {
//            return
//        }

        //$date = date('F Y',  strtotime('first day of +1 month'));

        //$date = date('F Y');


        return view('admins.dashboard', compact('usersCount', 'adminsCount','jobsCount','catsCount','jobsCountunver', 'jobsCountver', 'job_dates','date_to' ));
    }


}
