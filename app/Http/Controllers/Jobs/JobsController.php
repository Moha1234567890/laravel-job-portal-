<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\JobsRequest;
use App\Mail\ApplyMail;
use App\User;
use App\Models\SavedJobs;

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


    public function show(Request $request) {

         $job = Job::find($request->id);
        $saved_job = SavedJobs::find($request->id);

        $data = [

            'job' => $job,
            'saved_job' => $saved_job
        ];

        if($job)
            return view('jobs.show', compact('data'));
        else
            return redirect(route('browse.jobs'));

        dd($request->all());




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

        SavedJobs::create([

            'job_id' => $request->job_id,
            'user_id' => $request->user_id,




        ]);

        echo 'done';


    }











}
