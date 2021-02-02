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
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    public function redirect() {



        $catsCount = Category::select()->count();

        $usersCount = User::select()->count();
        $adminsCount = Admin::select()->count();
        $jobsCount = Job::select()->count();
        $num_apps = Email::select()->count();
        $num_saved_jobs = SavedJob::select()->count();
        $jobsCountunver = Job::select()->where('status', 0)->count();
        $jobsCountver = Job::select()->where('status', 1)->count();




       // return($categories);




        return view('admins.dashboard', compact('usersCount', 'adminsCount','jobsCount','catsCount','jobsCountunver', 'jobsCountver','num_apps','num_saved_jobs'));
    }

    public function fetchData() {


        $chartJobs = DB::table('jobs')
            ->select('id','month', DB::raw("count(month) as count"))
            ->orderBy('id', 'asc')

            ->groupBy('month')

            ->get();




        $arr_month = [];
        $arr_count = [];
        foreach($chartJobs as $chartJob) {
            array_push($arr_month, $chartJob->month);
            array_push($arr_count, $chartJob->count);
        }

        $datajob = [
            'month' => $arr_month,
            'count' => $arr_count
        ];

        return response()->json($datajob);
    }


    public function fetchJobApps() {

        $Num_of_app_per_jobs =  DB::table('jobs')
            ->join('emails', 'jobs.id', '=', 'emails.job_id_email')
            ->select('jobs.jobtitle','emails.job_id_email as job_id_email', DB::raw("count(emails.job_id_email) as count"))


            ->groupBy('emails.job_id_email')

            ->get();


        $arr_apps= [];
        $arr_jobs= [];

        foreach($Num_of_app_per_jobs as $Num_of_app_per_job) {
            array_push($arr_apps, $Num_of_app_per_job->count);
            array_push($arr_jobs, $Num_of_app_per_job->jobtitle);
        }

        $apps_jobs = [
            'apps' => $arr_apps,
            'jobs' => $arr_jobs
        ];


        return response()->json($apps_jobs);
    }




}
