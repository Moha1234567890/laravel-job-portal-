<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\JobsRequest;
use App\Mail\ApplyMail;

use App\Models\SavedJob;

use App\Models\Job;


class JobsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {


        return view('jobs.index')->with('jobs', Job::all());



    }

    public function create() {

       return  view('jobs.create');
    }


    public function store(JobsRequest $request) {


        $job = Job::create([
            'user_id' => $request->user_id,
            'email' => $request->email,
            'jobtitle' => $request->jobtitle,
            'location' => $request->location,
            'region' => $request->region,
            'jobtype' => $request->jobtype,
            'vacancy' => $request->vacancy,
            'gender' => $request->gender,
            'edu' => $request->edu,

            'ex' => $request->ex,
            'sal' => $request->sal,
            'jobdesc' => $request->jobdesc,
            'respon' => $request->respon,
            'ben' => $request->ben,
            'jobcategory' => $request->jobcategory,
            'companyname' => $request->companyname,
            'website' => $request->website,
            'linkedin' => $request->linkedin,
            'image' =>  $request->image->store('logos','public')
        ]);

        if ($job) {
            return redirect()->back()->with(['success' => 'created']);

        } else {
            return redirect()->back()->with(['error' => 'something wrong']);

        }
    }


    public function show($id) {


        $job = Job::find($id);

       $jobx =  SavedJob::with('jobs')->where('job_id', $id)->whereHas('jobs', function ($q) {

           $q->select('user_id', 'job_id','id');

       })->get()->first();

       if($job)
           return view('jobs.show', compact('jobx', 'job'));

       else
           abort('404');



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

        return redirect()->route('browse.one.job', $request->job_id);





    }

    public function delete($job_id) {

       $job_del = SavedJob::where('job_id', $job_id);

        $delete = $job_del->delete();

        if($delete) {
            return redirect()->route('browse.one.job', $job_id);

        } else {
            return abort('404');

        }



    }

    public function cats() {



        return view('jobs.cats')->with('cats', Category::all());

    }


    public function category($name) {



        $category = Job::with('getCategory')->where('jobcategory', $name)->paginate(3);

        if($category) {
            return view('jobs.category', compact('category'));
        } else {
            return redirect('home');
        }
    }


    public function cities() {


       $cities = Job::select('region')->distinct()->get();

        return view('jobs.cities', compact('cities'));

    }

    public function city($city) {

        $region = Job::select()->where('region', $city)->paginate(3);

       if($region) {
           return view('jobs.city', compact('region'));
       } else {
           return redirect('home');
       }
    }

    public function search(Request $request) {

        $keyword = $request->get('keyword');

        $state = $request->get('state');

        $selectCate = $request->get('selectCate');

        $getJobs = Job::select()->where(function($q) use($keyword, $state, $selectCate) {
            $q->where('jobtitle', 'like', "{$keyword}")
                ->orWhere('region', 'like', "{$state}")
                ->orWhere('jobcategory', 'like', "{$selectCate}");

        })->paginate(3);




        return view('jobs.search', compact('getJobs'));
    }

    public function jobTitle($job_title) {



       $getJobsTitle = Job::select()->where('jobtitle', $job_title)->paginate(3);



        return view('jobs.jobTitle', compact('getJobsTitle'));
    }







}
