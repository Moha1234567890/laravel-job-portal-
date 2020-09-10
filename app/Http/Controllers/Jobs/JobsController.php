<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JobsRequest;

use App\Models\Job;
class JobsController extends Controller
{
    public function create() {

       return  view('jobs.create');
    }


    public function store(JobsRequest $request) {

       $job = Job::create($request->all());

       if($job) {
           session()->flash('success', 'created');

           return redirect(route('home'));

       }else {
           session()->flash('error', 'smth wrong');
       }

       //dd($request->all());


    }


}
