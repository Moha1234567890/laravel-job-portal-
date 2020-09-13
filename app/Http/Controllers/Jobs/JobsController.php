<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JobsRequest;
use App\Mail\ApplyMail;

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



    }

    public function send(Request $request) {
        $data = [
            'name' => $request->name,
            'image' => $request->file('image'),
        ];

        $to = "moha1234566044@gmail.com";
        //$from = "hsn42476@gmail.com";

        \Mail::to($to)->send(new \App\Mail\ApplyMail($data));
        //\Mail::from($from)->send(new \App\Mail\ApplyMail($data));

        echo "sent successfully";
    }











}
