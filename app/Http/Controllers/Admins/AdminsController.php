<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Admin;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminsController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }



    public function login() {

        return view('admins.auth.login');
    }

    public function checkLogin(LoginRequest $request) {

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")], $remember_me)) {
            // notify()->success('تم الدخول بنجاح  ');
            return redirect() -> route('admins.dashboard');
        }
        // notify()->error('خطا في البيانات  برجاء المجاولة مجدا ');
        return redirect()->back()->with(['error' => 'هناك خطا بالبيانات']);
    }


    public function getCreate() {

        return view('admins.adminsStuff.createAdmins');
    }




    public function storeAdmins(Request $request) {

        Request()->validate([

            'email'        => 'required|string|max:100',
            'name'         => 'required|string|max:100',
            'password'     => 'required|string|max:100',




        ]);


        $createAdmin = Admin::create([
            'name'     => $request->name,
            'email'       => $request->email,
            'password'    => Hash::make($request->password),

        ]);



        if($createAdmin)
            return redirect()->back()->with(['success' => 'created']);

        else
            return abort('404');


    }

    public function showAdmins()
    {
        return view('admins.adminsStuff.showAdmins')->with('admins', Admin::all());
    }



    public function showJobs() {

        $jobs = Job::select()->orderBy('id','desc')->paginate(3);

        $unverifiedJobs = Job::select('status')->where('status', 0)->count();
        return view('admins.managingJobs.latestJobs', compact('jobs', 'unverifiedJobs'));

    }


    public function updateJobs(Request $request, $job_id) {
        $job_id = Job::findOrFail($job_id);

        $update_jobs = $job_id->update([
            'status' => $request->status
        ]);

        if($update_jobs)
            return redirect()->back()->with(['success' => 'updated']);

    }

    public function deleteJobs(Request $request) {

        $job_id = Job::findOrFail($request->id);

        $job_id->delete();

//        if($delete)
//            return redirect()->route('latest.jobs');
    }


    public function getCreateCats() {


        return view('admins.managingCats.createCats');
    }

    public function storeCats(Request $request) {

        Request()->validate([

            'name'        => 'required|string|max:100|unique:categories,name',
            'font'        => 'required|string|max:100',
            'desc'        => 'required|string|max:300',



        ]);


        $createCate = Category::create([
            'name'     => ucwords(trim($request->name)),
            'font'       => trim($request->font),
            'cat_desc'    => trim($request->desc),


        ]);



        if($createCate)
            return redirect()->back()->with(['success' => 'created']);

        else
            return abort('404');
    }


    public function showCats() {


        $categories =  DB::table('categories')
            ->leftJoin('jobs', 'categories.name', '=', 'jobs.jobcategory')
            ->select('categories.name as name','categories.id as id','jobs.jobcategory','categories.id as id','categories.font as font','categories.cat_desc as cat_desc', 'categories.status as status', DB::raw("count(jobs.jobcategory) as count"))
            ->orderBy('id', 'desc')
            ->groupBy('categories.name')
            ->get();

        //return $categories;




        $showCatspag = Category::paginate(2);

        $unverifiedCats = Category::select('status')->where('status', 0)->count();


        //$showCats = Category::all();
        return view('admins.managingCats.showCats', compact( 'unverifiedCats','categories', 'showCatspag'));

    }

    public function deleteCats(Request $request) {



        $cat_id = Category::findOrFail($request->id);

        $cat_id->delete();

//        return "done";


    }

    public function updateCats(Request $request, $cat_id) {
        $cat_id = Category::findOrFail($cat_id);

        $update_cats = $cat_id->update([
            'status' => $request->status
        ]);

        //dd($request->status);

        if($update_cats)
            return redirect()->back()->with(['success' => 'updated']);

    }





}
