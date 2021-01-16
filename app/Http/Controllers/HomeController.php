<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Job;
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
        $randomJobs = Job::all()->take(3);


        $getAllCats = Category::select('name')->where('status',1)->get();


        //return $getAllCats;





      //
        return view('includes.home', compact('randomJobs'));
    }

    public function contact() {
        $getAllCats = Category::select('name')->where('status',1)->get();
        return view('jobs.contact', compact('getAllCats'));

    }
}
