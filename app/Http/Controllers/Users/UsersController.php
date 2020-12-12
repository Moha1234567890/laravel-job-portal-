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

use App\Models\Job;


class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function profile($id) {

        $user = User::find($id);

        return view('users.profile', compact('user'));
    }


    public function update(Request $request, $id) {

        $user = User::find($id);

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

    public function updateImage(Request $request, $id) {

        $y = User::find($id);

        if($y)
            $x = $y->update([

            'image' =>  $request->image->store('images','public'),
            'cv'    => $request->cv->store('cvs','public')

         ]);
        else
            return redirect()->route('home');



    }

    public function savedJobs($saved_id) {

        $saved_jobs = SavedJob::select()->where('user_id', $saved_id)->paginate(3);


        return view('jobs.savedJobs', compact('saved_jobs'));

    }




















}
