<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\JobsRequest;
use App\Mail\ApplyMail;
use App\User;
use App\Models\SavedJob;

use App\Models\Job;


class JobsController extends Controller
{
    public function index() {

       // $jobs = Job::select('id', 'email', 'jobtitle', 'location', 'region', 'jobtype', 'jobcategory', 'jobdesc', 'companyname', 'website', 'linkedin', 'created_at' );

        return view('jobs.index')->with('jobs', Job::all());



    }

    public function create() {

       return  view('jobs.create');
    }


    public function store(JobsRequest $request) {


        $job = Job::create($request->all());

        if ($job) {
            session()->flash('success', 'created');

            return redirect(route('home'));

        } else {
            session()->flash('error', 'smth wrong');
        }
    }


    public function show($id, $uid) {

        //$job = SavedJob::find($id);

        $xid = $uid;

        $job = Job::find($id);

        //return $xid;
        //return $xid;





        //return $uid;

        //$uid = 10;


        //$job =  Job::with('savedJobs')->where('id', $id)->select('id','jobtitle','email')->distinct()->limit(1)->first();
       $jobx =  SavedJob::with('jobs')->from('savedjobs')->where('user_id', $uid)->distinct()->get();
         //return $jobx->job_id;
        //$x = $jobs->savedJobs;
        //$f = $jobs;

        /*$data = [
            'xid' => $xid,
            'jobs' => $jobs,
           //'jobx' => $jobx


        ];*/



       // print_r ($f->email);

       /* foreach($x as $y) {
            echo $y->id;
        } */







      // you use jobs and jobx vars to get the data

       return view('jobs.show', compact('jobx', 'job'));


        //dd($request->all());




    }

    public function send(Request $request) {
        $data = [
            'id' => $request->id,
            'to' => $request->to,
            'from' => $request->from,
            'subject' => $request->subject,
            'image' => $request->file('image'),

        ];

        $to = $data['to'];
        $id = $data['id'];


        $mail = \Mail::to($to)->send(new ApplyMail($data));


        if($mail)
            session()->flash('success','you appled to this job');
            return redirect()->route('browse.one.job', ['id' => $id]);









    }

    public function save(Request $request) {

        SavedJob::create([

            'job_id' => $request->job_id,
            'user_id' => $request->user_id,




        ]);

        echo 'done';




    }

    public function delete($job_id) {

       $job_del = SavedJob::where('job_id', $job_id);

        $job_del->delete();

        return redirect(route('home'));

    }














}
