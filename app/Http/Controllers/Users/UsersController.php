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

        $y = User::find($id);



        $x = $y->update([

            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'location' => $request->location,
            'facebook' => $request->facebook,
            'linkedin' => $request->linkedin,
            'link' => $request->link,
            'twitter' => $request->twitter

        ]);








    }

    public function updateImage(UsersRequest $request, $id) {

        $y = User::find($id);



        $x = $y->update([

            'image' =>  $request->image->store('images','public'),
            'cv' => $request->cv->store('cvs','public')

        ]);








    }

















}
