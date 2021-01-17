<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Search;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $randomJobs = Job::orderBy('id', 'desc')->take(3)->get();
        $randomTopJobs = Job::orderBy('created_at', 'asc')->take(3)->get();


        $getAllCats = Category::select('name')->where('status',1)->get();


        $getSeaches = DB::table('searches')
            ->select('searches.keyword as keyword', DB::raw("count(searches.keyword) as count"))
            ->limit(5)
            ->groupBy('searches.keyword')
            ->orderBy('count','desc')
            ->get();







        return view('includes.home', compact('randomJobs', 'getAllCats', 'randomTopJobs','getSeaches'));
    }

    public function contact() {
        return view('jobs.contact', compact('getAllCats'));

    }
}
