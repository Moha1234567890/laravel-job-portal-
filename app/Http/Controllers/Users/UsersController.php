<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\JobsRequest;
use App\Mail\ApplyMail;
use App\User;
use Illuminate\Support\Facades\DB;

use App\Models\SavedJob;
use App\Models\Email;

use App\Models\Job;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function profile($id) {

        $user = User::findOrFail($id);


        $applyedJobs = Email::select('from_user', Auth::user()->email)->count();

        $createdJobs = Job::select($id)->where('user_id', $id)->count();

        return view('users.profile', compact('user' , 'createdJobs', 'applyedJobs'));
    }


    public function update(UsersRequest $request, $id) {

        $user = User::findOrFail($id);

        if($user) {
            $updateuser = $user->update(

                $request->all()

            );

            return redirect()->back()->with(['success' => 'updated']);
        }

        else {
             return redirect()->back('home');
        }

       // return "wtf";




    }

    public function updateImageGet($saved_id) {

        $user = User::findOrFail($saved_id);

        return view('users.image', compact('user'));
    }

    public function updateCv(Request $request, $id) {

        $y = User::findOrFail($id);

        Request()->validate([
            'document.*' => 'required|file|mimes:doc,docx,pdf|max:204800',


            'cv' => 'required|file|mimes:pdf|max:204800',


        ]);


        if($y)
            $y->update([

                'cv' =>  $request->cv->store('cvs','public'),

            ]);

        return redirect()->route('profile', ['id' => Auth::user()->id]);





    }

    public function updateImage(Request $request, $id) {

        $updateImage = User::findOrFail($id);

        Request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);


        if($updateImage)
             $updateImage->update([

            'image' =>  $request->image->store('images','public'),

         ]);

        return redirect()->route('profile', ['id' => Auth::user()->id]);





    }



    public function savedJobs($saved_id) {

        $saved_jobs = SavedJob::select()->where('user_id', $saved_id)->paginate(3);
        $saved_jobs_counter = SavedJob::select()->where('user_id', $saved_id)->count();


        return view('jobs.savedJobs', compact('saved_jobs', 'saved_jobs_counter'));

    }

    public function createMoreInfo() {

     

        return view('users.beforeHome');

    }
    
    public function storeMoreInfo(Request $request, $id) {

     

        $moreInfo = User::findOrFail($id);
        if($moreInfo)
        $moreInfo->update([

       'type' =>  $request->type,
       'user_desc' =>  $request->user_desc,

    ]);

   return redirect()->route('home');

    }

    public function profileForPublic($id) {
        $user = User::findOrFail($id);
        $companyJobs =  DB::table('users')
        ->join('jobs', 'users.id', '=', 'jobs.user_id')
        ->select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype',  DB::raw("count(jobs.jobcategory) as count"))
        ->where('users.id','=', $id)
        ->groupBy('jobs.jobcategory')
        ->limit(3)
        ->orderBy('created_at','desc')


 
        ->get();

        //return $user;

       return view('users.publicProfile', compact('user','companyJobs'));

    }

    public function moreJobs($id) {

        // $moreJobs =  DB::table('jobs')
        // ->rightJoin('emails', 'jobs.id', '=', 'emails.job_id_email')
        // ->select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 
        //  'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype', 'emails.user_id as user_id', 'emails.user_name as user_name', 
        //   DB::raw("count(emails.job_id_email) as count"))
        // ->where('jobs.user_id','=', $id)
       
        // ->groupBy('emails.job_id_email')
        // ->orderBy('created_at','desc')

        // ->get();

        // if ($moreJobs) {
        //     $select = $moreJobs->select('emails.user_id', 'emails.user_name')->get();
        //     echo $select;
        // }

        // $jobx =  SavedJob::with('jobs')->where('job_id', $id)->whereHas('jobs', function ($q) {

        //     $q->select('user_id', 'job_id','id');

        // })->where('user_id', Auth::user()->id)->get()->first();

        $jobx =  Job::with('emails')->where('user_id', $id)->whereHas('emails', function ($q) {

         //   $q->select('desc', 'user_id');

        })->where('user_id', $id)->get();

        return $jobx;
    }




}
