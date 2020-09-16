<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\JobsRequest;
use App\Mail\ApplyMail;
use App\User;

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

        if($job)
            return view('jobs.show', compact('job'));
        else
            return redirect(route('browse.jobs'));



    }

    public function send(Request $request) {
        $data = [
            'to' => $request->to,
            'from' => $request->from,
            'subject' => $request->subject,
            'image' => $request->file('image'),

        ];

        $to = $data['to'];


        \Mail::to($to)->send(new ApplyMail($data));
        //\Mail::from($from)->send(new \App\Mail\ApplyMail($data));

        echo "sent successfully";
    }











}
