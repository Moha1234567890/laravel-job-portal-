<?php

namespace App\Http\Controllers\Admins;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
class DashboardController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('RedirectIfAuthenticated');
//    }


    public function redirect() {

        return view('admins.auth.dashboard');
    }


}
