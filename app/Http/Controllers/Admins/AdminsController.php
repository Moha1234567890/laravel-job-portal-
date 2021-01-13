<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;

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
            'name'        => 'required|string|max:100',
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

        $jobs = Job::paginate(3);

        $unverifiedJobs = Job::select('status')->where('status', 0)->count();
        return view('admins.managingJobs.latestJobs', compact('jobs', 'unverifiedJobs'));

    }


    public function updateJobs(Request $request, $job_id) {
        $job_id = Job::findOrFail($job_id);

        $update_jobs = $job_id->update([
            'status' => $request->status
        ]);

        if($update_jobs)
            return redirect()->route('latest.jobs');

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

            'name'        => 'required|string|max:100',
            'font'        => 'required|string|max:100',
            'cat_desc'     => 'required|string|max:100',


        ]);


        $createCate = Category::create([
            'name'     => $request->name,
            'font'       => trim($request->font),
            'cat_desc'    => $request->desc,

        ]);



        if($createCate)
            return redirect()->back()->with(['success' => 'created']);

        else
            return abort('404');
    }


    public function showCats() {

        $showCatspag = Category::paginate(3);

        $unverifiedCats = Category::select('status')->where('status', 0)->count();


        //$showCats = Category::all();
        return view('admins.managingCats.showCats', compact('showCatspag', 'unverifiedCats'));

    }

    public function deleteCats(Request $request) {

        $cat_id = Category::findOrFail($request->id);

        $cat_id->delete();


    }

    public function updateCats(Request $request, $cat_id) {
        $cat_id = Category::findOrFail($cat_id);

        $update_cats = $cat_id->update([
            'status' => $request->status
        ]);

        if($update_cats)
            return redirect()->back()->with(['success' => 'updated']);

    }





}
