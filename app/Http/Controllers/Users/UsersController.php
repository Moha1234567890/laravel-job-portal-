<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
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
            'pic' =>  $request->image->store('images','public')
        ]);

        return dd($request->all());


    }

















}
