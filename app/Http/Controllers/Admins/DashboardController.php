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

        $usersCount = User::select()->count();
        $adminsCount = Admin::select()->count();
        $jobsCount = Job::select()->count();
        $catsCount = Category::select()->count();


        return view('admins.dashboard', compact('usersCount', 'adminsCount','jobsCount','catsCount' ));
    }


}
