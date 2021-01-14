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

        $y = User::findOrFail($id);

        Request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);


        if($y)
             $y->update([

            'image' =>  $request->image->store('images','public'),

         ]);

        return redirect()->route('profile', ['id' => Auth::user()->id]);





    }



    public function savedJobs($saved_id) {

        $saved_jobs = SavedJob::select()->where('user_id', $saved_id)->paginate(3);
        $saved_jobs_counter = SavedJob::select()->where('user_id', $saved_id)->count();


        return view('jobs.savedJobs', compact('saved_jobs', 'saved_jobs_counter'));

    }




}
