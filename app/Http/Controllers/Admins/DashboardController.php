<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Email;
use App\Models\Job;
use App\Models\SavedJob;
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



        $usersCount = User::select()->count();
        $adminsCount = Admin::select()->count();
        $jobsCount = Job::select()->whereBetween('created_at', [$date_from, $date_to])->count();
        $jobsCountunver = Job::select()->where('status', 0)->count();
        $jobsCountver = Job::select()->where('status', 1)->count();
        $catsCount = Category::select()->count();

        $job_dates = Job::all();

        $num_apps = Email::select()->count();
        $num_saved_jobs = SavedJob::select()->count();

        $result = Job::select('jobtitle','created_at')->get();

        $arr_job = [];
        foreach($job_dates as $job_date) {
            array_push($arr_job, $job_date->id);
        }

        $datajob = [
            'jobtitle' => $arr_job
        ];




        return view('admins.dashboard', compact('usersCount', 'adminsCount','jobsCount','catsCount','jobsCountunver', 'jobsCountver', 'job_dates','date_to','num_apps','num_saved_jobs','result','datajob'));
    }

    public function fetchData() {

        $job_dates = Job::all();

        $arr_job = [];
        $arr_id = [];
        foreach($job_dates as $job_date) {
            array_push($arr_job, $job_date->jobtitle);
            array_push($arr_id, $job_date->id);
        }

        $datajob = [
            'jobtitle' => $arr_job,
            'ids' => $arr_id
        ];

        return response()->json($datajob);
    }




}
