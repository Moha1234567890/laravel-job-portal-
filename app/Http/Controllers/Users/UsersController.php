<?php

namespace App\Http\Controllers\Users;
//use Auth;

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
        $companyJobs =  Job::select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 
        'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype')->where('user_id', $id)->get();

      
 
      

        //return $companyJobs;

        return view('users.publicProfile', compact('user','companyJobs'));

    }

    public function moreJobs($id) {
        // $id = Job::findOrFail($id);

        $moreJobs =  DB::table('jobs')
        ->rightJoin('emails', 'jobs.id', '=', 'emails.job_id_email')
        ->select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 
         'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype', 'emails.user_id as user_id', 'emails.user_name as user_name', 
          DB::raw("count(emails.job_id_email) as count"))
        ->where('jobs.user_id','=', $id)
       
        ->groupBy('emails.job_id_email')
        ->orderBy('created_at','desc')

        ->get();

        return $moreJobs;

      

        


        //$myJobs = Job::with('emails')->find(73);

       

        // $myJobs = Job::whereHas('emails', function ($query) use($id) {
        //     //return $query->where('id', '=', 'job_id_email')
        //                 return $query->where('user_id', '=', $id);
        // })->get();

        // return $myJobs;
    }

    public function myJobs($id) {
        // $moreJobs =  DB::table('jobs')
        // ->leftJoin('emails', 'jobs.id', '=', 'emails.job_id_email')
        // ->select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 
        //  'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype', 'emails.user_id as user_id', 'emails.user_name as user_name', 
        //   DB::raw("count(emails.job_id_email) as count"))
        // ->where('jobs.user_id','=', $id)
       
        // ->groupBy('emails.job_id_email')
        // ->orderBy('created_at','desc')

        // ->get();

        // foreach($moreJobs as $moreJob) {
        //     if($moreJob->count == 0) {
        //         $moreJobs =  DB::table('jobs')
               
        //         ->select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 
        //          'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype')
        //         ->where('jobs.user_id','=', $id)
               
               
        //         ->orderBy('created_at','desc')
        
        //         ->get();

        //         return $moreJobs;
        //     } else {
        //         $moreJobs =  DB::table('jobs')
        //         ->leftJoin('emails', 'jobs.id', '=', 'emails.job_id_email')
        //         ->select('jobs.status','jobs.created_at as created_at','jobs.jobcategory','jobs.id', 
        //          'jobs.jobtitle', 'jobs.companyname', 'jobs.jobdesc', 'jobs.jobtype', 'emails.user_id as user_id', 'emails.user_name as user_name', 
        //           DB::raw("count(emails.job_id_email) as count"))
        //         ->where('jobs.user_id','=', $id)
               
        //         ->groupBy('emails.job_id_email')
        //         ->orderBy('created_at','desc')
        
        //         ->get();

        //         //return $moreJobs;


                
    

                

        //     }

            $applications = DB::table('emails as A')
                ->join('emails as B', 'A.job_id_email', '=', 'B.job_id_email')
                ->RightJoin('jobs', 'A.job_id_email', '=', 'jobs.id')
                ->select('A.to_user', 'B.cv_user', 'B.user_id as applicant_id', 'A.job_id_email AS job_id_email', 
                'B.to_user','B.from_user AS from_user', 'jobs.user_id',
                'jobs.jobtitle')
                ->where('A.to_user', Auth::user()->email)
                ->distinct()
                ->get();
     
                //return $applications;

           

      
            return view('users.myJobs', compact('applications'));

       
    } 


}
